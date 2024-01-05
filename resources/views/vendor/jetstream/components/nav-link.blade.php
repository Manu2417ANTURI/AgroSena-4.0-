@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-green-500 text-sm font-medium leading-5 text-zinc-200 hover:text-zinc-50  focus:outline-none focus:border-green-500 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-400 hover:text-green-500 hover:border-gray-300 focus:outline-none focus:text-green-500 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
