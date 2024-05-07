<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
    }
</style>


            <button onclick="openModal('mymodalcentered-community-share')"  class="text-center align-middle rounded-0 cursor-pointer">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
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
                            <p class="text-lg text-left">{{$title}}</p>
                        </div>

                        <div class="mb-6">
                            <div class="flex my-8 w-full text-center mx-auto">

                                <div class="flex-1 mx-auto my-auto">
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl p-1 mx-auto my-auto">
                                        <a href="whatsapp://send?text={{$actual_link}}" data-action="share/whatsapp/share" aria-label="whatsapp-share-community">
                                            <img
                                                src="{{ asset('front/icons/wa2.svg')}}"
                                                class="w-fit rounded h-full"
                                                alt="social-media-ig"
                                                height="auto"
                                                width="auto"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
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
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
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
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
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

                    <div class="p-7 pt-0 flex justify-end items-center w-full">
                        <style>

                            .linksys{
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }

                        </style>
                        <div class="w-full font-base text-base border border-gray-500 text-left rounded-0 py-2 px-4 mr-2 linksys" id="linksys">
                            {{{$actual_link}}}
                        </div>
                        <button id="linksysbutton" onclick="copyText()" class="bg-black  text-white  font-semibold py-2 px-4 border  rounded-0"   >
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</dialog>

