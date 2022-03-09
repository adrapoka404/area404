<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-500 active:bg-orange-500 focus:outline-none focus:border-yellow-500 focus:ring focus:ring-yellow-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
