<style>
    .footer-li>li{
        list-style: none;
    }
    .footer-li {
        padding-left: -30px !important;
    }

    svg {
        color: #fff !important;

    }
</style>

    {{-- @notmobile --}}
    @if($route_name != 'esnaad.contact')
        @include('layout.footer_form')
    @endif
    {{-- @endnotmobile --}}

    @tablet
        <div class="block py-24 sm:py-8  " id="footer" style="visibility:hidden">
            <div class="container mx-auto px-2 lg:px-8">

                <!-- Footer Links -->
                <div class="mx-auto mt-4 max-w-full lg:mt-24 lg:max-w-full">

                    <div class="grid grid-cols-2 gap-4 reverse"  @if($langSeg == 'ar') dir="RTL" @endif>

                        <div class="col-span-2">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-light-3.png') }}" alt="esnaad-logo" title="ESNAAD" loading="lazy" height="auto" width="auto" class="mb-5">
                                </span>

                                <p class="text-md  w-full text-justify mb-6">
                                    {{ __('frontend.footerEsnaadP') }}
                                </p>
                                <div class="flex my-8 w-full text-justify my-auto inline-block align-middle w-50">

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                                <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook" rel="canonical">
                                                    <img src="{{ asset('sm/fb.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                                </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
                                                <img src="{{ asset('sm/ig.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x" rel="canonical">
                                                <img src="{{ asset('sm/x.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin" rel="canonical">
                                                <img src="{{ asset('sm/in.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_WA')}}" target="_blank" aria-label="esnaad-whatsapp" rel="canonical">
                                                <img src="{{ asset('sm/wa.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="https://youtube.com/@ESNAADdevelopments?si=hTB34_Ratgi4YOHJ" target="_blank" aria-label="esnaad-youtube" rel="canonical">
                                                <img src="{{ asset('sm/yt.png')}}" title="ESNAAD-youtube" alt="ESNAAD-youtube" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>
                                    

                                </div>

                            </div>
                        </div>

                        <div class="mt-5"  @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md  text-gray-800">
                                {{ __('frontend.footerLinks') }}
                            </p>

                            <ul class="list-none footer-li" style="padding-left:    0px !important;">
                                <li class="text-md  my-2">
                                    <a href="{{ URL($langSeg.'/about-us') }}" aria-label="about-us" rel="canonical">{{ __('frontend.footerLinksAboutEsnaad') }}</a>
                                </li>
                                <li class="text-md  my-2">
                                    <a href="{{ URL($langSeg.'/invest-in-dubai') }}" aria-label="invest-in-dubai" rel="canonical">{{ __('frontend.footerLinksWhyInvest') }}</a>
                                </li>
                                <li class="text-md  my-2">
                                    <a href="{{ URL($langSeg.'/agency-registration') }}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksBrokerReg') }}</a>
                                </li>
                                <li class="text-md  my-2">
                                    <a href="{{ URL($langSeg.'/careers')}}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksCareers') }}</a>
                                </li>
                                {{-- <li class="text-md  my-2">
                                    <a href="{{ URL($langSeg.'/contact') }}" aria-label="contact-us" rel="canonical">{{ __('frontend.footerLinksContact') }}</a>
                                </li> --}}

                            </ul>
                        </div>

                        <div class="mt-5"  @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md  text-gray-800">
                                {{ __('frontend.footerContacts') }}
                            </p>

                            <ul class="list-none footer-li leading-10" style="padding-left: 0px !important;">
                                <li class="text-md  my-2">
                                    <div  class="inline-flex items-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M2385 5109 c-559 -58 -1049 -402 -1308 -915 -43 -86 -111 -283 -131
                                            -384 -74 -364 -26 -736 135 -1064 24 -49 341 -553 704 -1120 490 -765 669
                                            -1037 694 -1053 46 -31 116 -31 162 0 24 16 206 291 691 1047 362 564 680
                                            1070 707 1125 188 383 221 827 90 1228 -84 257 -215 471 -405 661 -355 355
                                            -840 527 -1339 475z m360 -912 c269 -75 478 -288 546 -557 8 -31 14 -105 14
                                            -170 0 -123 -12 -188 -53 -285 -93 -219 -290 -387 -522 -446 -71 -18 -269 -18
                                            -340 0 -232 59 -429 227 -522 446 -41 97 -53 162 -53 285 0 123 12 188 53 285
                                            93 220 305 400 522 444 30 6 64 13 75 15 37 9 229 -3 280 -17z"/>
                                            <path d="M1244 1635 c-728 -203 -1062 -553 -886 -928 32 -70 124 -174 212
                                            -242 291 -223 840 -384 1525 -447 183 -17 747 -17 930 0 685 63 1234 224 1525
                                            447 88 68 180 172 212 242 177 378 -171 736 -906 933 -98 26 -121 29 -131 18
                                            -7 -7 -175 -269 -375 -583 -200 -314 -381 -592 -402 -620 -194 -251 -592 -250
                                            -779 2 -20 26 -204 310 -409 631 -204 320 -377 582 -384 581 -6 0 -66 -16
                                            -132 -34z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        {{ __('frontend.footerAddress') }}
                                    </div>
                                </li>
                                <li class="text-md  my-2">
                                    <div class="inline-flex items-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="13.000000pt" height="13.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M894 5105 c-124 -27 -147 -45 -470 -369 -282 -281 -304 -306 -337
                                            -376 -55 -116 -68 -178 -74 -342 -6 -165 7 -274 57 -464 301 -1143 1647 -2647
                                            2935 -3279 382 -187 671 -269 955 -270 174 0 262 18 383 77 78 38 98 57 379
                                            337 314 314 332 337 372 470 21 70 21 202 0 272 -36 120 -51 138 -448 537
                                            -209 211 -408 403 -441 427 -198 141 -453 121 -619 -48 -50 -51 -70 -81 -104
                                            -162 -24 -54 -55 -115 -70 -135 -96 -130 -280 -212 -437 -196 -234 25 -583
                                            237 -879 533 -358 358 -569 770 -518 1010 24 112 103 229 196 291 22 16 70 41
                                            106 56 104 44 129 59 178 101 166 145 202 417 81 610 -35 57 -725 754 -809
                                            819 -67 51 -155 91 -234 105 -75 14 -125 13 -202 -4z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        {{ __('frontend.footerContacts') }}
                                    </div>
                                </li>
                                <li class="text-md  my-2">
                                    <div class="inline-flex items-center" >
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M366 4464 c-255 -62 -415 -322 -351 -569 20 -75 57 -143 107 -195 45
                                            -46 2175 -1471 2253 -1506 119 -54 260 -52 382 5 95 45 2182 1442 2235 1496
                                            249 254 113 686 -243 770 -94 22 -4291 21 -4383 -1z"/>
                                            <path d="M0 2236 c0 -810 3 -1181 11 -1218 37 -176 179 -320 360 -363 94 -22
                                            4267 -22 4372 0 182 38 329 184 366 363 13 61 16 2386 3 2380 -4 -1 -487 -323
                                            -1074 -715 -587 -392 -1099 -729 -1139 -748 -110 -56 -204 -77 -339 -77 -135
                                            0 -229 21 -339 77 -40 19 -552 356 -1139 748 -587 392 -1070 714 -1074 715 -5
                                            2 -8 -521 -8 -1162z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        <?php //EMAIL IS BELOW ENCODED OR IN OBFUSCATION ?>
                                        Email Us
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

                <div class="col-span-2 mx-auto">

                    <div class="flex-grow border-t border-gray-400 mt-4"></div>

                    <div class="flex justify-left my-2">
                        <div>
                            <p class="text-base ">
                                ESNAAD © {{ now()->year }} All Rights Reserved | Terms & Conditions | Privacy & Policy
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endtablet

    @desktop
        <div class="block py-12 sm:py-8   " id="footer" style="visibility:hidden">
            <div class="container mx-auto px-2 lg:px-8">

                <!-- Footer Links -->
                <div class="mx-auto mt-4 max-w-full lg:mt-0 lg:max-w-full">

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 reverse"  @if($langSeg == 'ar') dir="RTL" @endif>

                        <div class="col-span-2" @if($langSeg == 'ar') dir="RTL" @endif>
                            <div class="mx-auto">
                                <span class="text-3xl text-white text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-light-3.png') }}" alt="esnaad-logo" title="ESNAAD" loading="lazy" height="auto" width="auto" class="mb-5">
                                </span>

                                <p class="text-md text-justify mb-6 w-[80%]">
                                    {{ __('frontend.footerEsnaadP') }}
                                </p>
                                <div class="flex my-8 text-justify my-auto inline-block align-middle w-[50%]">

                                    <div class="flex-1">
                                        <div class="  rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
                                                <img src="{{ asset('sm/fb.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
                                                <img src="{{ asset('sm/ig.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x" rel="canonical">
                                                <img src="{{ asset('sm/x.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin" rel="canonical">
                                                <img src="{{ asset('sm/in.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_WA')}}" target="_blank" aria-label="esnaad-whatsapp" rel="canonical">
                                                <img src="{{ asset('sm/wa.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="https://youtube.com/@ESNAADdevelopments?si=hTB34_Ratgi4YOHJ" target="_blank" aria-label="esnaad-youtube" rel="canonical">
                                                <img src="{{ asset('sm/yt.png')}}" title="ESNAAD-youtube" alt="ESNAAD-youtube" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md  ">
                                {{ __('frontend.footerLinks') }}
                            </p>

                            <ul class="list-none footer-li" style="padding-left: 0px !important;">
                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/about-us') }}" aria-label="about-us" rel="canonical">{{ __('frontend.footerLinksAboutEsnaad') }}</a>
                                </li>
                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/invest-in-dubai') }}" aria-label="invest-in-dubai" rel="canonical">{{ __('frontend.footerLinksWhyInvest') }}</a>
                                </li>
                                <li class="text-md  my-3" aria-label="">
                                    <a href="{{ URL($langSeg.'/agency-registration') }}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksBrokerReg') }}</a>
                                </li>
                                <li class="text-md  my-3" aria-label="">
                                    <a href="{{ URL($langSeg.'/careers')}}" aria-label="career-registration" rel="canonical">{{ __('frontend.footerLinksCareers') }}</a>
                                </li>
                                {{-- <li class="text-md  my-2">
                                    <a href="{{ URL($langSeg.'/contact') }}" aria-label="contact-us" rel="canonical">{{ __('frontend.footerLinksContact') }}</a>
                                </li> --}}
                            </ul>
                        </div>

                        <div @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md  ">
                                {{ __('frontend.footerContacts') }}
                            </p>
                            <ul class="list-none footer-li leading-10" style="padding-left: 0px !important;">
                                <li class="text-md  my-2">
                                    <div  class="inline-flex items-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#fff" stroke="none">
                                            <path d="M2385 5109 c-559 -58 -1049 -402 -1308 -915 -43 -86 -111 -283 -131
                                            -384 -74 -364 -26 -736 135 -1064 24 -49 341 -553 704 -1120 490 -765 669
                                            -1037 694 -1053 46 -31 116 -31 162 0 24 16 206 291 691 1047 362 564 680
                                            1070 707 1125 188 383 221 827 90 1228 -84 257 -215 471 -405 661 -355 355
                                            -840 527 -1339 475z m360 -912 c269 -75 478 -288 546 -557 8 -31 14 -105 14
                                            -170 0 -123 -12 -188 -53 -285 -93 -219 -290 -387 -522 -446 -71 -18 -269 -18
                                            -340 0 -232 59 -429 227 -522 446 -41 97 -53 162 -53 285 0 123 12 188 53 285
                                            93 220 305 400 522 444 30 6 64 13 75 15 37 9 229 -3 280 -17z"/>
                                            <path d="M1244 1635 c-728 -203 -1062 -553 -886 -928 32 -70 124 -174 212
                                            -242 291 -223 840 -384 1525 -447 183 -17 747 -17 930 0 685 63 1234 224 1525
                                            447 88 68 180 172 212 242 177 378 -171 736 -906 933 -98 26 -121 29 -131 18
                                            -7 -7 -175 -269 -375 -583 -200 -314 -381 -592 -402 -620 -194 -251 -592 -250
                                            -779 2 -20 26 -204 310 -409 631 -204 320 -377 582 -384 581 -6 0 -66 -16
                                            -132 -34z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        {{ __('frontend.footerAddress') }}
                                    </div>
                                </li>
                                <li class="text-md  my-2">
                                    <div class="inline-flex items-center">
                                        <a href="tel:{{ env('COMPANY_PHONE') }}" class="inline-flex items-center"></a>
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                width="13.000000pt" height="13.000000pt" viewBox="0 0 512.000000 512.000000"
                                                preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="#fff" stroke="none">
                                                <path d="M894 5105 c-124 -27 -147 -45 -470 -369 -282 -281 -304 -306 -337
                                                -376 -55 -116 -68 -178 -74 -342 -6 -165 7 -274 57 -464 301 -1143 1647 -2647
                                                2935 -3279 382 -187 671 -269 955 -270 174 0 262 18 383 77 78 38 98 57 379
                                                337 314 314 332 337 372 470 21 70 21 202 0 272 -36 120 -51 138 -448 537
                                                -209 211 -408 403 -441 427 -198 141 -453 121 -619 -48 -50 -51 -70 -81 -104
                                                -162 -24 -54 -55 -115 -70 -135 -96 -130 -280 -212 -437 -196 -234 25 -583
                                                237 -879 533 -358 358 -569 770 -518 1010 24 112 103 229 196 291 22 16 70 41
                                                106 56 104 44 129 59 178 101 166 145 202 417 81 610 -35 57 -725 754 -809
                                                819 -67 51 -155 91 -234 105 -75 14 -125 13 -202 -4z"/>
                                                </g>
                                            </svg>
                                            &nbsp;
                                            <span style="direction: ltr !important;">
                                                {{ __('frontend.footerContact') }}                                            
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <?php //EMAIL IS BELOW ENCODED OR IN OBFUSCATION ?>
                                <li class="text-md  my-2">
                                    <div class="inline-flex items-center" >
                                        <a href="https://esnaad.com/en/contact-us" class="inline-flex items-center">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                                preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="#fff" stroke="none">
                                                <path d="M366 4464 c-255 -62 -415 -322 -351 -569 20 -75 57 -143 107 -195 45
                                                -46 2175 -1471 2253 -1506 119 -54 260 -52 382 5 95 45 2182 1442 2235 1496
                                                249 254 113 686 -243 770 -94 22 -4291 21 -4383 -1z"/>
                                                <path d="M0 2236 c0 -810 3 -1181 11 -1218 37 -176 179 -320 360 -363 94 -22
                                                4267 -22 4372 0 182 38 329 184 366 363 13 61 16 2386 3 2380 -4 -1 -487 -323
                                                -1074 -715 -587 -392 -1099 -729 -1139 -748 -110 -56 -204 -77 -339 -77 -135
                                                0 -229 21 -339 77 -40 19 -552 356 -1139 748 -587 392 -1070 714 -1074 715 -5
                                                2 -8 -521 -8 -1162z"/>
                                                </g>
                                            </svg>
                                            &nbsp;
                                            Email Us
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-span-2 mx-auto">

                    <div class="flex-grow border-t border-gray-400 mt-4"></div>

                    <div class="flex justify-left my-2">
                        <div>
                            <p class="text-base ">
                                ESNAAD © {{ now()->year }} All Rights Reserved | <a href="{{ URL($langSeg.'/terms-and-conditions') }}" aria-label="terms-and-conditions" > Terms & Conditions</a> | <a href="{{ URL($langSeg.'/privacy-and-policy') }}" aria-label="privacy-and-policy" > Privacy & Policy </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @enddesktop

    @mobile
        <div class="block py-8 " id="footer" style="visibility:hidden">
            <div class="container mx-auto px-4"  @if($langSeg == 'ar') dir="RTL" @endif>

                <!-- Footer Links -->
                <div class="mx-auto max-w-full lg:mt-24 lg:max-w-full">

                    <div class="row "  @if($langSeg == 'ar') dir="RTL" @endif>

                        <div class="py-4">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-light-3.png') }}" alt="esnaad-logo" title="ESNAAD" loading="lazy" height="auto" width="auto" class="mb-5">
                                </span>

                                <p class="text-md  text-justify mb-6 w-full leading-6" >
                                    {{ __('frontend.footerEsnaadP') }}
                                </p>
                                
                                <div @if($langSeg == 'ar') dir="RTL" @endif>

                                    <ul class="list-none footer-li leading-10" style="padding-left: 0px !important;">
                                        <li class="text-md  my-2">
                                            <div  class="inline-flex items-center">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                    width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                                    preserveAspectRatio="xMidYMid meet">
        
                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                    fill="#fff" stroke="none">
                                                    <path d="M2385 5109 c-559 -58 -1049 -402 -1308 -915 -43 -86 -111 -283 -131
                                                    -384 -74 -364 -26 -736 135 -1064 24 -49 341 -553 704 -1120 490 -765 669
                                                    -1037 694 -1053 46 -31 116 -31 162 0 24 16 206 291 691 1047 362 564 680
                                                    1070 707 1125 188 383 221 827 90 1228 -84 257 -215 471 -405 661 -355 355
                                                    -840 527 -1339 475z m360 -912 c269 -75 478 -288 546 -557 8 -31 14 -105 14
                                                    -170 0 -123 -12 -188 -53 -285 -93 -219 -290 -387 -522 -446 -71 -18 -269 -18
                                                    -340 0 -232 59 -429 227 -522 446 -41 97 -53 162 -53 285 0 123 12 188 53 285
                                                    93 220 305 400 522 444 30 6 64 13 75 15 37 9 229 -3 280 -17z"/>
                                                    <path d="M1244 1635 c-728 -203 -1062 -553 -886 -928 32 -70 124 -174 212
                                                    -242 291 -223 840 -384 1525 -447 183 -17 747 -17 930 0 685 63 1234 224 1525
                                                    447 88 68 180 172 212 242 177 378 -171 736 -906 933 -98 26 -121 29 -131 18
                                                    -7 -7 -175 -269 -375 -583 -200 -314 -381 -592 -402 -620 -194 -251 -592 -250
                                                    -779 2 -20 26 -204 310 -409 631 -204 320 -377 582 -384 581 -6 0 -66 -16
                                                    -132 -34z"/>
                                                    </g>
                                                </svg>
                                                &nbsp;
                                                {{ __('frontend.footerAddress') }}
                                            </div>
                                        </li>
                                        <li class="text-md  my-2">
                                            <div class="inline-flex items-center">
                                                <a href="tel:{{ env('COMPANY_PHONE') }}" class="inline-flex items-center"></a>
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                        width="13.000000pt" height="13.000000pt" viewBox="0 0 512.000000 512.000000"
                                                        preserveAspectRatio="xMidYMid meet">
        
                                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                        fill="#fff" stroke="none">
                                                        <path d="M894 5105 c-124 -27 -147 -45 -470 -369 -282 -281 -304 -306 -337
                                                        -376 -55 -116 -68 -178 -74 -342 -6 -165 7 -274 57 -464 301 -1143 1647 -2647
                                                        2935 -3279 382 -187 671 -269 955 -270 174 0 262 18 383 77 78 38 98 57 379
                                                        337 314 314 332 337 372 470 21 70 21 202 0 272 -36 120 -51 138 -448 537
                                                        -209 211 -408 403 -441 427 -198 141 -453 121 -619 -48 -50 -51 -70 -81 -104
                                                        -162 -24 -54 -55 -115 -70 -135 -96 -130 -280 -212 -437 -196 -234 25 -583
                                                        237 -879 533 -358 358 -569 770 -518 1010 24 112 103 229 196 291 22 16 70 41
                                                        106 56 104 44 129 59 178 101 166 145 202 417 81 610 -35 57 -725 754 -809
                                                        819 -67 51 -155 91 -234 105 -75 14 -125 13 -202 -4z"/>
                                                        </g>
                                                    </svg>
                                                    &nbsp;
                                                    <span style="direction: ltr !important;">
                                                        {{ __('frontend.footerContact') }}                                            
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                        <?php //EMAIL IS BELOW ENCODED OR IN OBFUSCATION ?>
                                        <li class="text-md  my-2">
                                            <div class="inline-flex items-center" >
                                                <a href="https://esnaad.com/en/contact-us" class="inline-flex items-center">
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                        width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                                        preserveAspectRatio="xMidYMid meet">
        
                                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                        fill="#fff" stroke="none">
                                                        <path d="M366 4464 c-255 -62 -415 -322 -351 -569 20 -75 57 -143 107 -195 45
                                                        -46 2175 -1471 2253 -1506 119 -54 260 -52 382 5 95 45 2182 1442 2235 1496
                                                        249 254 113 686 -243 770 -94 22 -4291 21 -4383 -1z"/>
                                                        <path d="M0 2236 c0 -810 3 -1181 11 -1218 37 -176 179 -320 360 -363 94 -22
                                                        4267 -22 4372 0 182 38 329 184 366 363 13 61 16 2386 3 2380 -4 -1 -487 -323
                                                        -1074 -715 -587 -392 -1099 -729 -1139 -748 -110 -56 -204 -77 -339 -77 -135
                                                        0 -229 21 -339 77 -40 19 -552 356 -1139 748 -587 392 -1070 714 -1074 715 -5
                                                        2 -8 -521 -8 -1162z"/>
                                                        </g>
                                                    </svg>
                                                    &nbsp;
                                                    Email Us
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="flex justify-between my-8 text-justify my-auto inline-block align-middle ">

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook" rel="canonical">
                                                <img src="{{ asset('sm/fb.png')}}" title="ESNAAD-facebook" alt="ESNAAD-facebook" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
                                                <img src="{{ asset('sm/ig.png')}}" title="ESNAAD-instagram" alt="ESNAAD-instagram" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x" rel="canonical">
                                                <img src="{{ asset('sm/x.png')}}" title="ESNAAD-X" alt="ESNAAD-X" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin" rel="canonical">
                                                <img src="{{ asset('sm/in.png')}}" title="ESNAAD-linkedin" alt="ESNAAD-linkedin" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_WA')}}" target="_blank" aria-label="esnaad-whatsapp" rel="canonical">
                                                <img src="{{ asset('sm/wa.png')}}" title="ESNAAD-whatsapp" alt="ESNAAD-whatsapp" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class=" rounded-3xl p-1">
                                            <a href="https://youtube.com/@ESNAADdevelopments?si=hTB34_Ratgi4YOHJ" target="_blank" aria-label="esnaad-youtube" rel="canonical">
                                                <img src="{{ asset('sm/yt.png')}}" title="ESNAAD-youtube" alt="ESNAAD-youtube" height="auto" width="auto" loading="lazy" style="height: 32px;">
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg  " tabindex="1">
                        <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                            <span> {{ __('frontend.footerLinks') }} </span>
                            <img
                                src="https://demo.esnaad.com/public/home/down-arrow.png"
                                class="h-full w-8 transition-all duration-500 group-focus:-rotate-180"
                            />
                        </div>
                        <div class="hidden h-auto max-h-0 items-center opacity-0 transition-all group-focus:block group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                            <ul class="list-none footer-li capitalize leading-8" style="padding-left: 0px !important;">
                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/about-us') }}" aria-label="about-us" rel="canonical">{{ __('frontend.footerLinksAboutEsnaad') }}</a>
                                </li>
                                
                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/ceo-message')}}" aria-label="broker-registration" rel="canonical">{{ __('frontend.mobile_ceoMessageNav') }}</a>
                                </li>
                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/invest-in-dubai') }}" aria-label="invest-in-dubai" rel="canonical">{{ __('frontend.footerLinksWhyInvest') }}</a>
                                </li>

                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/careers')}}" aria-label="careers" rel="canonical">{{ __('frontend.footerLinksCareers') }}</a>
                                </li>

                                <li class="text-md  my-3">
                                    <a href="{{ URL($langSeg.'/agency-registration') }}" aria-label="agency-registration" rel="canonical">{{ __('frontend.footerLinksBrokerReg') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 mx-auto my-2">
                    <div class="flex justify-center mt  mt-6">
                        <div>
                            <p class="text-base font-thin  leading-8">
                                ESNAAD © {{ now()->year }} All Rights Reserved <br>
                                <a href="{{ URL($langSeg.'/terms-and-conditions') }}" aria-label="terms-and-conditions" rel="canonical">Terms & Conditions</a>
                                <a href="{{ URL($langSeg.'/privacy-and-policy') }}" aria-label="privacy-and-policy" rel="canonical">| Privacy & Policy</a>
                            </p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endmobile
 
    <script>
        setTimeout(function(){
            if(document.getElementById('footer')) {
                document.getElementById('footer').style.visibility = "visible";
            }
            if(document.getElementById('footer_form')) {
                document.getElementById('footer_form').style.visibility = "visible";
            }
        },1000);
    </script>
    

    @yield('luxe_asset_js')

    @yield('footer_js')

</body>
