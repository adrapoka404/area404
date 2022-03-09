@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 font-medium leading-5 text-orange-500 hover:outline-none hover:border-orange-300 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 text-yellow-500 hover:text-orange-500 hover:border-orange-500 focus:outline-none focus:text-orange-500 focus:border-orange-500 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
