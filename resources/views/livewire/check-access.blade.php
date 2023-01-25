<div>
    <form method="POST" wire:submit.prevent="getHeader">
    @csrf
        <div class="flex max-w-7xl mx-auto sm:px-6 lg:px-8  justify-center p-6 h-28">
                <input wire:model="url" wire:keydown.backspace="resetFilters" class="flex-initial w-2/5 border focus:border-b-4 focus:border-[#2db572]" type="text" placeholder="{{ $placeholder }}" required>
                <x-temporary-button class="flex-initial">
                        {{ __('Test Now') }}
                </x-temporary-button>
        </div>
    </form>
    @if(!empty($tmpStatus))
    <div class="flex bg-[url('/public/img/waves-2.svg')] bg-cover shadow-md mt-5 bg-white max-w-7xl mx-auto sm:px-6 lg:px-8  justify-center p-6">
        <div>
            <div class="text-center">
                <div class="flex p-6 text-gray-800 text-lg space-x-6">
                    <div class="font-bold">
                        You are checking the accesibility of
                    </div>
                    <div class="text-green-400">
                        {{ $this->tmpUrl }}
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="flex p-6 text-gray-800 text-lg space-x-6">
                    <div class="font-bold">
                        Status of the WebSite:
                    </div>
                    <div class="text-green-400">
                    {{ $tmpStatus }}
                    </div>
                </div>
            </div>
            @if (!empty($tmpMessage))
            <div class="text-center">
                <div class="flex p-6 text-gray-800 text-lg space-x-6">
                    <div class="font-bold">
                        Message from response:
                    </div>
                    <div class="text-green-400">
                    {{ $tmpMessage }}
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>
    @endif
</div>



