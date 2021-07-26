@props(['name', 'show' => false])

@if($show)
<div class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <div class="absolute inset-0 overflow-hidden">
        <!-- Background overlay, show/hide based on slide-over state. -->
        <div onclick="Livewire.emit('{{ $name }}.toggle')" class="absolute inset-0" aria-hidden="true"></div>

        <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
            <!--
              Slide-over panel, show/hide based on slide-over state.

              Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                From: "translate-x-full"
                To: "translate-x-0"
              Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                From: "translate-x-0"
                To: "translate-x-full"
            -->
            <div class="w-screen max-w-md">
                <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                    <div class="py-6 px-4 bg-indigo-700 sm:px-6">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                {{ $title }}
                            </h2>
                            <div class="ml-3 h-7 flex items-center">
                                <button onclick="Livewire.emit('{{ $name }}.toggle')" class="bg-indigo-700 rounded-md text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                    <span class="sr-only">Close panel</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        @isset($description)
                        <div class="mt-1">
                            <p class="text-sm text-indigo-300">
                                {{ $description }}
                            </p>
                        </div>
                        @endisset
                    </div>
                    <div class="relative flex-1 py-6 px-4 sm:px-6">
                        <!-- Replace with your content -->
                        <div class="absolute inset-0 py-6 px-4 sm:px-6">
                            {{ $slot }}
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif