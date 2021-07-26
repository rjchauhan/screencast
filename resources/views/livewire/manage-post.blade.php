<div>
    <x-slideover :name="$name" :show="$show">
        <x-slot name="title">
            Create Post
        </x-slot>
        <x-slot name="description">
            Create post as you like.
        </x-slot>

        <form wire:submit.prevent="save" method="POST">
            @csrf

            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                <div class="space-y-6 pt-6 pb-5">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-900">
                            Title
                        </label>
                        <div class="mt-1">
                            <input wire:model="title" type="text" name="title" id="title" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            <x-jet-input-error for="title" class="mt-2" />
                        </div>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-900">
                            Description
                        </label>
                        <div class="mt-1">
                            <textarea wire:model="description" id="description" name="description" rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 px-4 py-4 flex justify-end">
                <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </form>
    </x-slideover>
</div>
