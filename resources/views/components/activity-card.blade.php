@props(['activity'])
<x-panel>
    <h3 class="text-gray-900 dark:text-gray-300 text-xl font-bold">{{$activity->created_at->diffForHumans()}}</h3>
    <p class="text-gray-900 dark:text-gray-300"> {{$activity->audience->first_name }} {{$activity->activity}} on {{$activity->event->name}}</p>
</x-panel>
