@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-yellow-100 bg-orange-500 shadow-md shadow-yellow-100 hover:bg-white hover:text-orange-500 focus:outline-none focus:bg-white focus:text-orange-500 active:bg-white transition'
            : 'inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-orange-700 bg-white shadow-md shadow-orange-300 hover:bg-orange-500 hover:text-yellow-100 focus:outline-none focus:bg-orange-500 focus:text-yellow-100 active:bg-white transition';
@endphp
<button type="button" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>