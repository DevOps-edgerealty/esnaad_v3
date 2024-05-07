@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />

    <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('owl/owl.theme.default.min.css') }}">

    <style>
        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
        .bg-hero {
            background-image: url(/home/8.jpg)
        }
    </style>
@endsection

@section('content')

    @include('home.mobile.hero')

    @include('home.mobile.sectionOne')

    @include('home.mobile.sectionTwo')

    <div class="mt-10"></div>

    @include('home.mobile.sectionThree')

@endsection




@section('luxe_asset_js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script> --}}

    <script src="{{ asset('owl/jquery.min.js') }}"></script>

    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>

    

    {{-- MODALS --}}
    <script>
        $(document).ready(function() {
            var form_submission = sessionStorage.removeItem("form_submission");
        });

        function openModal(key) {
            document.getElementById(key).showModal();
            document.body.setAttribute('style', 'overflow: hidden;');
            document.getElementById(key).children[0].scrollTop = 0;
            document.getElementById(key).children[0].classList.remove('opacity-0');
            document.getElementById(key).children[0].classList.add('opacity-100')
        }

        function modalClose(key) {
            document.getElementById(key).children[0].classList.remove('opacity-100');
            document.getElementById(key).children[0].classList.add('opacity-0');
            setTimeout(function () {
                document.getElementById(key).close();
                document.body.removeAttribute('style');
            }, 100);
        }
    </script>

    

@endsection
