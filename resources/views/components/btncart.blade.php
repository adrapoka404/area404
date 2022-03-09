@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-6 border border-transparent text-sm leading-4 font-medium rounded-full text-yellow-100 bg-green-500 shadow-md shadow-yellow-100 hover:bg-white hover:text-green-300 focus:outline-none focus:bg-white focus:text-green-300 active:bg-white transition'
            : 'inline-flex items-center px-3 py-6 border border-transparent text-sm leading-4 font-medium rounded-full text-green-500 bg-white shadow-md shadow-green-500 hover:bg-green-500 hover:text-yellow-100 focus:outline-none focus:bg-green-500 focus:text-yellow-100 active:bg-white transition';
@endphp
<button type="button" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    </button>