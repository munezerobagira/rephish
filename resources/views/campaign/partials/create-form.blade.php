<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create a  compaign') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Create a campaign to group the events and manage audience very easier') }}
        </p>
    </header>

    <form method="post" action="{{ route('campaign.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <x-simple-input label="Name" name="name"/>
        <x-simple-input label="Description" name="description" type="textarea"/>
        <x-simple-input label="Starting time" name="start_date" type="datetime-local"/>
        <x-simple-input label="Ending time" name="end_date" type="datetime-local"/>

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
            <x-primary-button>{{ __('Save') }}</x-primary-button>

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
