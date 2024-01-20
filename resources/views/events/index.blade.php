<x-app-layout>
    <x-slot name="header">
        <div  class="flex">
        <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('All events') }}
        </h2>
        <a href="{{route('audience.create')}}" class="text-sm   bg-green-200 text-black rounded-sm p-2 ">Add audience</a>
        </div>
    </x-slot>
</x-app-layout>
