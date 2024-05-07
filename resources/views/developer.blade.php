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

    @include('layoutv2.search')

    @include('developer.intro')

    @include('developer.cards')

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


    {{-- INTEL INPUT --}}
    <script>

        var input = document.querySelector("#phone");

        const iti = window.intlTelInput(input, {

            initialCountry: "auto",

            separateDialCode: true,

            // utilsScript: "/build/js/utils.js", // for editing placeholders

            geoIpLookup: function(success) {

                fetch("https://api.ipdata.co/?api-key=1f9ecc1670c915b3ddd397d233297968ccf720c0861abf9ecac1a8ef")
                .then(function(response) {
                    if (!response.ok) return success("");
                    return response.json();
                })
                .then(function(ipdata) {
                    success(ipdata.country_code);
                });
            },
        });

        input.addEventListener("countrychange", function() {
            // console.log(document.getElementById('phone').value);
            console.log(document.querySelector('[name="phone"]').value);
            document.getElementById('country_code').value = iti.getSelectedCountryData().dialCode;
        })


    </script>

    {{-- FORM SUBMIT --}}
    <script>
        /**
         * INITIATE HEADERS WITH CSRF TOKENIZATION
         * FOR FORM SUBMISSION
         */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
            }
        });
        $('#new-project-details-desktop-form').on('submit', function(e){

            e.preventDefault();

            var name = $("#name").val();

            var email = $("#email").val();

            var phone = $("#phone").val();

            var country_code = $("#country_code").val();

            var property_id = $("#property_id").val();



            /**
             * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
             * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
             * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
             * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
             *
            */
            $.ajax({
                type:'POST',
                {{ URL('en/dubai-new-projects/register-your-interest') }}",
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    country_code:country_code,
                    property_id:property_id,
                    success:function(data){
                        if($.isEmptyObject(data.error)){

                            console.log(data.success); // TEST THE DATA

                            // UPDATE LOCAL STORAGE
                            sessionStorage.removeItem("form_submission");
                            sessionStorage.setItem("form_submission", "true");

                            modalClose('mymodalcentered'); // CLOSE THE MODAL

                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                }
            });

        });
    </script>

@endsection
