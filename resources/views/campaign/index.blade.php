<x-app-layout>
    <x-slot name="header">
        <div  class="flex">
        <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('All campaigns') }}
        </h2>
        <a href="{{route('campaign.create')}}" class="text-sm   bg-green-200 text-black rounded-sm p-2 ">Create</a>
        </div>
       
    </x-slot>
    @foreach ($campaigns as $campaign)
        <div>
            Campaign {{ $campaign['id'] }}
            <a href="{{route('campaign.index').'/'.$campaign['id']}}">View</a>
        </div>
    @endforeach
</x-app-layout>
