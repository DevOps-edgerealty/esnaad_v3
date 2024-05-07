@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-0 space-x-8 pt-1 border-indigo-400 font-thin text-xs md:text-[12px] xl:text-[16px] 2xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out'
            : 'inline-flex items-center px-0 space-x-8 pt-1 border-transparent font-thin text-xs md:text-[12px] xl:text-[16px] 2xl:text-lg text-center  leading-5 text-black hover:underline focus:outline-none  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} style="background-color: #1C1C1C !important; color: #ccc !important;">
    {{ $slot }}
</a>
