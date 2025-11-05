<?php

namespace Vizra\VizraADK\Traits;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Vizra\VizraADK\Models\AgentMemory;
use Vizra\VizraADK\Models\AgentSession;

trait BuildsTraceData
{
    /**
     * Build a hierarchical trace tree from a collection of spans.
     */
    protected function buildTraceTree(Collection $spans): array
    {
        $spansByParent = $spans->groupBy('parent_span_id');
        $rootSpans = $spansByParent->get(null) ?? collect();

        return $rootSpans->map(function ($span) use ($spansByParent) {
            return $this->buildSpanNode($span, $spansByParent);
        })->toArray();
    }

    /**
     * Build an individual trace node including its children.
     */
    protected function buildSpanNode($span, Collection $spansByParent): array
    {
        $children = $spansByParent->get($span->span_id) ?? collect();

        $duration = null;
        $startFormatted = null;
        $endFormatted = null;

        if ($span->start_time) {
            $startTime = Carbon::createFromTimestamp($span->start_time);
            $startFormatted = $startTime->format('H:i:s.v');

            if ($span->end_time) {
                $endTime = Carbon::createFromTimestamp($span->end_time);
                $endFormatted = $endTime->format('H:i:s.v');
                $duration = round(($span->end_time - $span->start_time) * 1000, 2);
            }
        }

        $processData = function ($data) {
            if (is_null($data)) {
                return null;
            }

            if (is_array($data)) {
                return $data;
            }

            if (is_string($data)) {
                $decoded = json_decode($data, true);

                return (json_last_error() === JSON_ERROR_NONE) ? $decoded : $data;
            }

            return (string) $data;
        };

        $contextState = null;
        $contextChanges = null;
        $extractedJson = null;

        $metadata = $processData($span->metadata);
        if (is_array($metadata) && isset($metadata['context_state'])) {
            $contextState = $metadata['context_state'];
        } else {
            try {
                $session = AgentSession::where('session_id', $span->session_id)->first();

                if ($session) {
                    $stateData = $session->state_data;
                    if ($stateData) {
                        if (is_string($stateData)) {
                            $stateData = json_decode($stateData, true);
                        }
                        if (is_array($stateData)) {
                            $contextState = $stateData;
                        }
                    }

                    $contextData = $session->context_data ?? null;
                    if ($contextData) {
                        if (is_string($contextData)) {
                            $contextData = json_decode($contextData, true);
                        }
                        if (is_array($contextData)) {
                            $contextChanges = ['session_context' => $contextData];
                        }
                    }
                } else {
                    $contextState = [
                        '_debug' => [
                            'session_id' => $span->session_id,
                            'session_found' => 'no',
                            'error' => 'No session found with this ID',
                        ],
                    ];
                }
            } catch (\Exception $e) {
                // Ignore fallback errors
            }
        }

        try {
            $memories = AgentMemory::where('session_id', $span->session_id)
                ->orderBy('created_at', 'asc')
                ->get();

            if ($memories->isNotEmpty()) {
                $memoryData = [];
                foreach ($memories as $memory) {
                    $memoryData[] = [
                        'type' => $memory->type,
                        'key' => $memory->key,
                        'content' => $memory->content,
                        'scope' => $memory->scope,
                        'created_at' => $memory->created_at->format('Y-m-d H:i:s'),
                    ];
                }

                if (! empty($memoryData)) {
                    if (! $contextChanges) {
                        $contextChanges = [];
                    }
                    $contextChanges['memories'] = $memoryData;
                    $contextChanges['memory_count'] = count($memoryData);
                }
            }

            $outputData = $processData($span->output);
            if (is_array($outputData) && isset($outputData['response']) && is_string($outputData['response'])) {
                if (preg_match('/```json\s*(\{.*?\})\s*```/s', $outputData['response'], $matches)) {
                    try {
                        $jsonData = json_decode($matches[1], true);
                        if (json_last_error() === JSON_ERROR_NONE && is_array($jsonData)) {
                            $extractedJson = $jsonData;
                        }
                    } catch (\Exception $e) {
                        // Ignore JSON parsing errors
                    }
                }
            }
        } catch (\Exception $e) {
            // Ignore context retrieval errors
        }

        return [
            'span_id' => $span->span_id,
            'trace_id' => $span->trace_id,
            'name' => $span->name,
            'type' => $span->type,
            'status' => $span->status,
            'start_time' => $startFormatted,
            'end_time' => $endFormatted,
            'duration_ms' => $duration,
            'input_data' => $processData($span->input),
            'output_data' => $processData($span->output),
            'error_data' => $span->error_message ? ['message' => $span->error_message] : null,
            'metadata' => $metadata,
            'context_state' => $contextState,
            'context_changes' => $contextChanges,
            'extracted_json' => $extractedJson,
            'children' => $children->map(function ($child) use ($spansByParent) {
                return $this->buildSpanNode($child, $spansByParent);
            })->toArray(),
        ];
    }
}

