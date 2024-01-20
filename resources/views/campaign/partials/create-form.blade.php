<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create a  compaign') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Create a campaign to group the events') }}
        </p>
    </header>

    <form method="post" action="{{ route('campaign.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div>
            <x-input-label for="store_campaign_name" :value="__('Title')" />
            <x-text-input id="store_campaign_name" name="title" type="text" class="mt-1 block w-full" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div> 
        <div>
            <x-input-label for="store_campaign_description" :value="__('Description')" />
            <x-text-area id="store_campaign_description" name="title" type="text" class="mt-1 block w-full"  />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
       
        <div>
            <x-input-label for="store_campaign_name" :value="__('Starting time')" />
            <x-text-input id="store_campaign_name" name="title" type="datetime-local" class="mt-1 block w-full"  />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div> 
        <div>
            <x-input-label for="store_campaign_name" :value="__('Ending time')" />
            <x-text-input id="store_campaign_name" name="title" type="datetime-local" class="mt-1 block w-full"  />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        

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
