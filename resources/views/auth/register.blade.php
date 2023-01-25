<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <div class="text-center">
                <div class="text-gray-600 text-2xl font-bold">
                    {{ __("SIGN UP TO START YOUR FREE 30-DAY TRIAL") }}
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="text-center">
                <div class="text-gray-600 text-sm">
                    {{ __("No commitment. Cancel anytime.") }}
                </div>
            </div>
        </div>

        <!-- Username -->
        <div class="mt-5">
            <input class="block focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 w-full h-12" placeholder="Username" type="text" name="username" :value="old('username')" required autofocus />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Firstname -->
        <div class="mt-4">
            <input class="block focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 w-full h-12" placeholder="Firstname" type="text" name="firstname" :value="old('firstname')" required autofocus />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="mt-4">
            <input class="block focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 w-full h-12" placeholder="Lastname" type="text" name="lastname" :value="old('lastname')" required autofocus />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <input class="block focus:outline-none border-transparent border-b-4 focus:border focus:border-b-4 focus:border-[#2db572] mt-1 w-full h-12" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <input id="password" class="block border-transparent border-b-4 focus:outline-none focus:border focus:border-b-4 focus:border-[#2db572] mt-1 w-full h-12"
                            placeholder="●●●●●●●●"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <input id="password_confirmation" class="block border-transparent border-b-4 focus:outline-none focus:border focus:border-b-4 focus:border-[#2db572] mt-1 w-full h-12"
                            placeholder="●●●●●●●●"
                            type="password"
                            name="password_confirmation"
                            required autocomplete="password_confirmation" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-temporary-button type="submit" class="w-full h-12">
                {{ __('START MY FREE TRIAL') }}
            </x-temporary-button>
        </div>

        <div class="flex flex-row mt-4 justify-center items-center space-x-6">
            <div class="bg-[#d9e2e8] border border-[#d9e2e8] w-full h-px"></div>
            <div class="italic text-[#d9e2e8]">or</div>
            <div class="bg-[#d9e2e8] border border-[#d9e2e8] w-full h-px"></div>
        </div>

        <div class="flex flex-row mt-6 justify-center items-center space-x-6">
            <div class="text-gray-800 font-bold text-lg">Sign in with services:</div>
        </div>

        <div class="flex flex-row mt-6 justify-center items-center space-x-12">
            <div class="flex bg-white w-12 h-12 rounded-md">
                <img class="p-2 bg-contain" src="{{ asset('img/fb.svg') }}">
            </div>
            <div class="flex bg-white w-12 h-12">
                <img class="p-2 bg-contain rounded-md" src="{{ asset('img/google.svg') }}">
            </div>
            <div class="flex bg-white w-12 h-12">
                <img class="p-2 bg-contain rounded-md" src="{{ asset('img/git.svg') }}">
            </div>
        </div>

        <div class="mt-5">
            <div class="text-center">
                <div class="text-gray-600 text-xs">
                    {{ __("Already have an account?") }} <a href="{{ route('login') }}" class="text-[#2db572] hover:underline">{{ __('Sign in') }}</a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="text-center">
                <div class="text-gray-600 text-xs">
                    {{ __("By signing up you agree to our") }} <a href="#" class="text-[#2db572] hover:underline">{{ __('Terms and Conditions') }}</a> {{ __('and') }} <a href="#" class="text-[#2db572] hover:underline">{{ __('Privacy Policy') }}</a>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
