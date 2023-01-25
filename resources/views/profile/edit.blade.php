<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-[#2db572] bg-opacity-5 border-2 border-[#2db572] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.set-site')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#2db572] bg-opacity-5 border-2 border-[#2db572] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#2db572] bg-opacity-5 border-2 border-[#2db572] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#2db572] bg-opacity-5 border-2 border-[#2db572] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
