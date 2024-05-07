<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <?php
            $route_name = request()->route()->getName();
        ?>

        @if(isset($jsonSEOData))
            <title>{{$jsonSEOData['title_en']}}</title>
            <meta name="description" content="{{$jsonSEOData['description_en']}}" />
            <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
        @endif


        <style>
            html,body{
                background-color: #fff !important;
                max-width: 100%;
                overflow-x: hidden;
            }
            @font-face {
                font-family: 'OptimaNew';
                font-style: normal;
                font-weight: lighter;
                src: local('OptimaNew'), url('front/fonts/Optima/OptimaLTPro-Roman.otf') format('otf');
            }

            @font-face {
                font-family: 'Optima';
                font-style: lighter;
                font-weight: normal;
                src: local('Optima'), url('front/fonts/OPTIMA.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Italic';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Italic'), url('front/fonts/Optima_Italic.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Medium';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Medium'), url('front/fonts/Optima Medium.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Bold';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Bold'), url('front/fonts/OPTIMA_B.woff') format('woff');
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('luxe_asset_css')

    </head>


    <body class="font-body bg-white" style="background-color: #fff !important;">
        <div class="min-h-screen ">

            @notmobile
                
                <nav x-data="{ open: false }" class="bg-white p-0 m-0 z-50 shadow " id="sample" style="position: fixed; width: 100vw !important" >
                    @include('layout-outbound.navigation')
                </nav>
            @endnotmobile

            @mobile
                @include('layout-outbound.mobileNavigation2')
            @endmobile

            <div class="relative">
                @yield('content')
            </div>
            
            @include('layout-outbound.footer')

        </div>




</html>
