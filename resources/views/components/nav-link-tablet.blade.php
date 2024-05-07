@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-center px-8 pt-1 border-indigo-400 xl:text-base sm:text-sm font-light leading-5 text-esnaad_text transition duration-150 ease-in-out'
            : 'inline-flex items-center text-center px-8 pt-1 border-transparent xl:text-base sm:text-sm font-light leading-5 text-esnaad_text hover:underline focus:outline-none  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
