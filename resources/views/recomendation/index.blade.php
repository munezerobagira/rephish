<x-app-layout>
    <x-slot name="header">
        <div  class="flex">
        <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight ">
            Recomendation  </h2>
            @can("admin")
                <a href="{{route('recomendation.create')}}" class="text-sm   bg-green-200 text-black rounded-sm p-2 "> Add recomendation</a
            @endcan
        </div>

    </x-slot>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @if($recomendations)

            <div class="grid grid-cols-1 items-stretch justify-stretch md:grid-cols-2  gap-4">
            @foreach ($recomendations as $recomendation)

                <x-recomendation-card :recomendation="$recomendation" />

            @endforeach
            </div>
            {{$recomendations->links()}}
        @else
        <div  class="flex flex-col items-center p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <p class="my-4">You don't have any recomendations</p>
            <a href="{{route('campaign.audience.create')}}" class="text-sm   bg-green-200 text-black rounded-sm p-2 ">Create</a>
        </div>
        @endif
    </div>
</x-app-layout>
