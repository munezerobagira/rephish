<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add events to campaign') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Create recomendation for your audience
        </p>
    </header>

    <form method="post" action="{{ route('recomendation.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <x-simple-input label="Category" name="category" type="select" :value="$recomendation->category">
            <option value="email_phishing">Email phishing</option>
            <option value="sms_phishing">SMS phishing</option>
            <option value="twitter_phishing">Twitter phishing</option>
            <option value="facebook_phishing">Facebook phishing</option>
        </x-simple-input>
        <x-simple-input label="Activity" name="activity" type="select" :value="$recomendation->activity">
            <option value="email_phishing">View</option>
            <option value="sms_phishing">Click</option>
            <option value="twitter_phishing">Download</option>
            <option value="facebook_phishing">Facebook phishing</option>
        </x-simple-input>
        <x-simple-input label="Recomendation" name="content" type="textarea" :value="$recomendation->conetnt"/>
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
