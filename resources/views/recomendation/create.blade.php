<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Recomendation
        </h2>
        <a href="{{route('campaign.index')}}" class="text-sm text-gray-700 underline dark:text-gray-300">Back to compaigns</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('recomendation.partials.create-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
