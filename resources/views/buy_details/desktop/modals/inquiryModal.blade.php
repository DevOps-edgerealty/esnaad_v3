<dialog id="mymodalcentered" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">{{$properties->title_en}}</div>
                    <svg onclick="modalClose('mymodalcentered')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form class="flex flex-col items-start w-full"  method="post" action="{{ route('luxe.form.new.projects.details') }}">
                    @csrf
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="property_id" name="property_id" value="{{$properties->id}}">
                        <input type="hidden" id="country_code" name="country_code">
                        <input type="hidden" id="url" name="url" value="{{Request::url()}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>
                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>
                        <div class="mb-6">
                            <input type="tel" id="phone" name="phone" class="w-max px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        <button type="submit" class="bg-whatsapp hover:bg-whatsapp text-white font-bold py-2 px-4 rounded mr-3">
                            Register Your Interest
                        </button>
                        <button type="button" onclick="modalClose('mymodalcentered')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded"   >
                            Close
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
