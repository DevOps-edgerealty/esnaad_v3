<div class="fixed top-0 z-50 w-full z-50">
  <nav class=" bg-white p-4 lg:p-0 lg:h-screen shadow-md" >
    <div class="flex justify-between">
      <div>
          <a href="{{ route('esnaad.home') }}">
              <img style="height: 30px !important;" class="px-2" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-navbar">
          </a>
      </div>

      <?php //LOCATION ?>
      <div class="my-auto">
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
      </div>

      <?php //EMAIL ?>
      <div class="my-auto">
        <a href="mailto:{{ env("COMPANY_EMAIL") }}">
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
        </a>
      </div>

      <?php //PHONE ?>
      <div class="my-auto">
        <a href="tel:{{ env('COMPANY_PHONE') }}">
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
        </a>
      </div>

      
      
    </div>
{{--     
    <ul class="hidden bg-white lg:block space-y-6 pt-8 pb-4 pl-[10vw]  ">
        <li ><a href="{{ URL($langSeg.'/about-esnaad') }}" class="text-dark">About</a></li>
        <li ><a href="{{ URL($langSeg.'/projects') }}" class="text-dark">Projects</a></li>
        <li ><a href="{{ URL($langSeg.'/communities') }}" class="text-dark">Communities</a></li>
        <li ><a href="{{ URL($langSeg.'/invest-in-dubai') }}" class="text-dark">Invest in Dubai</a></li>
        <li ><a href="{{ URL($langSeg.'/constructions') }}" class="text-dark">Construction</a></li>
        <li ><a href="{{ URL($langSeg.'/news') }}" class="text-dark">NEWS</a></li>
        <li ><a href="{{ URL($langSeg.'/contact') }}" class="text-dark">Contact</a></li>
      </ul> --}}
    
  </nav>
  
  
</div>
<div class="lg:flex-grow">
  <!-- Content Goes Here -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#mobile-menu-button').click(function() {
      $('ul').toggleClass('hidden');
    });
  });
</script>