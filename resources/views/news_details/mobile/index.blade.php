@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <style>
        body{
            background-color: #1c1c1c !important;
        }
        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
    </style>
@endsection

@section('content')
<?php
    $id = $response['id'];
    $title = $response['title'];
    $titlear = $response['title_ar'];
    $sluglink = $response['slug_link'];
    $thumbnail = $response['thumbnail'];
    $description = $response['description'];
    $header_image = $response['header_image'];
    $images = $response['website_news_images'];
    $created_at = $response['created_at'];
?>
    @mobile
        {{-- <section>
             @include('news_details.mobile.header')
        </section> --}}
        <section>
            @include('news_details.mobile.body')
        </section>
{{-- 

        <section class="my-3">
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

        function copyText() {
            navigator.clipboard.writeText(document.getElementById("linksys").innerHTML);
            document.querySelector('#linksysbutton').textContent = 'Copied';
            document.getElementById('linksysbutton').classList.remove('bg-black');
            document.getElementById('linksysbutton').classList.add('bg-gray-300');
            document.getElementById('linksysbutton').classList.add('text-black');
        }
    </script>
@endsection


