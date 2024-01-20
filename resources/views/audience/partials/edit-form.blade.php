<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update audience') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Adding the audience to campaign make it very easier to create campaign events') }}
        </p>
    </header>

    <form method="post" action="{{ route('audience.update', ['campaign'=> $campaign->id, 'audience'=>$audience->id]) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <x-simple-input label="First name" name="first_name" :value="$audience->first_name"/>
        <x-simple-input label="Last name" name="last_name" type="text" :value="$audience->last_name"/>
        <x-simple-input label="email" name="email" type="email" :value="$audience->email"/>
        <x-simple-input label="Phone nubmer" name="phone_number" type="tel" :value="$audience->phone_number"/>
        <x-simple-input label="Whatsapp nubmer" name="whatsapp_number" type="tel" :value="$audience->whatsapp_number"/>
        <x-simple-input label="Facebook username" name="facebook_handler" type="tel" :value="$audience->facebook_handler"/>
        <x-simple-input label="Twitter username" name="twitter_handler" type="text" :value="$audience->twitter_handler"/>

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
            <x-primary-button>{{ __('Update') }}</x-primary-button>

            @if (session('success'))
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
