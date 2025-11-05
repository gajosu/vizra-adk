<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="space-y-8">
        <!-- Hero Section with Docs-style Header -->
        <div class="text-center mb-12">
            <!-- Robot Icon -->
            <div class="inline-flex items-center justify-center w-20 h-20 mb-6 rounded-2xl bg-gradient-to-br from-purple-500/20 to-blue-500/20 border border-purple-500/30">
                <svg class="w-10 h-10 text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15V18A1,1 0 0,1 22,19H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V19H2A1,1 0 0,1 1,18V15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M7.5,13A2.5,2.5 0 0,0 5,15.5A2.5,2.5 0 0,0 7.5,18A2.5,2.5 0 0,0 10,15.5A2.5,2.5 0 0,0 7.5,13M16.5,13A2.5,2.5 0 0,0 14,15.5A2.5,2.5 0 0,0 16.5,18A2.5,2.5 0 0,0 19,15.5A2.5,2.5 0 0,0 16.5,13Z"/>
                </svg>
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                Vizra ADK
            </h1>
            <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                Build, test, and deploy intelligent AI agents with<br> Laravel's elegant framework
            </p>

            <!-- Stats -->
            <div class="flex justify-center items-center space-x-8 text-sm">
                <span class="flex items-center text-gray-400">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                    <span class="text-white font-medium">v{{ $packageVersion }}</span>
                </span>
                <span class="flex items-center text-gray-400">
                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="text-white font-medium mr-2">{{ $agentCount }}</span> agents registered
                </span>
            </div>
        </div>

        <!-- Value Proposition Cards -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Agent Development -->
            <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-6 border border-gray-800/50 hover:border-gray-700/50 transition-all duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500/20 to-indigo-600/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Intelligent Agents</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Create powerful AI agents with memory, tools, and conversation abilities. From simple chatbots to complex reasoning systems.
                </p>
            </div>

            <!-- Multi-Provider Support -->
            <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-6 border border-gray-800/50 hover:border-gray-700/50 transition-all duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500/20 to-indigo-600/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Multi-LLM Support</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Works with OpenAI, Anthropic Claude, Google Gemini, and more. Switch between providers with a single config change.
                </p>
            </div>

            <!-- Laravel Integration -->
            <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-6 border border-gray-800/50 hover:border-gray-700/50 transition-all duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500/20 to-emerald-600/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Laravel Native</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Seamlessly integrates with Laravel using familiar patterns. Artisan commands, service providers, and facades - everything works the Laravel way.
                </p>
            </div>
        </div>

        <!-- Core Features -->
        <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-gray-800/50">
            <h2 class="text-2xl font-bold text-white text-center mb-8">Start Building Now</h2>
            <div class="grid md:grid-cols-3 gap-6">

                <!-- Chat Interface -->
                <a href="{{ route('vizra.chat') }}" wire:navigate class="group bg-gray-800/50 hover:bg-gray-800/70 rounded-xl p-6 transition-all duration-200 border border-gray-700/50 hover:border-purple-500/50">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Chat Interface</h3>
                    <p class="text-gray-400 text-sm">Interactive conversations with your agents in real-time</p>
                    <div class="mt-4 flex items-center text-purple-400 text-sm font-medium">
                        Start Chatting
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>

                 <!-- Evaluation Runner -->
                <a href="{{ route('vizra.eval-runner') }}" wire:navigate class="group bg-gray-800/50 hover:bg-gray-800/70 rounded-xl p-6 transition-all duration-200 border border-gray-700/50 hover:border-blue-500/50">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Evaluation Runner</h3>
                    <p class="text-gray-400 text-sm">Test your agents with CSV datasets and automated quality scoring</p>
                    <div class="mt-4 flex items-center text-blue-400 text-sm font-medium">
                        Run Evaluations
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>

                <!-- Documentation -->
                <a href="https://vizra.ai/docs/adk" target="_blank" class="group bg-gray-800/50 hover:bg-gray-800/70 rounded-xl p-6 transition-all duration-200 border border-gray-700/50 hover:border-green-500/50">
                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Documentation</h3>
                    <p class="text-gray-400 text-sm">Learn everything about building agents with comprehensive guides</p>
                    <div class="mt-4 flex items-center text-green-400 text-sm font-medium">
                        Read Docs
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </div>
                </a>

            </div>
        </div>

        <!-- Quick Start Commands -->
        <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-gray-800/50" x-data="{ copied: null }">
            <h2 class="text-2xl font-bold text-white text-center mb-8">Quick Start Commands</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Create an Agent</h3>
                    <div class="bg-gray-800/50 rounded-lg p-4 font-mono text-sm relative group">
                        <code class="text-green-400" id="cmd-agent">php artisan vizra:make:agent MyAgent</code>
                        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = 'cmd-agent'; setTimeout(() => copied = null, 2000)"
                                class="absolute top-2 right-2 p-2 bg-gray-700/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-gray-600/50">
                            <svg x-show="copied !== 'cmd-agent'" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg x-show="copied === 'cmd-agent'" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Create a Tool</h3>
                    <div class="bg-gray-800/50 rounded-lg p-4 font-mono text-sm relative group">
                        <code class="text-green-400" id="cmd-tool">php artisan vizra:make:tool MyTool</code>
                        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = 'cmd-tool'; setTimeout(() => copied = null, 2000)"
                                class="absolute top-2 right-2 p-2 bg-gray-700/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-gray-600/50">
                            <svg x-show="copied !== 'cmd-tool'" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg x-show="copied === 'cmd-tool'" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Interactive Chat</h3>
                    <div class="bg-gray-800/50 rounded-lg p-4 font-mono text-sm relative group">
                        <code class="text-green-400" id="cmd-chat">php artisan vizra:chat my_agent</code>
                        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = 'cmd-chat'; setTimeout(() => copied = null, 2000)"
                                class="absolute top-2 right-2 p-2 bg-gray-700/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-gray-600/50">
                            <svg x-show="copied !== 'cmd-chat'" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg x-show="copied === 'cmd-chat'" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Create Evaluation</h3>
                    <div class="bg-gray-800/50 rounded-lg p-4 font-mono text-sm relative group">
                        <code class="text-green-400" id="cmd-eval">php artisan vizra:make:eval MyEvaluation</code>
                        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = 'cmd-eval'; setTimeout(() => copied = null, 2000)"
                                class="absolute top-2 right-2 p-2 bg-gray-700/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-gray-600/50">
                            <svg x-show="copied !== 'cmd-eval'" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg x-show="copied === 'cmd-eval'" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Discover Agents</h3>
                    <div class="bg-gray-800/50 rounded-lg p-4 font-mono text-sm relative group">
                        <code class="text-green-400" id="cmd-discover">php artisan vizra:discover-agents</code>
                        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = 'cmd-discover'; setTimeout(() => copied = null, 2000)"
                                class="absolute top-2 right-2 p-2 bg-gray-700/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-gray-600/50">
                            <svg x-show="copied !== 'cmd-discover'" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg x-show="copied === 'cmd-discover'" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Run Evaluation</h3>
                    <div class="bg-gray-800/50 rounded-lg p-4 font-mono text-sm relative group">
                        <code class="text-green-400" id="cmd-run-eval">php artisan vizra:run:eval MyEvaluation</code>
                        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = 'cmd-run-eval'; setTimeout(() => copied = null, 2000)"
                                class="absolute top-2 right-2 p-2 bg-gray-700/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-gray-600/50">
                            <svg x-show="copied !== 'cmd-run-eval'" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg x-show="copied === 'cmd-run-eval'" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Session Explorer -->
        <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-gray-800/50">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white">Session Explorer</h2>
                    <p class="text-gray-400 text-sm mt-1">Load any saved session from the database and review the complete execution trace.</p>
                </div>
                <div class="flex items-center space-x-2 text-xs text-gray-400">
                    <span class="inline-flex items-center px-2 py-1 bg-gray-800/60 rounded-md border border-gray-700/60">
                        <svg class="w-3.5 h-3.5 mr-1 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        Live Trace Viewer
                    </span>
                    <span class="inline-flex items-center px-2 py-1 bg-gray-800/60 rounded-md border border-gray-700/60">
                        <svg class="w-3.5 h-3.5 mr-1 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                        Historical Sessions
                    </span>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Session List -->
                <div class="lg:col-span-1 space-y-6">
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wide mb-2">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18 11a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text"
                                   wire:model.debounce.500ms="sessionSearch"
                                   placeholder="Filter by session ID or agent name"
                                   class="w-full bg-gray-800/60 border border-gray-700/60 rounded-lg pl-10 pr-3 py-2 text-sm text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40 focus:border-blue-500/60">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wide mb-2">Load by Session ID</label>
                        <div class="flex space-x-2">
                            <input type="text"
                                   wire:model.defer="sessionLookupId"
                                   placeholder="Paste a session identifier"
                                   class="flex-1 bg-gray-800/60 border border-gray-700/60 rounded-lg px-3 py-2 text-sm text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40 focus:border-blue-500/60">
                            <button wire:click="loadSessionById"
                                    wire:loading.attr="disabled"
                                    class="px-4 py-2 bg-blue-600/80 hover:bg-blue-500/80 text-white text-sm font-semibold rounded-lg transition">
                                Load
                            </button>
                        </div>
                        <p class="text-[11px] text-gray-500 mt-2">Type or paste any stored session ID to jump directly to its trace.</p>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-300">Recent Sessions</h3>
                            <span class="text-xs text-gray-500">{{ count($sessionList) }} shown</span>
                        </div>
                        <div class="space-y-2 max-h-72 overflow-y-auto custom-scrollbar pr-1">
                            @forelse($sessionList as $session)
                                <button type="button"
                                        wire:click="selectSession('{{ $session['session_id'] }}')"
                                        wire:key="session-option-{{ $session['session_id'] }}"
                                        class="w-full text-left px-3 py-2 border rounded-lg transition {{ $selectedSessionId === $session['session_id'] ? 'bg-blue-900/40 border-blue-700/60 text-white' : 'bg-gray-800/40 border-gray-700/60 text-gray-300 hover:bg-gray-800/60' }}">
                                    <div class="flex items-start justify-between">
                                        <div class="pr-3">
                                            <p class="text-sm font-medium truncate">{{ $session['agent_name'] }}</p>
                                            <p class="text-[11px] text-gray-400 font-mono break-all">{{ $session['session_id'] }}</p>
                                        </div>
                                        <div class="text-right text-[11px] text-gray-400">
                                            <p>{{ $session['messages_count'] }} msgs</p>
                                            <p class="mt-1">{{ $session['updated_at'] ?? '—' }}</p>
                                        </div>
                                    </div>
                                </button>
                            @empty
                                <div class="bg-gray-800/40 border border-gray-700/60 rounded-lg px-3 py-4 text-sm text-gray-400 text-center">
                                    No sessions found.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Trace Viewer -->
                <div class="lg:col-span-2">
                    <div class="bg-gray-800/40 border border-gray-700/60 rounded-2xl h-full flex flex-col">
                        <div class="px-5 py-4 border-b border-gray-700/60 flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Execution Trace</h3>
                                @if(!empty($selectedSessionDetails))
                                    <div class="mt-1 space-y-1 text-xs text-gray-400">
                                        <div class="font-mono text-gray-300 break-all">Session: {{ $selectedSessionDetails['session_id'] }}</div>
                                        <div class="flex flex-wrap gap-x-3">
                                            <span>{{ $selectedSessionDetails['agent_name'] }}</span>
                                            <span>{{ $selectedSessionDetails['messages_count'] }} messages</span>
                                        </div>
                                    </div>
                                @elseif($selectedSessionId)
                                    <p class="mt-1 text-xs text-gray-400">Searching session details…</p>
                                @else
                                    <p class="mt-1 text-xs text-gray-400">Select a session to inspect its execution timeline.</p>
                                @endif
                            </div>
                            <div class="flex items-center space-x-2">
                                @if($selectedSessionId)
                                    <button wire:click="refreshSelectedSessionTrace"
                                            wire:loading.attr="disabled"
                                            class="inline-flex items-center px-3 py-2 text-xs font-semibold rounded-lg border border-gray-700/60 text-gray-300 hover:bg-gray-700/60 transition">
                                        <svg class="w-3.5 h-3.5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9M20 20v-5h-.581m-15.357-2a8.003 8.003 0 0015.357 2" />
                                        </svg>
                                        Refresh
                                    </button>
                                @endif
                            </div>
                        </div>

                        @if(!empty($selectedSessionDetails))
                            <div class="px-5 py-4 border-b border-gray-700/60 grid sm:grid-cols-2 gap-4 text-sm text-gray-300">
                                <div class="bg-gray-900/40 border border-gray-700/60 rounded-lg p-3">
                                    <p class="text-xs uppercase text-gray-500 mb-1">Created</p>
                                    <p>{{ $selectedSessionDetails['created_at'] ?? 'Unknown' }}</p>
                                </div>
                                <div class="bg-gray-900/40 border border-gray-700/60 rounded-lg p-3">
                                    <p class="text-xs uppercase text-gray-500 mb-1">Last Updated</p>
                                    <p>{{ $selectedSessionDetails['updated_at'] ?? 'Unknown' }}</p>
                                </div>
                            </div>
                        @endif

                        <div class="flex-1 overflow-hidden"
                             @if($sessionHasRunningTraces) wire:poll.2s="refreshSelectedSessionTrace" @endif
                             x-data="{ expandedSpans: {} }"
                             wire:key="session-trace-viewer-{{ $selectedSessionId ?? 'none' }}">
                            <div wire:loading.flex
                                 wire:target="selectSession,loadSessionById,refreshSelectedSessionTrace"
                                 class="h-full items-center justify-center text-gray-400">
                                <div class="flex flex-col items-center space-y-2">
                                    <svg class="w-6 h-6 animate-spin text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12a8 8 0 018-8" />
                                    </svg>
                                    <span class="text-sm">Loading trace data…</span>
                                </div>
                            </div>

                            <div class="h-full overflow-y-auto custom-scrollbar"
                                 wire:loading.remove
                                 wire:target="selectSession,loadSessionById,refreshSelectedSessionTrace">
                                @if($traceError)
                                    <div class="m-5 bg-red-900/20 border border-red-800/40 rounded-lg p-5 text-sm text-red-200">
                                        <h4 class="text-red-300 font-semibold mb-2">Unable to load trace</h4>
                                        <p>{{ $traceError }}</p>
                                    </div>
                                @elseif(empty($selectedSessionId))
                                    <div class="h-full flex items-center justify-center text-center px-6 py-12">
                                        <div>
                                            <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-gray-800/60 mb-4">
                                                <svg class="w-7 h-7 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-semibold text-white mb-2">Choose a session</h4>
                                            <p class="text-gray-400 text-sm">Use the list on the left or paste a session ID to explore its execution history.</p>
                                        </div>
                                    </div>
                                @elseif(empty($sessionTrace))
                                    <div class="h-full flex items-center justify-center text-center px-6 py-12">
                                        <div>
                                            <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-gray-800/60 mb-4">
                                                <svg class="w-7 h-7 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 00-2-2H7a2 2 0 00-2 2v6m0 0v1a2 2 0 002 2h10a2 2 0 002-2v-1m-6 0h6" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-semibold text-white mb-2">No trace data available</h4>
                                            <p class="text-gray-400 text-sm">This session does not have any recorded spans yet. Trigger the agent to generate new traces.</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="p-5 space-y-1">
                                        @foreach($sessionTrace as $span)
                                            @include('vizra-adk::partials.trace-span', ['span' => $span, 'level' => 0])
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Your Agents -->
        @if($agentCount > 0)
        <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-gray-800/50">
            <h2 class="text-2xl font-bold text-white text-center mb-8">Your Agents</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($registeredAgents as $agentName => $agentClass)
                    <div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 rounded-xl p-6 border border-gray-700/50">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500/20 to-blue-500/20 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-lg font-semibold text-white mb-1 truncate">{{ $agentName }}</h4>
                                <p class="text-sm text-gray-400 font-mono truncate">{{ class_basename($agentClass) }}</p>
                                <p class="text-xs text-gray-500 mt-2">Available in Chat Interface</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Recent Activity Stats -->
        @if(isset($recent_activity))
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-6 border border-gray-800/50">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-green-400 bg-green-500/20 px-2 py-1 rounded-full">Active</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-1">{{ $recent_activity['active_sessions'] ?? 0 }}</h3>
                <p class="text-gray-400 text-sm">Active Sessions</p>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-6 border border-gray-800/50">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-white mb-1">{{ $recent_activity['total_messages'] ?? 0 }}</h3>
                <p class="text-gray-400 text-sm">Total Messages</p>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-6 border border-gray-800/50">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-white mb-1">{{ $recent_activity['evaluations_run'] ?? 0 }}</h3>
                <p class="text-gray-400 text-sm">Evaluations Run</p>
            </div>
        </div>
        @endif
    </div>
</div>
