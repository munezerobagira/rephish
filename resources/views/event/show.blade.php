<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        View event
        </h2>
        <a href="{{route('event.index', ["campaign"=>$campaign->id])}}" class="text-sm text-gray-700 underline dark:text-gray-300">Back to events</a>
    </x-slot>
    <div class="text-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row space-x-2 p-2 flex flex-row">


        <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @include('event.partials.edit-form')
            </div>
        </div>
        <div class="flex flex-col">
            <h2>Links</h2>
            @if ($audiences)
                @foreach ($audiences  as $audience )
                    <x-panel>
                        <p ><span class="font-bold text-lg my-2">{{$audience->first_name}} {{$audience->last_name}}</span> Activity links</p>
                        <p>
                            <span class="font-bold">View:</span>
                            <a href="{{Config::get('app.url')}}/a?au={{$audience->id}}&amp;e={{$event->id}}&amp;c={{$campaign->id}}&amp;a=v">View</a>
                            <br/>
                            <span class="font-bold">Click:</span>
                            <a href="{{Config::get('app.url')}}/a?au={{$audience->id}}&amp;e={{$event->id}}&amp;c={{$campaign->id}}&amp;a=c">Click</a>
                            <br/>
                            <span class="font-bold">Download:</span>
                            <a href="{{Config::get('app.url')}}/a?au={{$audience->id}}&amp;e={{$event->id}}&amp;c={{$campaign->id}}&amp;a=d">Download</a>
                        </p>
                    </x-panel>
                @endforeach
            @endif


        </div>
    </div>

    </div>
</x-app-layout>
