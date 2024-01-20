<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View campaign') }}
        </h2>
        <a href="{{route('campaign.index')}}" class="text-sm text-gray-700 underline dark:text-gray-300">Back to compaigns</a>
    </x-slot>
    <div class="text-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row space-x-2 p-2">
            <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @include('campaign.partials.edit-form')
                </div>
            </div>
            <div class="flex flex-col space-y-2">

                <div class="ml-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a  href="{{route("event.index", ["campaign"=>$campaign->id])}}">Events</a>
                    </div>
                </div>
                <div class="ml-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a  href="{{ Route('audience.index', ['campaign'=>$campaign['id']])}}">Audiences</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
