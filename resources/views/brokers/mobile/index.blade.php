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
    @mobile
        <section class="my-3">
             @include('brokers.mobile.header')
        </section>

        <section class="my-3">
            @include('brokers.mobile.body')
        </section>

       {{-- <section class="my-3">
            @include('community_details.mobile.buttons')
        </section>

        <section class="my-3">
            @include('community_details.mobile.gallery')
        </section>

        <section class="my-3" id="project_detail_map_section">
            @include('community_details.mobile.map')
        </section> --}}

    @endmobile

@endsection






@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    @yield('intel-input')

@endsection





@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    @yield('intel-input')

@endsection

