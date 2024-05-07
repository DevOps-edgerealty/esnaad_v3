<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto" @if($langSeg == 'ar') dir="rtl" @endif>
    <div class="grid grid-cols-2 gap-16">
        <div>
            <div class="mx-auto my-16">
                @if (\Session::has('success'))
                    <div class="w-full bg-green-100 rounded-lg p-4">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                <form id="contact-desktop-form" action="{{ URL('en/contact-form-post') }}" method="post">
                    @csrf
                    <div class="icon w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
                    <h3 class="text-3xl font-thin">{{__('frontend.contactFormH')}}</h3>
                    <p class=" mb-4"> {{__('frontend.contactFormP')}}</p>
                    <input type="hidden" name="country_code" id="country_code">
                    <input type="text" name="name" id="name" placeholder="{{__('frontend.formFullName')}}" required class="border p-2  w-full bg-transparent border border-white focus:outline-none focus:border-white focus:ring-white">
                    <input type="text" name="phone" id="phone" placeholder="{{__('frontend.formPhone')}}" required class="border p-2 mt-3 w-full bg-transparent border border-white focus:outline-none focus:border-white focus:ring-white" style="text-indent: 40px;">
                    <input type="email" name="email" id="email" placeholder="{{__('frontend.formEmail')}}" required class="border p-2 mt-3 w-full bg-transparent border border-white focus:outline-none focus:border-white focus:ring-white mt-3">
                    <textarea name="msg" id="" cols="10" rows="3" placeholder="{{__('frontend.formMsg')}}" required class="border p-2 mt-3 w-full bg-transparent border border-white focus:outline-none focus:border-white focus:ring-white"></textarea>
                    <button type="submit"  class="w-full mt-2 bg-white text-black p-3">{{__('frontend.formSubmit')}}</button>
                </form>
            </div>
        </div>
        <div class="py-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24525.775984021395!2d55.260775223769585!3d25.202732498933994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f432322d8d48f%3A0xff82a65f913684c2!2sEsnaad%20developments!5e0!3m2!1sen!2suk!4v1702013459669!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@endsection
