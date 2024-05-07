@extends('layoutv2.master')
<?php
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    $seg1 = $uri_segments[1];
    if($seg1 == 'en' || $seg1 == 'ar'){
        $langSeg = $uri_segments[1];
    }else{
        $langSeg = 'en';
    }
?>
@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <style>
        .iti {
            width: 100% !important;
            margin-top: 10px;
        }
        .iti__flag-container{   
            overflow: visible;
        }
    </style>
@endsection
@section('content')
    @mobile
        <section class="">
             @include('careers.mobile.header')
        </section>

        <section class="my-3">
            @include('careers.mobile.body')
        </section>
        
    @endmobile

@endsection






@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script src="{{ asset('js/career/4srMa62q63awVETd4mo9.min.js') }}"></script>
    
    @yield('intel-input')

@endsection
