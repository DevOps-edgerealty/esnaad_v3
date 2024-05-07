@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <style>

        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
    </style>
@endsection

@section('content')
    @notmobile
        <section class="my-0">
            @include('privacy-and-policy.desktop.header')
        </section>

        <section class="m-0" cl>
            @include('privacy-and-policy.desktop.body')
        </section>
    @endnotmobile
@endsection

@section('luxe_asset_js')

@endsection

