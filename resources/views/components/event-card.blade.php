@props(['event', 'campaign'])
<x-panel>
    <h3 class="text-gray-900 dark:text-gray-300">{{$event->name}} </h3>

    <p class="text-gray-900 dark:text-gray-300">{{$event->time}}</p>
    <p class="text-gray-900 dark:text-gray-300">Repeat: {{$event->frequency=="no_repeat"?"once":$event->frequency}}</p>
    <p class="text-gray-900 dark:text-gray-300">Created at: {{$event->created_at }}</p>

    <div class="flex flex-row justify-between space-x-2">
        <form method="PATCH" action="{{route('event.show',['event'=>$event->id, 'campaign'=>$campaign->id])}}">

            <x-primary-button>Edit</x-primary-button>
        </form>
        <form method="post" action="{{route('event.show',['event'=>$event->id, 'campaign'=>$campaign->id])}}">
            @csrf
            @method('delete')
            <x-primary-button>delete</x-primary-button>
        </form>
    </div>
</x-panel>
