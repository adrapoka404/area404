@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-orange-500 focus:border-yellow-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
