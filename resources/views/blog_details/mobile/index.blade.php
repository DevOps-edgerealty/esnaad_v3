@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></>

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

        <section class="mb-3">
            @include('blog_details.mobile.header')
        </section>

        <div class="block relative isolate overflow-hidden my-3">
            <div class="mx-auto max-w-7xl px-4">
                @include('blog_details.mobile.intro')
            </div>
        </div>



        <section class="my-3">
            @include('blog_details.mobile.body')
        </section>

        <section class="my-3" id="project_detail_map_section">
            {{--@include('developer_details.desktop.map') --}}
        </section>

        <section class="my-3">
            {{--@include('developer_details.desktop.similarProps') --}}
        </section>

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
    </script>


@endsection

