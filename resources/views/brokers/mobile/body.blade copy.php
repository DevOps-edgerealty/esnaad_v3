<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-8 sm:my-4 mx-auto">
    <div class="container mx-auto my-8">
        <form class="flex flex-col items-start w-full"  method="post" action="{{ URL('en/communities/register-your-interest') }}" id="contact-desktop-form">
            @csrf
               
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            <p class="text-gray-600 mb-4">We are excited to establish partnerships with esteemed real estate agencies or broker 
                companies. Please complete the following form to initiate the registration process.
            </p>
            
            @include('brokers.mobile.companyInfo')

            @include('brokers.mobile.authorizedPerson')

            @include('brokers.mobile.bankInfo')

            @include('brokers.mobile.documents')


            <button type="submit"  class="w-full mt-6 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Submit</button>
        </form>

    </div>
</div>


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
            console.log(document.getElementById('phone').value);
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
        $('#contact-desktop-form').on('submit', function(e){

            e.preventDefault();

            var name = $("#name").val();

            var email = $("#email").val();

            var phone = $("#phone").val();

            var country_code = $("#country_code").val();

            var msg = $("#msg").val();



            /**
             * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
             * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
             * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
             * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
             *
            */
            $.ajax({
                type:'POST',
                {{ URL('en/agency-registration-post') }}",
                headers : {
                    'Authorizatio' : 'Bearer ' + 'schDv?8qat`6zLVZ;8Lwoy(g`/Asm%D88$a>7Wl,20amt[=uN1',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType : 'application/x-www-form-urlencoded',
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    country_code:country_code,
                    msg:msg,
                    
                },
                error : function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                }
            }).done(function(data){  
                alert('Successfully');  
             }).fail(function(jqXHR, ajaxOptions, thrownError){  
                alert(jqXHR.responseText);  
            });  

        });
    </script>

@endsection
