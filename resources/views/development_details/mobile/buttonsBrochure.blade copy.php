<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
        z-index: 10 !important;
        white-space:nowrap;
    }
    .iti-mobile .intl-tel-input .country-list {
        max-height: 200px !important; 
    }
    .iti__country-list{
        z-index: 10 !important;
    }
    
</style>


<div class="mx-0 px-0 ">
    <div class="mx-0">
        <button onclick="openModal('mymodalcentered-brochure-register')"   class="underline font-bold text-lg mx-auto w-full" type="button">
            Download Brochure
        </button>

        <dialog id="mymodalcentered-brochure-register" class="bg-transparent relative w-screen h-screen">
            <div class="p-2 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
                <div class="bg-white flex rounded-0 w-full relative">
                    <div class="flex flex-col items-start w-full">
                        <div class="p-4 flex items-stretch w-full">
                            <div class="font-thin text-xl text-gray-900">Download Brochure</div>
                            <svg onclick="modalClose('mymodalcentered-brochure-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                            </svg>
                        </div>
                        <div class="p-4 w-full hidden" id="brochureDownloadCompletedForm">
                            <p class="text-black my-5 w-full text-xl text-center">
                                Thank You!
                            </p>
                            <p class="text-black my-5 w-full text-center">
                                {{-- Our real estate agents will be in touch with you shortly --}}
                                The details of your inquiry will be emailed
                            </p>
                            <p class="text-gray-500 text-xs my-2 w-full text-center" >
                                *Please don't forget to check your spam just in case
                            </p>
                        </div>
                        <form id="brochureForm" class="w-full">
                            <div class="px-4  w-full" style="max-height: 40vh;">
                                <input type="hidden" id="community_brochure" name="community_id" value="Project Name">
                                <input type="hidden" id="country_code_brochure" name="country_code">
                                <input type="hidden" id="url_brochure" name="url" value="{{$actual_link}}">
                                <input type="hidden" id="project_id_brochure" name="project_id" value="{{$actual_link}}">
                                {{-- <input type="hidden" id="country_brochure" name="country"> --}}
                                <input type="hidden" id="enquiry_type_brochure" name="enquiry_type2" value="Project Name Here">

                                <div class="mb-6">
                                    <input type="text" id="name2" name="name_brochure" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                                </div>

                                <div class="mb-6">
                                    <input type="email" id="email2" name="email_brochure" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                                </div>

                                <div class="mb-6">
                                    <input type="tel" id="phone2" name="phone_brochure" class="w-max px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                                </div>
                            </div>

                            <div class="p-4 flex justify-end items-center w-full">
                                <button type="button" onclick="modalClose('mymodalcentered-brochure-register')" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-0"   >
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
    </div>
</div>






@section('form2')
    {{-- INTEL INPUT --}}
    <script>
        var input2 = document.querySelector("#phone2");

        const iti2 = window.intlTelInput(input2, {
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
                    console.log(ipdata);
                });
            },
        });

        input.addEventListener("countrychange", function() {
            // console.log(document.getElementById('phone').value);
            // console.log(document.querySelector('[name="phone2"]').value);
            document.getElementById('country_code_brochure').value = iti2.getSelectedCountryData().dialCode;
        })
    </script>
    
    {{-- <script>
        $(document).ready(function() {
            fetch('https://api.ipdata.co/v1/ip/', options)
                .then(response => response.json())
                .then(response => console.log(response))
                .catch(err => console.error(err));
            // $.getJSON("https://api.ipdata.co/country_name?api-key=1f9ecc1670c915b3ddd397d233297968ccf720c0861abf9ecac1a8ef?format=jsonp&callback=?",
            //     function(json) {
                    
            //     }
            // );
        });
    </script> --}}

    <script>

        // Example: Get the value of the "user" cookie
        var brochureInquiry = getCookie("project_brochure_download");

        // Use the value as needed
        if (!brochureInquiry) {
           
        // var agency_reg_form_bool = sessionStorage.getItem('project_inquiry_submitted');
        // if(!agency_reg_form_bool) {

            $('#brochureForm').on('submit', function(e){
                e.preventDefault();

                var formData = new FormData(this);

                // setCookie("project_brochure_download", "true", 1);

                var successView = document.getElementById("brochureForm");
                successView.classList.add("hidden");

                var formView = document.getElementById("brochureDownloadCompletedForm");
                formView.classList.remove("hidden");

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'authkey': 'YOUR_SECRET_KEY',
                    }
                });

                $.ajax({
                    type:'POST',
                    {{ URL('en/project-detail-brochure-download') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success:function(data)
                    {
                        // if($.isEmptyObject(data.error)){

                        // }else{
                        //     printErrorMsg(data.error);
                        //     alert(data.error);

                        // }
                    }
                });
            });
        }
            else {
            var successView = document.getElementById("brochureForm");
            successView.classList.add("hidden");

            var formView = document.getElementById("brochureDownloadCompletedForm");
            formView.classList.remove("hidden");
        }
    </script>

@endsection
