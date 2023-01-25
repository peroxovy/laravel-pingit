<section>
    <header>
        <h2 class="text-lg font-bold text-white">
            {{ __('Set Website URL to check every 5 min') }}
        </h2>

        <p class="mt-1 text-sm text-gray-200">
            {{ __('Make sure you set valid URL.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('profile.url') }}" class="mt-6 space-y-6">
        @csrf
        @method('POST')

        <div>
            <input id="url" name="url" value="{{ $user->site->url ?? '' }}" type="text"  class="focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 block w-full" />
            <x-input-error :messages="$errors->updatePassword->get('url')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-temporary-button>{{ __('Save') }}</x-temporary-button>

            @if (session('status') === 'url-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-white"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
