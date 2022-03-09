<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-yellow-500 rounded-md font-semibold text-xs text-orange-500 uppercase tracking-widest shadow-sm  hover:text-white hover:bg-orange-500 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-500 active:text-white active:bg-orange-500 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
