

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row space-x-2">
            <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hi, ") }}  {{$user->name}} welcome to rephish
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                        <x-panel>
                            <p class="text-xl font-bold">{{$campaigns_count}}</p>
                            <p>My Campaigns</p>
                        </x-panel>
                        <x-panel>
                            <p class="text-xl font-bold">{{$events_count}}</p>
                            <p>My Events</p>
                        </x-panel>
                        <x-panel>
                            <p class="text-xl font-bold">{{$audiences_count}}</p>
                            <p>My Audience</p>
                        </x-panel>
                        <x-panel>
                            <p class="text-xl font-bold">{{$activities_count}}</p>
                            <p> Audience Activities</p>
                        </x-panel>
                        @can('admin')
                            <x-panel>
                                <p class="text-xl font-bold">{{$total_recomendations}}</p>
                                <p>Total recomendation</p>
                            </x-panel>
                            <x-panel>
                                <p class="text-xl font-bold">{{$total_users}}</p>
                                <p>Total Platform Users</p>
                            </x-panel>
                            <x-panel>
                                <p class="text-xl font-bold">{{$total_campaigns}}</p>
                                <p>Total Campaign</p>
                            </x-panel>
                            <x-panel>
                                <p class="text-xl font-bold">{{$total_events}}</p>
                                <p>Total Events</p>
                            </x-panel>
                            <x-panel>
                                <p class="text-xl font-bold">{{$total_audiences}}</p>
                                <p>Total audience</p>
                            </x-panel>
                            <x-panel>
                                <p class="text-xl font-bold">{{$total_audiences}}</p>
                                <p>Total activities</p>
                            </x-panel>

                        @endcan
                    </div>
                </div>
                <
            </div>
            <div class="ml-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a  href="{{ Route('campaign.index')}}">Campaigns</a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a  href="{{ Route('recomendation.index')}}">Recomendation</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
