<x-app-layout>

    @include('home.hero')

    @include('home.intro')

    @include('home.featured_offplan')

    <div class="mt-10"></div>

    @include('home.featured_ready')

    {{-- @include('home.featured_luxury') --}}

    <div class="hidden md:block">
        @include('home.community')
    </div>

    @include('home.insights')


</x-app-layout>

@extends('layout.footer')
