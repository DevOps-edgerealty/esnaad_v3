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

<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto" id="agency-registration-form">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <form id="uploadForm">
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            <h3 class="text-2xl text-gray-900 font-semibold"> </h3>
            <p class=" mb-4">
                We are excited to establish partnerships 
                with esteemed real estate agencies or broker companies. Please complete the following form to initiate the registration process.
            </p>

            <div id="status"></div>
            
            @include('brokers.desktop.companyInfo')

            @include('brokers.desktop.authorizedPerson')

            @include('brokers.desktop.bankInfo')    

            @include('brokers.desktop.documents')

            <button id="submitForm" data-sitekey="6Lc-16MpAAAAAHrw0hWYB9OrhlQ4q2xjLZkyqgHY" data-callback='brokerRegOnSubmit'  class="g-recaptcha w-full mt-8 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Register Now</button>
            <button id="submitVerifying" hidden disabled class="w-full mt-8 bg-transparent border text-black font-semibold p-3"><div id="loading"></div> Verifying</button>
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
                <h3 class="my-4 text-center text-3xl font-semibold ">Successful!</h3>
                <p class="w-[100%] text-center font-normal ">
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

    {{-- <script>
        function submitForm() {
            var form = document.getElementById('uploadForm');
            var formData = new FormData(form);

            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');
        
            var xhr = new XMLHttpRequest();
            
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Request was successful
                        // document.getElementById('status').innerHTML = 'Form submitted successfully';
                        Swal.fire({
                            title: "Registration Completed",
                            text: "Thank you for registering! An email has been sent to your inbox with further details about your account status.",
                            icon: "success"
                        }); 
                    } else if (xhr.status >= 400 && xhr.status < 500) {
                        // Client error (4xx): Handle errors related to user input or request structure
                        document.getElementById('status').innerHTML = 'Client error: ' + xhr.responseText;
                        Swal.fire({
                            title: 'Error!',
                            text: 'Input Error. Please check the form data.',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    } else if (xhr.status >= 500) {
                        // Server error (5xx): Handle errors on the server side
                        // document.getElementById('status').innerHTML = 'Server error: ' + xhr.responseText;
                        Swal.fire({
                            title: 'Error!',
                            text: 'Server Error',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    } else {
                        // Handle other cases as needed
                        // document.getElementById('status').innerHTML = 'Unexpected error: ' + xhr.responseText;
                        Swal.fire({
                            title: 'Error!',
                            text: 'Unexpected Error',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    }
                }
            };

            xhr.onerror = function () {
                console.error('Network error occurred');
            };

            xhr.open('POST', "https://mis.esnaad.com/api/v1/esnaad/agency-registration", true);
            // xhr.setRequestHeader("X-CSRF-TOKEN", CSRF_TOKEN);
            xhr.setRequestHeader('Content-Type', 'multipart/form-data');
            xhr.setRequestHeader("authkey", 'YOUR_SECRET_KEY');
            xhr.send(formData);
        }

    </script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

    {{-- FORM SUBMIT --}}
    <script defer>
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
        
        $(document).ready(function () {
            
            //---check if coookies are available
            if (getCookie('_LTfRrpKDnj9SMp')) {
                var successView = document.getElementById("agency-registration-form");
                successView.classList.add("hidden");

                var formView = document.getElementById("agency-registration-form-submitted");
                formView.classList.remove("hidden");
            }
        });
        
        function brokerRegOnSubmit(token) {
            var formData = new FormData(document.getElementById("uploadForm"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'authkey': 'YOUR_SECRET_KEY',
                }
            });
            document.getElementById('submitForm').style.display = 'none';
            document.getElementById('submitVerifying').style.display = 'inline-block';
            $.ajax({
                type:'POST',
                headers: //---set the headers for cross-origin policies between domains
                {
                    'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                    'Access-Control-Allow-Origin': 'https://esnaad.com/en/agency-registration-post'
                },
                url: "/en/agency-registration-post",
                data: formData,
                processData: false,
                contentType: false,
                success:function(response)
                {
                    if (response.errors) {
                        printErrorMsg('something');//---show error
                    } else if (response.success) {
                        setCookie("_LTfRrpKDnj9SMp", true, 1); //---set a cookie
                        document.location.href = '/en/broker-registration/thanks'; //---redirect to thank you page for seo

                    } else {
                        document.location.href = '/en/subscription/thanks';
                        // $("#status").html("Captcha failed.");
                    }
                }
                
            });
        };
    </script>
@endsection
