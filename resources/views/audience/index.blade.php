<x-app-layout>
    <x-slot name="header">
        <div  class="flex">
        <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight ">
            {{ $campaign->name}} Audience
        </h2>
        <a href="{{route('audience.create', ["campaign"=>$campaign->id])}}" class="text-sm   bg-green-200 text-black rounded-sm p-2 ">Create</a>
        </div>

    </x-slot>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @if($audience)

            <div class="grid grid-cols-1 items-stretch justify-stretch md:grid-cols-2  gap-4">
            @foreach ($audience as $aud)

                <x-audience-card :audience="$aud" :campaign="$campaign"/>

            @endforeach
            </div>
            {{$audience->links()}}
        @else
        <div  class="flex flex-col items-center p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <p class="my-4">You don't have any events in compaign</p>
            <a href="{{route('campaign.audience.create')}}" class="text-sm   bg-green-200 text-black rounded-sm p-2 ">Create</a>
        </div>
        @endif
    </div>
</x-app-layout>
