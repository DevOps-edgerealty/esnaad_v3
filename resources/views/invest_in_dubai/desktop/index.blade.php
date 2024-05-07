@extends('layoutv2.master')

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
        @include('invest_in_dubai.desktop.header')
    </section>

    <section class="m-0">
        @include('invest_in_dubai.desktop.body')
    </section>
@endsection










@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    @yield('intel-input')

@endsection

