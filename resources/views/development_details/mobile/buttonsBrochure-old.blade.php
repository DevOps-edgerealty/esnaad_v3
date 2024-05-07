<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
    }
</style>


<div class="mx-0 px-0 ">
    <div class="mx-0">
        <button onclick="openModal('mymodalcentered-brochure-register')"   class="underline font-bold text-lg mx-auto w-full" type="button">
            Download Brochure
        </button>
    </div>
</div>





<dialog id="mymodalcentered-brochure-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-2 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-4 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">Register Your Interest</div>
                    <svg onclick="modalClose('mymodalcentered-brochure-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="p-4 w-full hidden" id="brochureDownloadCompletedForm">
                    <p class="text-black my-5 w-full text-xl text-center">
                        Thank You!
                    </p>
                    <p class="text-black my-5 w-full text-center">
                        Our real estate agents will be in touch with you shortly
                        {{-- An email with the details for your inquiry will be sent to the email address you provided --}}
                    </p>
                    {{-- <p class="text-gray-500 text-xs my-2 w-full text-left" >
                        *Please don't forget to look in your spam or junk folder just in case
                    </p> --}}
                </div>
                <form id="brochureForm" class="w-full" >
                    <div class="px-4  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="community2" name="community_id" value="fdsaf">
                        <input type="hidden" id="country_code2" name="country_code">
                        <input type="hidden" id="url2" name="url" value="{{$actual_link}}">
                        <input type="hidden" id="enquiry_type2" name="enquiry_type2" value="Project Name Here">

                        <div class="mb-6">
                            <input type="text" id="name2" name="name2" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email2" name="email2" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
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


<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
    }
</script>

@section('intel-input')

    <script>

        function setCookie(name, value, daysToExpire) {
            
            var expires = "";
            
            if (daysToExpire) {
                var date = new Date();
                date.setTime(date.getTime() + (daysToExpire * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        // Function to get a specific cookie by name
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
        }

        // Example: Get the value of the "user" cookie
        var brochureInquiry = getCookie("project_brochure_download");

        // Use the value as needed
        if (!brochureInquiry) {
           
        // var agency_reg_form_bool = sessionStorage.getItem('project_inquiry_submitted');
        // if(!agency_reg_form_bool) {

            $('#brochureForm').on('submit', function(e){
                e.preventDefault();

                var formData = new FormData(this);

                setCookie("project_brochure_download", "true", 1);

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
