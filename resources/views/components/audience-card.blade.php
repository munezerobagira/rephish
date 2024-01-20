@props(['audience', 'campaign'])
<x-panel>
    <h3 class="text-gray-900 dark:text-gray-300">{{$audience->first_name}} {{$audience->last_name}}</h3>

    <p class="text-gray-900 dark:text-gray-300">{{$audience->email}}</p>
    <p class="text-gray-900 dark:text-gray-300">{{$audience->phone_number}}</p>
    <p class="text-gray-900 dark:text-gray-300">Created at: {{$audience->created_at }}</p>

    <div class="flex flex-row justify-between space-x-2">
        <form method="PATCH" action="{{route('audience.show',['audience'=>$audience->id, 'campaign'=>$campaign->id])}}">

            <x-primary-button>Edit</x-primary-button>
        </form>
        <form method="post" action="{{route('audience.show',['audience'=>$audience->id, 'campaign'=>$campaign->id])}}">
            @csrf
            @method('delete')

            <x-primary-button>delete</x-primary-button>
        </form>
    </div>
</x-panel>
