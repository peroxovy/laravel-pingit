<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <div class="text-center">
                <div class="text-gray-600 text-3xl font-bold">
                    {{ __("WELCOME BACK") }}
                </div>
            </div>
        </div>

        <div class="mt-2">
            <div class="text-center">
                <div class="text-gray-600 text-sm">
                    {{ __("Please enter your e-mail and password") }}
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-6">
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

        <div class="mt-4">
            <x-temporary-button class="w-full h-12">
                {{ __('SIGN IN') }}
            </x-temporary-button>
        </div>

        <!-- Remember Me -->
        <div class="flex flex-row mt-4 justify-center space-x-32">
            <div class="inline-flex">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#2db572] shadow-sm focus:ring-[#2db572]" name="remember" checked>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="inline-flex">
            @if (Route::has('password.request'))
                <a class="text-sm text-[#2db572] hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
            </div>
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

        <div class="mt-4">
            <a href="{{ route('register') }}">
                <button class="uppercase font-bold text-sm p-2 w-full bg-[#f3f7f9] border-[#2db572] border-2 hover:border-b-[#2db572] hover:border-b-4">
                    {{ __('Sign up for Ping.it') }}
                </button>
            </a>
        </div>
    </form>
</x-guest-layout>
