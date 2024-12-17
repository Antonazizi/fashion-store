@props(['active'])

@php
$classes = ($active ?? false)
            ? 'cursor-pointer hover:bg-gray-200 md:px-4 py-1.5 transition-colors duration-300 ease-in-out font-medium border-b border-gray-300'
            : 'cursor-pointer hover:bg-gray-200 md:px-4 py-1.5 transition-colors duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
