<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <form class="flex flex-col items-start w-full"  method="post" action="{{ URL('en/brokers/registration') }}" id="contact-desktop-form" enctype="multipart/form-data">
            @csrf
               
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            <h3 class="text-2xl text-gray-900 font-semibold"> </h3>
            <p class="text-black mb-4">
                We are excited to establish partnerships 
                with esteemed real estate agencies or broker companies. Please complete the following form to initiate the registration process.
            </p>
            
            @include('brokers.desktop.companyInfo')

            @include('brokers.desktop.authorizedPerson')

            @include('brokers.desktop.bankInfo')    

            @include('brokers.desktop.documents')

            <button type="submit"  class="w-full mt-8 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Register Now</button>
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

            var company_name = $("#company_name").val();
            var company_type = $("#company_type").val();
            var trade_license = $("#trade_license").val();
            var trade_license_expiry = $("#trade_license_expiry").val();
            var rera_certificate = $("#rera_certificate").val();
            var rera_certificate_expiry = $("#rera_certificate_expiry").val();
            var authorized_p_name = $("#authorized_p_name").val();
            var authorized_p_country = $("#authorized_p_country").val();
            var authorized_p_passport = $("#authorized_p_passport").val();
            var authorized_p_position = $("#authorized_p_position").val();
            var authorized_p_email = $("#authorized_p_email").val();
            var authorized_p_contact = $("#phone").val();
            var authorized_p_address = $("#authorized_p_address").val();
            var authorized_p_city = $("#authorized_p_city").val();

            var formData = new FormData($('#power_of_atty_or_moa_id')[0]);
            formData.append('power_of_atty_or_moa_id', $('input[type=file]')[0].files[0]); 
            console.log(formData);

            var power_of_atty_or_moa_id = $("#power_of_atty_or_moa_id")[0];
            var valid_trade_license_id = $("#valid_trade_license_id").val();
            var rera_certificate_id = $("#rera_certificate_id").val();
            var broker_card_id = $("#broker_card_id").val();
            var valid_vat_certificate_or_noc_id = $("#valid_vat_certificate_or_noc_id").val();
            var passport_visa_eid_id = $("#passport_visa_eid_id").val();

            console.log(power_of_atty_or_moa_id);
            
            var bank_name = $("#bank_name").val();
            var bank_country = $("#bank_country").val();
            var bank_city = $("#bank_city").val();
            var account_no = $("#account_no").val();
            var iban = $("#iban").val();
            var account_title = $("#account_title").val();
            var country_code = $("#country_code").val();

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
                    company_name:company_name,
                    company_type:company_type,
                    trade_license:trade_license,
                    trade_license_expiry:trade_license_expiry,
                    rera_certificate:rera_certificate,
                    rera_certificate_expiry:rera_certificate_expiry,
                    authorized_p_name:authorized_p_name,
                    authorized_p_country:authorized_p_country,
                    authorized_p_passport:authorized_p_passport,
                    authorized_p_position:authorized_p_position,
                    authorized_p_email:authorized_p_email,
                    authorized_p_contact:authorized_p_contact,
                    authorized_p_address:authorized_p_address,
                    authorized_p_city:authorized_p_city,
                    power_of_atty_or_moa_id:power_of_atty_or_moa_id,
                    valid_trade_license_id:valid_trade_license_id,
                    rera_certificate_id:rera_certificate_id,
                    broker_card_id:broker_card_id,
                    valid_vat_certificate_or_noc_id:valid_vat_certificate_or_noc_id,
                    passport_visa_eid_id:passport_visa_eid_id,
                    bank_name:bank_name,
                    bank_country:bank_country,
                    bank_city:bank_city,
                    account_no:account_no,
                    iban:iban,
                    account_title:account_title,
                    country_code:country_code
                    
                },
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                error : function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                }
            }).done(function(data){  
                alert('Successfully');  
             }).fail(function(jqXHR, ajaxOptions, thrownError){  
                console.log(jqXHR.responseText);
                alert(jqXHR.responseText);  
            });  

        });
    </script>

@endsection
