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

    {{-- <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script> --}}

    <style>
        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
        .image-blurred-edge {
            background-image: url({{ asset('assets/img/img-error2.webp') }});
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0 0 4px 4px white inset;
        }

        .placeholder {
            margin-right: auto;
            margin-left: auto;
            margin-top: 20px;
            width: 100%;
            height: 100%;
            min-height: 400px;
            position: relative;
            /* this is the only relevant part for the example */
        }


        /* both DIVs have the same image */

        .bg-image-blur,
        .bg-image {
            background-image: url({{ asset('home/13.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            min-height: 200px;
            width: 100%;
            height: 100%;
        }

        .bg-image-1 {
            background-image: url({{ asset('home/COMING_SOON.jpeg') }});
            background-size: cover;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            min-height: 200px;
            width: 100%;
            height: 100%;
        }


        /* blur the background, to make blurred edges that overflow the unblurred image that is on top */

        .bg-image-blur {
            -webkit-filter: blur(2px);
            -moz-filter: blur(2px);
            -o-filter: blur(2px);
            -ms-filter: blur(2px);
            filter: blur(2px);
        }
    </style>
@endsection

@section('content')

    @include('home.desktop.hero')

    {{-- <div class="py-8">
        @include('home.desktop.intro')
    </div> --}}

    @include('home.desktop.sectionOne')


    <div class="py-4">
        @include('home.desktop.sectionTwo')
    </div>

    @include('home.desktop.sectionThree')

    {{-- @include('home.desktop.sectionFour') --}}

@endsection




@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    

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
