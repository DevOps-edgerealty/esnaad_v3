<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{$meta_title}}</title>
        <meta name="description" content="{{$meta_description}}">
        <meta name="keywords" content="{{$meta_keywords}}">

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        {{-- <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> --}}
        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}


        <!-- Styles -->
        <style>
            @font-face{
                font-family:gotham;
                font-style:normal;
                font-weight:400;
                src:local('Gotham'), url('front/fonts/Gotham.woff') format('woff')
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-body antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layout.navigation')


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


        </div>

    <script>
        $(document).ready(function () {
            sessionStorage.setItem("form_submission", "false");
        });
    </script>
</html>
