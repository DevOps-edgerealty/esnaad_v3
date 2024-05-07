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
<?php
    $id = $response['id'];
    $name = $response['title'];
    $namear = $response['title_ar'];
    $slug = $response['slug_link'];

    $address = $response['address'];
    $addressar = $response['address_ar'];

    $heading = $response['heading'];
    $headingar = $response['heading_ar'];

    $description = $response['description'];
    $descriptionar = $response['description_ar'];

    $header_image = $response['header_image'];

    $meta_title = $response['meta_title'];
    $meta_title_ar = $response['meta_title_ar'];
    $meta_description =       $response['meta_description'];
    $meta_description_ar =    $response['meta_description_ar'];
    $meta_keywords =       $response['meta_keywords'];
    $meta_keywords_ar =    $response['meta_keywords_ar'];

?>
@section('luxe_asset_css')

    <title>
        Mohammed Bin Rashid City District 11 | ESNAAD Developments
    </title>
    <meta name="description" content="Immerse yourself in a metropolis like no other: Mohammed bin Rashid City (MBR City), Dubai, beckons you with its captivating blend of luxury living, world-class attractions, and futuristic innovation." />


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

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
    @mobile
        <section class="my-0">
             @include('community_details.mobile.header')
        </section>

        <section class="my-3">
            @include('community_details.mobile.body')
        </section>

        {{-- <section class="my-3">
            @include('community_details.mobile.buttons')
        </section> --}}

        <section class="my-3" id="project_detail_map_section">
            @include('community_details.mobile.map')
        </section>

    @endmobile

@endsection




@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    @yield('intel-input')

    {{-- MAP --}}
    <script>

        mapboxgl.accessToken = 'pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w';

        var long = {!! json_encode($long) !!};

        var lat = {!! json_encode($lat) !!};

        console.log(long);

        var map = new mapboxgl.Map({
            container: 'map',
            // style: 'mapbox://styles/edgerealty/clde93eip003001nm4dkn4izw',
            style: 'mapbox://styles/edgerealty/cldfzjqvo003r01lkn5msoiyu',
            // center: [55.220108, 25.111407], // starting position [lng, lat],
            // zoom: 11,
            center: [long,lat],
            // center: [-103.5917, 40.6699],
            zoom: 10,
            // bearing:,
            pitch: 0.00,
            projection: 'mercator'
        });


        const marker1 = new mapboxgl.Marker()
            .setLngLat([long, lat])
            .addTo(map);


        map.addControl(new mapboxgl.NavigationControl());

    </script>




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
