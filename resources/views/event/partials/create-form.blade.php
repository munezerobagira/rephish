<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add events to campaign') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Create events targeted to the audience
        </p>
    </header>

    <form method="post" action="{{ route('event.store', ['campaign'=> $campaign->id]) }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <x-simple-input label="Name" name="name"/>
        <x-simple-input label="Category" name="category" type="select">
                <option value="email_phishing">Email phishing</option>
                <option value="sms_phishing">SMS phishing</option>
                <option value="twitter_phishing">Twitter phishing</option>
                <option value="facebook_phishing">Facebook phishing</option>
        </x-simple-input>
        <x-simple-input label="Event time" name="time" type="time"/>

        <x-simple-input label="Frequency" name="frequency" type="select">
            <option value="no_repeat">Doesn't repeat</option>
            <option value="daily">Daily</option>
            <option value="weekly_{{date('l',Date::now()->getTimestamp())}}">Weekly on {{date('l',Date::now()->getTimestamp())}}</option>
            <option value="monthly">Monthly</option>
    </x-simple-input>

        <x-simple-input label="Content" name="content" type="textarea"/>

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
