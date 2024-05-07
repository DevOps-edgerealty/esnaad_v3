@extends('layoutv2.master')

@section('luxe_asset_css')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    {{-- <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
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

        <section class="mb-0">
            @include('new_projects_detail.mobile.header')
        </section>

        <div class="block relative isolate overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-3">
                @include('new_projects_detail.mobile.intro')
            </div>
        </div>

        <section class="mb-3">
            @include('new_projects_detail.mobile.infobar')
        </section>

        <section class="my-3">
            @include('new_projects_detail.mobile.body')
        </section>

        <section class="my-3">
            @include('new_projects_detail.mobile.gallery')
        </section>

        <section class="my-3" id="project_detail_map_section">
            @include('new_projects_detail.mobile.map')
        </section>

        <section class="my-3">
            @include('new_projects_detail.mobile.similarProps')
        </section>

    @endmobile

    {{--
        @mobile
            <div class="block relative isolate overflow-hidden">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    @include('new_projects_detail.mobile.intro')
                </div>
            </div>
        @endmobile
    --}}



@endsection




@section('luxe_asset_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>



    @yield('intel-input')


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

