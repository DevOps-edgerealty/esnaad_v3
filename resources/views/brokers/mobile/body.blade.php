<style>
    #loading {
        display: inline-block;
        width: 12px;
        height: 12px;
        border: 2px solid rgba(0,0,0);
        border-radius: 50%;
        border-top-color: #e9e9e9;
        animation: spin 1s ease-in-out infinite;
        -webkit-animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
            to { -webkit-transform: rotate(360deg); }
    }
    @-webkit-keyframes spin {
        to { -webkit-transform: rotate(360deg); }
    }
</style>
<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-8 sm:my-4 mx-auto" id="agency-registration-form">
    <div class="container mx-auto my-8 px-4">
        <form class="flex flex-col items-start w-full"  method="post" action="/en/agency-registration-post" id="uploadForm">
            @csrf
               
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            
            <p class="   mb-4">We are excited to establish partnerships with esteemed real estate agencies or broker 
                companies. Please complete the following form to initiate the registration process.
            </p>
            
            @include('brokers.mobile.companyInfo')

            @include('brokers.mobile.authorizedPerson')

            @include('brokers.mobile.bankInfo')

            @include('brokers.mobile.documents')

            <button type="submit" id="submitForm" class="w-full mt-6 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Submit</button>
            <button type="button" id="submitVerifying" hidden disabled class="w-full mt-8 bg-transparent border text-black font-semibold p-3"><div id="loading"></div> Verifying</button>
        </form>
    </div>
</div>


<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto hidden" id="agency-registration-form-submitted">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <!-- component -->
        <div class="flex  items-center justify-center ">
            <div class="rounded-lg  px-16 py-14">
                <div class="flex justify-center">
                <div class="rounded-full bg-green-200 p-6">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
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
</div>


@section('intel-input')
    {{-- INTEL INPUT --}}
    <script>

        var input = document.querySelector("#phone");

        const iti = window.intlTelInput(input, {

            initialCountry: "auto",

            separateDialCode: true,

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
            document.getElementById('country_code').value = iti.getSelectedCountryData().dialCode;
        })


    </script>

    {{-- FORM SUBMIT --}}
    <script>
        $(document).ready(function () {

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
            
            //---check if coookies are available
            if (getCookie('_LTfRrpKDnj9SMp')) {
                var successView = document.getElementById("agency-registration-form");
                successView.classList.add("hidden");

                var formView = document.getElementById("agency-registration-form-submitted");
                formView.classList.remove("hidden");
            } else {
                /**
                 * INITIATE HEADERS WITH CSRF TOKENIZATION
                 * FOR FORM SUBMISSION
                 */
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
                    }
                });
                $('#uploadForm').on('submit', function(e){
                    e.preventDefault();
                    document.getElementById('submitForm').style.display = 'none';
                    document.getElementById('submitVerifying').style.display = 'inline-block';
                    var formData = new FormData(this);

                    $.ajax({
                        type:'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                            'Access-Control-Allow-Origin': 'https://esnaad.com/en/agency-registration'
                        },
                        url: "/en/agency-registration-post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data) 
                        {
                            if($.isEmptyObject(data.error)){
                                setCookie("_LTfRrpKDnj9SMp", true, 1); //---set a cookie
                                document.location.href = '/en/broker-registration/thanks'; //---redirect to thank you page for seo
                            }else{
                                printErrorMsg(data.error);
                            }
                        }
                    });
                });
            }

            // sessionStorage.setItem("agency_registration_submitted", "false");
            // sessionStorage.getItem("agency_registration_submitted");

            var agency_reg_form_bool = sessionStorage.getItem('agency_registration_submitted');

            if(!agency_reg_form_bool) {

                /**
                 * INITIATE HEADERS WITH CSRF TOKENIZATION
                 * FOR FORM SUBMISSION
                 */
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
                    }
                });
                $('#uploadForm').on('submit', function(e){

                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        type:'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                            'Access-Control-Allow-Origin': 'https://esnaad.com/en/agency-registration'
                        },
                        url: "/en/agency-registration-post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data) 
                        {
                            if($.isEmptyObject(data.error)){

                                // console.log(data.success); // TEST THE DATA
                                sessionStorage.setItem("agency_registration_submitted", "true");

                                var successView = document.getElementById("agency-registration-form");
                                successView.classList.add("hidden");

                                var formView = document.getElementById("agency-registration-form-submitted");
                                formView.classList.remove("hidden");
                            }else{
                                printErrorMsg(data.error);
                            }
                        }
                    });
                });
            }
             else {
                var successView = document.getElementById("agency-registration-form");
                successView.classList.add("hidden");

                var formView = document.getElementById("agency-registration-form-submitted");
                formView.classList.remove("hidden");
            }
        });
    </script>
@endsection
