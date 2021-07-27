<div
    x-data="{
        show: @entangle($attributes->wire('model')).defer
    }"
    x-show="show"
    x-on:keydown.escape.window="show = false"
    class="fixed inset-0 overflow-hidden"
    aria-labelledby="slide-over-title"
    role="dialog" aria-modal="true"
    style="display: none;"
>
    <div class="absolute inset-0 overflow-hidden">
        <!-- Background overlay, show/hide based on slide-over state. -->
        <div x-on:click="show = false" class="absolute inset-0" aria-hidden="true"></div>

        <div class="fixed inset-y-0 pl-16 max-w-full right-0 flex"
             x-show="show"
             x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
        >
            <div class="w-screen max-w-xl">
                <div class="h-full flex flex-col bg-white shadow-xl">
                    <div class="flex-1 h-0 overflow-y-auto">
                        <div class="py-6 px-4 bg-indigo-700 sm:px-6">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                    {{ $title }}
                                </h2>
                                <div class="ml-3 h-7 flex items-center">
                                    <button x-on:click="show = false" type="button" class="bg-indigo-700 rounded-md text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
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
                        <div class="flex-1 flex flex-col justify-between">
                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

