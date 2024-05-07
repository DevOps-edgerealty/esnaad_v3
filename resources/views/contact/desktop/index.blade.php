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
    <section class="my-0">
        @include('contact.desktop.header')
    </section>

    <section class="m-0">
        @include('contact.desktop.body')
    </section>
@endsection










@section('luxe_asset_js')
    <script defer type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @yield('intel-input')

@endsection

