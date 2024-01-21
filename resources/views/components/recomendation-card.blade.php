@props(['recomendation'])
<x-panel>
    <h3 class="text-gray-900 dark:text-gray-300 text-xl font-bold">{{$recomendation->name}}</h3>

    <p class="text-gray-900 dark:text-gray-300">{{$recomendation->content}}</p>
    <p class="text-gray-900 dark:text-gray-300">Created at: {{$recomendation->created_at }}</p>

    <div class="flex flex-row justify-between space-x-2">
        <form method="PATCH" action="{{route('recomendation.edit', ['recomendation'=>$recomendation->id])}}">

            <x-primary-button>Edit</x-primary-button>
        </form>
        <form method="post" action="{{route('recomendation.destroy', ['recomendation'=>$recomendation->id])}}">
            @csrf
            @method('delete')

            <x-primary-button>delete</x-primary-button>
        </form>
    </div>
</x-panel>
