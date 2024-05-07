<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
    }
</style>


<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-8 mx-auto">
    <div class="flex justify-center ...">
        <div class="mx-4">
            <button onclick="openModal('mymodalcentered-community-register')"   class=" w-100 bg-white hover:bg-black hover:text-white text-sm xl:text-base text-black py-2 px-2 rounded-0" type="button">
                Register Your Interest
            </button>
        </div>
        <div class="mx-4">
            <button onclick="openModal('mymodalcentered-community-share')"  class="text-center align-middle rounded-0 cursor-pointer">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="30.000000pt" height="30.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#fff" stroke="none">
                    <path d="M2495 4725 c-17 -9 -200 -185 -407 -393 -404 -405 -410 -412 -394
                    -496 8 -41 46 -90 87 -111 36 -19 102 -19 137 -1 15 8 128 116 252 240 124
                    124 228 226 232 226 5 0 8 -485 8 -1077 0 -1050 1 -1079 20 -1107 27 -41 87
                    -76 133 -76 52 0 111 32 138 77 l24 38 5 1073 5 1072 225 -226 c124 -124 237
                    -232 252 -240 15 -8 45 -14 68 -14 103 0 175 92 155 198 -6 32 -56 86 -388
                    419 -210 211 -395 389 -413 398 -41 19 -100 19 -139 0z"/>
                    <path d="M1243 3416 c-170 -42 -318 -192 -353 -359 -7 -36 -10 -398 -8 -1182
                    l3 -1130 23 -57 c50 -124 156 -230 281 -280 l56 -23 1315 0 1315 0 57 23 c124
                    50 230 156 280 281 l23 56 3 1134 c3 1250 5 1196 -60 1309 -64 113 -190 205
                    -316 231 -31 6 -163 11 -314 11 -260 0 -262 0 -303 -25 -56 -32 -79 -80 -73
                    -152 5 -55 32 -97 83 -126 13 -8 112 -14 292 -17 302 -6 300 -5 351 -80 l22
                    -33 0 -1090 0 -1089 -21 -38 c-12 -21 -38 -47 -59 -59 l-38 -21 -1244 0 -1245
                    0 -34 23 c-18 12 -44 38 -56 56 l-23 34 0 1092 0 1092 23 33 c50 75 48 74 350
                    80 180 3 279 9 292 17 11 6 34 25 50 43 27 28 30 38 30 98 0 77 -17 107 -76
                    141 -35 20 -51 21 -305 20 -179 0 -286 -5 -321 -13z"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>




<dialog id="mymodalcentered-community-share" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full sm:w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-semibold text-xl text-black">Share</div>
                    <svg onclick="modalClose('mymodalcentered-community-share')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full"  >
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <div class="mb-6">
                            {{-- Living in {{$response[0]['title']}} --}}
                        </div>

                        <div class="mb-6">
                            <div class="flex my-8 w-full text-center mx-auto">

                                <div class="flex-1 mx-auto">
                                    <div class="w-6 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fedgerealty.ae%2F" target="_blank" ria-label="facebook-share-community">
                                            <img
                                                src="{{ asset('front/icons/fb.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-fb"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-6 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="whatsapp://send?text={{$actual_link}}" data-action="share/whatsapp/share" aria-label="whatsapp-share-community">
                                            <img
                                                src="{{ asset('front/icons/wa.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-ig"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-6 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{$actual_link}}" aria-label="community-linkedin-share">
                                            <img
                                                src="{{ asset('front/icons/in.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-in"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-6 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://twitter.com/intent/tweet?url={{$actual_link}}" aria-label="twitter-X-share-community">
                                            <img
                                                src="{{ asset('front/icons/x.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-tw"
                                            >
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        <div class="w-full font-base text-base border border-gray-500 rounded-0 py-2 px-4 mr-2">
                            {{{$actual_link}}}
                        </div>
                        <button type="button" onclick="modalClose('mymodalcentered-community-share')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded-0"   >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</dialog>




<dialog id="mymodalcentered-community-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-1/4 relative">
            <div class="flex flex-col items-start w-full hidden" id="form_submitted">
                <div class="p-7 flex items-stretch w-full">
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full">
                    <div class="rounded-lg  px-16 py-14">
                        <div class="flex justify-center">
                        <div class="rounded-full bg-green-200 p-6">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                            </div>
                        </div>
                        </div>
                        <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Successful!</h3>
                        <p class="w-[100%] text-center font-normal text-gray-600">
                            Thank you for submitting your information. Your registration has been recorded and is currently awaiting verification by our customer support team. You will receive a notification via email once the process is complete
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="flex flex-col items-start w-full" id="form_ready">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">Register Your Interest</div>
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form class="flex flex-col items-start w-full" id="new-community-details-desktop-form"  method="post" action="{{ URL('en/communities/register-your-interest') }}">
                    @csrf
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="community" name="community_id" value="fdsaf">
                        <input type="hidden" id="country_code" name="country_code">
                        <input type="hidden" id="url" name="url" value="{{$actual_link}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>

                        <div class="mb-6">
                            <input type="tel" id="phone" name="phone" class="w-max px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        <button type="button" onclick="modalClose('mymodalcentered-community-register')" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-0"   >
                            Close
                        </button>
                        <button type="submit" class="bg-black hover:bg-white border border-black text-white hover:text-black font-bold py-2 px-4 rounded-0 ml-3">
                            Register Your Interest
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</dialog>




@section('intel-input')
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
        $(document).ready(function () {
            /**
             * INITIATE HEADERS WITH CSRF TOKENIZATION
             * FOR FORM SUBMISSION
             */
            // Function to set a cookie
            function setCookie(name, value, daysToExpire) {
                var expires = "";
                
                if (daysToExpire) {
                    var date = new Date();
                    date.setTime(date.getTime() + (daysToExpire * 5 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                
                document.cookie = name + "=" + value + expires + "; path=/";
            };
            
            // Function to get a cookie
            function getCookie(cookieName) {
                var name = cookieName + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var cookieArray = decodedCookie.split(';');

                for (var i = 0; i < cookieArray.length; i++) {
                    var cookie = cookieArray[i].trim();
                    if (cookie.indexOf(name) === 0) {
                        return cookie.substring(name.length, cookie.length);
                    }
                }

                return null; // Return null if the cookie is not found
            };

            if (getCookie('_TQMSlPTdN6Hwxl')) {
                var successView = document.getElementById("form_ready");
                successView.classList.add("hidden");

                var formView = document.getElementById("form_submitted");
                formView.classList.remove("hidden");
            } else {
                $('#new-community-details-desktop-form').on('submit', function(e){

                    /**
                     * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
                     * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
                     * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
                     * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
                     *
                    */
                    e.preventDefault(); //---cancel default form submissions
                    var formData = new FormData(this); //---get alll the form data here
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        headers: //---set the headers for cross-origin policies between domains
                        {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                            'Access-Control-Allow-Origin': 'https://esnaad.com/en/communities/register-your-interest'
                        },
                        url: "/en/communities/register-your-interest",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data) 
                        {
                            if($.isEmptyObject(data.error)){ //---if success
                                setCookie("_TQMSlPTdN6Hwxl", true, 1); //---set a cookie
                                document.location.href = '/en/community-inquiry/thanks'; //---redirect to thank you page for seo
                            }else{
                                printErrorMsg(data.error);//---show error
                            }
                        }
                    });

                });
            }
            
            
        });
    </script>

@endsection
