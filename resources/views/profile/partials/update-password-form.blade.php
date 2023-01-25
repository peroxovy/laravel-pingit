<section>
    <header>
        <h2 class="text-lg font-bold text-white">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-200">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <input id="current_password" placeholder="Current Password" name="current_password" type="password" class="focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <input id="password" placeholder="New Password" name="password" type="password" class="focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <input id="password_confirmation" placeholder="Confirm New Password" name="password_confirmation" type="password" class="focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-temporary-button>{{ __('Save') }}</x-temporary-button>

            @if (session('status') === 'password-updated')
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
