@props(['name', 'description', 'id', 'created', 'updated'])
<x-panel>
    <h3 class="text-gray-900 dark:text-gray-300 text-xl font-bold">{{$name}}</h3>

    <p class="text-gray-900 dark:text-gray-300">{{$description}}</p>
    <p class="text-gray-900 dark:text-gray-300">Created at: {{$created }}</p>

    <div class="flex flex-row justify-between space-x-2">
        <form method="PATCH" action="/campaign/{{$id}}">

            <x-primary-button>Edit</x-primary-button>
        </form>
        <form method="post" action="/campaign/{{$id}}">
            @csrf
            @method('delete')

            <x-primary-button>delete</x-primary-button>
        </form>
    </div>
</x-panel>
