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
    $name = $response['name'];
    $namear = $response['name_ar'];
    $slug = $response['slug_link'];
    $starting_price = $response['starting_price'];
    $bedrooms = $response['bedrooms'];
    $project_video = $response['project_video'];
    $project_image_id = $response['project_image']['id'];
    $images = $images;
    $brochurelink = $response['brochure_link'];

    $header = $response['header'];
    $description = $response['description'];
    $descriptionar = $response['description_ar'];

    $secOne_title = $response['secOne_title'];
    $secOne_title_ar = $response['secOne_title_ar'];
    $secTwo_title = $response['secTwo_title'];
    $secTwo_title_ar = $response['secTwo_title_ar'];
    $secThree_title = $response['secThree_title'];
    $secThree_title_ar = $response['secThree_title_ar'];
    $SecTwo_amenities = $response['SecTwo_amenities'];
    $SecTwo_amenities_ar = $response['SecTwo_amenities_ar'];

    $SecOnedescription         =    $response['SecOne_description'];
    $SecOnedescription_ar      =    $response['SecOne_description_ar'];
    $SecTwo_description         =    $response['SecTwo_description'];
    $SecTwo_description_ar      =    $response['SecTwo_description_ar'];
    $SecThree_description       =    $response['SecThree_description'];
    $SecThree_description_ar    =    $response['SecThree_description_ar'];
?>
@section('luxe_asset_css')
    @yield('developments_gallery_head')

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet'/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="{{ asset('splide/dist/css/splide.min.css')}}">

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
        
    <input hidden id="pid" value="{{$pid}}">
    <input hidden id="brochurelink" value="{{$brochurelink}}">

        <section class="my-0">
            @include('development_details.desktop.header')
        </section>
        <section class="my-10">
            @include('development_details.desktop.bodyOne')
        </section>

        <section class="my-15 ">
            @include('development_details.desktop.bodyFour')
        </section>

        <section class="my-15">
            @include('development_details.desktop.bodyTwo')
        </section>


        <section class="my-0" id="project_detail_map_section">
            @include('development_details.desktop.map')
        </section>     
@endsection




@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scrip>
    <script src="{{ asset('splide/dist/js/splide.min.js')}}"></script>
    <script src="{{ asset('js/development_details/H9U71GVy27r2KLA3fG150xO.min.js')}}"></script>


    @yield('intel-input')

    @yield('developments_gallery_js')


    <script>
        function copyText() {
            navigator.clipboard.writeText(document.getElementById("linksys").innerHTML);
            document.querySelector('#linksysbutton').textContent = 'Copied';
            document.getElementById('linksysbutton').classList.remove('bg-black');
            document.getElementById('linksysbutton').classList.add('bg-gray-300');
            document.getElementById('linksysbutton').classList.add('text-black');
        }
    </script>


    {{-- MAP --}}
    <script>

        mapboxgl.accessToken = 'pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w';

        var long = {!! json_encode($long) !!};

        var lat = {!! json_encode($lat) !!};


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

