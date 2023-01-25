<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center  px-4 py-2 text-white bg-[#2db572] border border-[#2db572] font-montserrat font-medium text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-[#3cc481] disabled:opacity-25 transition ease-in-out duration-350']) }}>
    {{ $slot }}
</button>
