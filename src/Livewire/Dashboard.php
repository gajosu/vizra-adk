<?php

namespace Vizra\VizraADK\Livewire;

use Livewire\Component;
use Vizra\VizraADK\Models\AgentSession;
use Vizra\VizraADK\Models\TraceSpan;
use Vizra\VizraADK\Services\AgentRegistry;
use Vizra\VizraADK\Traits\BuildsTraceData;

class Dashboard extends Component
{
    use BuildsTraceData;

    public $packageVersion;

    public $agentCount;

    public $registeredAgents = [];

    public $sessionList = [];

    public $sessionSearch = '';

    public $sessionLookupId = '';

    public $selectedSessionId = null;

    public $selectedSessionDetails = [];

    public $sessionTrace = [];

    public $sessionHasRunningTraces = false;

    public $isTraceLoading = false;

    public $traceError = null;

    public function mount()
    {
        $this->packageVersion = $this->getPackageVersion();
        $this->loadAgentData();
        $this->loadRecentSessions();
    }

    public function loadAgentData()
    {
        $registry = app(AgentRegistry::class);
        $this->registeredAgents = $registry->getAllRegisteredAgents();
        $this->agentCount = count($this->registeredAgents);
    }

    public function updatedSessionSearch()
    {
        $this->loadRecentSessions();
    }

    public function loadRecentSessions()
    {
        $query = AgentSession::query()
            ->withCount('messages')
            ->orderByDesc('updated_at');

        if ($this->sessionSearch) {
            $search = trim($this->sessionSearch);
            $query->where(function ($builder) use ($search) {
                $builder->where('session_id', 'like', "%{$search}%")
                    ->orWhere('agent_name', 'like', "%{$search}%");
            });
        }

        $sessions = $query->limit(50)->get();

        $this->sessionList = $sessions->map(function (AgentSession $session) {
            return [
                'session_id' => $session->session_id,
                'agent_name' => $session->agent_name,
                'messages_count' => $session->messages_count ?? 0,
                'created_at' => optional($session->created_at)->toDateTimeString(),
                'updated_at' => optional($session->updated_at)->toDateTimeString(),
            ];
        })->toArray();
    }

    public function selectSession($sessionId)
    {
        $this->selectedSessionId = $sessionId;
        $this->loadSelectedSessionTrace();
    }

    public function loadSessionById()
    {
        $sessionId = trim($this->sessionLookupId);

        if ($sessionId === '') {
            return;
        }

        $this->sessionLookupId = $sessionId;
        $this->selectedSessionId = $sessionId;
        $this->loadSelectedSessionTrace();
        $this->loadRecentSessions();
    }

    public function refreshSelectedSessionTrace()
    {
        $this->loadSelectedSessionTrace();
    }

    protected function loadSelectedSessionTrace()
    {
        $this->traceError = null;
        $this->sessionTrace = [];
        $this->sessionHasRunningTraces = false;
        $this->selectedSessionDetails = [];

        if (empty($this->selectedSessionId)) {
            return;
        }

        $this->isTraceLoading = true;

        try {
            $session = AgentSession::query()
                ->withCount('messages')
                ->where('session_id', $this->selectedSessionId)
                ->first();

            if (! $session) {
                $this->traceError = 'No session found with the provided ID.';

                return;
            }

            $this->selectedSessionDetails = [
                'session_id' => $session->session_id,
                'agent_name' => $session->agent_name,
                'messages_count' => $session->messages_count ?? 0,
                'created_at' => optional($session->created_at)->toDayDateTimeString(),
                'updated_at' => optional($session->updated_at)->toDayDateTimeString(),
            ];

            $spans = TraceSpan::where('session_id', $this->selectedSessionId)
                ->orderBy('start_time', 'asc')
                ->get();

            if ($spans->isEmpty()) {
                return;
            }

            $this->sessionHasRunningTraces = $spans->contains(function ($span) {
                return $span->status === 'running';
            });

            $this->sessionTrace = $this->buildTraceTree($spans);
        } catch (\Throwable $e) {
            $this->traceError = $e->getMessage();
        } finally {
            $this->isTraceLoading = false;
        }
    }

    private function getPackageVersion()
    {
        $composerPath = __DIR__.'/../../composer.json';
        if (file_exists($composerPath)) {
            $composer = json_decode(file_get_contents($composerPath), true);

            return $composer['version'] ?? 'dev';
        }

        return 'unknown';
    }

    public function render()
    {
        return view('vizra-adk::livewire.dashboard')
            ->layout('vizra-adk::layouts.app');
    }
}
