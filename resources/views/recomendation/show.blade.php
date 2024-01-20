<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        View event
        </h2>
        <a href="{{route('event.index', ["campaign"=>$campaign->id])}}" class="text-sm text-gray-700 underline dark:text-gray-300">Back to events</a>
    </x-slot>
    <div class="text-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row space-x-2 p-2">
            <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('event.partials.edit-form')
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
