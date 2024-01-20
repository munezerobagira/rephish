<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create a  compaign') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Create a campaign to group the events and manage audience very easier') }}
        </p>
    </header>

    <form method="post" action="/campaign/{{$campaign->id}}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <x-simple-input label="Name" name="name" :value="$campaign['name']"/>
        <x-simple-input label="Description" name="description" type="textarea" :value="$campaign['description']"/>
        <x-simple-input label="Starting time" name="start_date" type="datetime-local" :value="$campaign['start_date']"/>
        <x-simple-input label="Ending time" name="end_date" type="datetime-local"  :value="$campaign['end_date']"/>

        <!--- map through all error -->
        @if ($errors->any())
            <div class="text-sm text-red-400">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Edit') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
