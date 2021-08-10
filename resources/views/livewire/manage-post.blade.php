<div>
    <x-slideover wire:model="show">
        <x-slot name="title">
            @if($editing)
                Edit Post: {{ $model->title }}
            @else
                Create Post
            @endif
        </x-slot>

        <x-slot name="description">
            Description goes here.
        </x-slot>

        <form wire:submit.prevent="submit">
            <div class="space-y-6 pt-6 pb-5">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-900">
                        Title
                    </label>
                    <div class="mt-1">
                        <input wire:model="model.title" type="text" name="title" id="title" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        <x-jet-input-error for="model.title" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-900">
                        Description
                    </label>
                    <div class="mt-1">
                        <textarea wire:model="model.description" id="description" name="description" rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 flex justify-end">
                <button wire:click.prevent="close" type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @if($editing)
                        Update
                    @else
                        Create
                    @endif
                </button>
            </div>
        </form>
    </x-slideover>
</div>
