<x-app-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg text-center">
                <div class="p-6 text-white text-4xl font-bold">
                    {{ __("CHECK WEBSITE AVAILABILITY") }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg text-center">
                <div class="p-6 text-white text-base">
                    {{ __("Check site availability from more than 30 locations around the world") }}
                </div>
            </div>
        </div>
        <livewire:check-access>
    </div>
</x-app-layout>
