<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
    }
</style>


<div class="sm:container sm:mx-auto mx-0 px-0 my-20 sm:my-4 mx-auto">
    <div class="flex justify-left ...">
        <div class="mr-4">
            <button onclick="openModal('mymodalcentered-community-register')"  class="lg:w-75 text-xl text-black bg-white font-bold hover:text-white px-2 lg:py-4 bg-black hover:bg-transparent rounded-0" type="button">
                Register Your Interest
            </button>
        </div>
        <div class="mr-4">
            {{-- <a href="/home/The_Spark_by_ESNAAD_Brochure.pdf" target="_blank">
                <button  class="lg:w-75 text-xl text-black bg-white font-bold hover:text-white px-2 lg:py-4 bg-black hover:bg-transparent rounded-0" type="button">
                    Download Brochure
                </button>
            </a> --}}
            <button onclick="openModal('mymodalcentered-brochure-register')"  class="lg:w-75 text-xl text-black bg-white font-bold hover:text-white px-2 lg:py-4 bg-black hover:bg-transparent rounded-0" type="button">
                Download Brochure
            </button>
        </div>
        <div class="mx-4">
            <button onclick="openModal('mymodalcentered-community-share')"  class="text-center align-middle rounded-0 cursor-pointer">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="30.000000pt" height="30.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#fff" stroke="none">
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
        </div>
    </div>
</div>




<dialog id="mymodalcentered-community-share" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full sm:w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-semibold text-xl text-black">Share</div>
                    <svg onclick="modalClose('mymodalcentered-community-share')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full"  >
                    <div class="px-7  w-full" style="max-height: 40vh;">
                        <div class="mb-6">
                            @if($langSeg == 'ar')
                                {{$namear}}
                            @else
                                {{$name}}
                            @endif
                        </div>

                        <div class="mb-6">
                            <div class="flex my-8 w-full text-center mx-auto">

                                <div class="flex-1 mx-auto my-auto">
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl p-1 mx-auto my-auto">
                                        <a href="whatsapp://send?text={{$actual_link}}" data-action="share/whatsapp/share" aria-label="whatsapp-share-community">
                                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
                                                <defs>
                                                    <image  width="48" height="48" id="img1" href="data:image/png;base64,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"/>
                                                    <image  width="48" height="48" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAAXNSR0IB2cksfwAAAnZQTFRFAAAAEREUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUAAAkEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUGBgaRERGdnZ4lZWWmpqbm5ublpaXIyMlEhIUEhIUEhIULCwukZGS9PT0////R0dIEhIUEhIUEhIULy8wuLi5R0dJEhIUEhIUEhIUqqqrEhIUEhIUMzM1+vr6EhIUEhIUEhIUEhIUj4+PyMjJra2urKytqKipJycpEhIUEhIUExMUEhIUtLS1eXl6JycoGRkbFhYYEhIUEhIUEhIUurq709PTHR0fEhIUEhIUEhIUu7u7rq6vEhIUEhIUEhIVEhIUEhIUEhIUEhIUMDAxw8PEJSUnTk5P0dHR3Nzc9fX18/PzxsbGEhIUEhIUa2ts/Pz8Pj5AEhIUEhIU+Pj4FBQWZmZowcHBEhIUJiYoY2Nk1NTVzc3NNTU2EhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIVEhIUEhIUEhIUEhIUEhIUEhIVEhIUEhIUEhIUEhIUEhIUEhIUZmZno6Okt7e3goKDEhIUFBQUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEBAWEhIUEhIUEhIUEhIUEhIUEhIUEhISEhIUEhIUEhIUEhIUEREVEhIUEhIUEhIUiNhRxQAAANJ0Uk5TAAU3ZYymuMLEvK2VcUgPBIbD6P3/8NKcTw4DTKzn8m0MACue7vi/UAdm9/6bFhWj0zUT1UvY9hTU///////////0PKH//////9wgZP///7EIKP8Cmv//0RpG7P////////yJAqX//////yIw4/////tygP//wQUDL1v5gv///////////8yu////ubr/////oP//////iMc5fMjtQ43LCj7qgQa14gGw3y4/fwABhBDAMyb/////XQAxdzR1KslYmTIAU/p0yt2UAFyv6XYBY5FzDzOsdgAAAlVJREFUeJxjYEAHjEzMLKxs7BycXNw8vHwY0miAn0lAUEhYBAZExcQlJPEol5KWkRVBA3KC8go4lCsqKaugKwcBVTV1fmzqNTS1sCkHAW0dXUz1evq4lIOAgSG6eiNjfOqBXjFBU2+KX72IiBmKDnMLNGlLK2sbWzs7O3sHuJCjE5J/ndHUu7i6uUOAB0LQ0wuuwRtNvY+vOwz4IQn7B0DVB5qhaQhyx6pBRBOiPjgETX1oGA4N4RFgDZFRaBqiwUrDYmLj4uITkCUSk0Dqk1PQ1IukgtWnpWdYWmaiyphmATVk56BryAVpyMtHFwaCgkKghiIM4WKQhhIs6kVESssYytVI0SDExFCB4SJ8GrQLGSqrSNEgosxQjcLPdKmpqakFafCtAYE6dA3sDOIo/PqGxsbGJpCG5kYQaEHX0crQhsJv73BHBZ0YGrrwa0jH0NCNV0NPL4YGfxR+Xxiqhn50T7cyTEDhT5zU3t4+GaR0SjsITMXUMA1dCH88TGfwTiRJAyvDDCGSNMxk0JhFiobZcxgY5pKiYd58BoYFC4nXILwImIEWLyFew9JsUKaudCRWg7byMpCGxcuJ1bBiJaRgWpVIpIbVayAa1q4jTsO89bCyVXIDMRpENyKK700o0b15y9b+2m3o6hO370CqIHZirQ6RgfYu1CpoN0b0oZm/B72S27sPn3qV/ejqgdXWAW2c6vcdPISpgYH/MMcRrK73nImr+bD+6DH0ykgk8fiJwJM41IPcder0igIkw88InsWnHATObTp/gW1eKwhsUL44YzG6PADI9SrSzZufIgAAAABJRU5ErkJggg=="/>
                                                    <image  width="48" height="48" id="img3" href="data:image/png;base64,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"/>
                                                    <image  width="48" height="48" id="img4" href="data:image/png;base64,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"/>
                                                    <image  width="48" height="48" id="img5" href="data:image/png;base64,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"/>
                                                </defs>
                                                <style>
                                                </style>
                                                <use id="Layer 1" style="display: none" href="#img1" x="0" y="0"/>
                                                <use id="Layer 2" style="display: none" href="#img2" x="0" y="0"/>
                                                <use id="Layer 3" style="display: none" href="#img3" x="0" y="0"/>
                                                <use id="Layer 4" style="display: none" href="#img4" x="0" y="0"/>
                                                <use id="Layer 5" href="#img5" x="0" y="0"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.facebook.com/sharer/sharer.php?{{$actual_link}}" target="_blank" ria-label="facebook-share-community">
                                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
                                                <title>New Project</title>
                                                <defs>
                                                    <image  width="48" height="48" id="img1" href="data:image/png;base64,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"/>
                                                    <image  width="48" height="48" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAAXNSR0IB2cksfwAAAnZQTFRFAAAAEREUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUAAAkEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUGBgaRERGdnZ4lZWWmpqbm5ublpaXIyMlEhIUEhIUEhIULCwukZGS9PT0////R0dIEhIUEhIUEhIULy8wuLi5R0dJEhIUEhIUEhIUqqqrEhIUEhIUMzM1+vr6EhIUEhIUEhIUEhIUj4+PyMjJra2urKytqKipJycpEhIUEhIUExMUEhIUtLS1eXl6JycoGRkbFhYYEhIUEhIUEhIUurq709PTHR0fEhIUEhIUEhIUu7u7rq6vEhIUEhIUEhIVEhIUEhIUEhIUEhIUMDAxw8PEJSUnTk5P0dHR3Nzc9fX18/PzxsbGEhIUEhIUa2ts/Pz8Pj5AEhIUEhIU+Pj4FBQWZmZowcHBEhIUJiYoY2Nk1NTVzc3NNTU2EhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIVEhIUEhIUEhIUEhIUEhIUEhIVEhIUEhIUEhIUEhIUEhIUEhIUZmZno6Okt7e3goKDEhIUFBQUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEBAWEhIUEhIUEhIUEhIUEhIUEhIUEhISEhIUEhIUEhIUEhIUEREVEhIUEhIUEhIUiNhRxQAAANJ0Uk5TAAU3ZYymuMLEvK2VcUgPBIbD6P3/8NKcTw4DTKzn8m0MACue7vi/UAdm9/6bFhWj0zUT1UvY9hTU///////////0PKH//////9wgZP///7EIKP8Cmv//0RpG7P////////yJAqX//////yIw4/////tygP//wQUDL1v5gv///////////8yu////ubr/////oP//////iMc5fMjtQ43LCj7qgQa14gGw3y4/fwABhBDAMyb/////XQAxdzR1KslYmTIAU/p0yt2UAFyv6XYBY5FzDzOsdgAAAlVJREFUeJxjYEAHjEzMLKxs7BycXNw8vHwY0miAn0lAUEhYBAZExcQlJPEol5KWkRVBA3KC8go4lCsqKaugKwcBVTV1fmzqNTS1sCkHAW0dXUz1evq4lIOAgSG6eiNjfOqBXjFBU2+KX72IiBmKDnMLNGlLK2sbWzs7O3sHuJCjE5J/ndHUu7i6uUOAB0LQ0wuuwRtNvY+vOwz4IQn7B0DVB5qhaQhyx6pBRBOiPjgETX1oGA4N4RFgDZFRaBqiwUrDYmLj4uITkCUSk0Dqk1PQ1IukgtWnpWdYWmaiyphmATVk56BryAVpyMtHFwaCgkKghiIM4WKQhhIs6kVESssYytVI0SDExFCB4SJ8GrQLGSqrSNEgosxQjcLPdKmpqakFafCtAYE6dA3sDOIo/PqGxsbGJpCG5kYQaEHX0crQhsJv73BHBZ0YGrrwa0jH0NCNV0NPL4YGfxR+Xxiqhn50T7cyTEDhT5zU3t4+GaR0SjsITMXUMA1dCH88TGfwTiRJAyvDDCGSNMxk0JhFiobZcxgY5pKiYd58BoYFC4nXILwImIEWLyFew9JsUKaudCRWg7byMpCGxcuJ1bBiJaRgWpVIpIbVayAa1q4jTsO89bCyVXIDMRpENyKK700o0b15y9b+2m3o6hO370CqIHZirQ6RgfYu1CpoN0b0oZm/B72S27sPn3qV/ejqgdXWAW2c6vcdPISpgYH/MMcRrK73nImr+bD+6DH0ykgk8fiJwJM41IPcder0igIkw88InsWnHATObTp/gW1eKwhsUL44YzG6PADI9SrSzZufIgAAAABJRU5ErkJggg=="/>
                                                </defs>
                                                <style>
                                                </style>
                                                <use id="Layer 1" style="display: none" href="#img1" x="0" y="0"/>
                                                <use id="Layer 2" href="#img2" x="0" y="0"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{$actual_link}}" aria-label="community-linkedin-share">
                                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
                                                <defs>
                                                    <image  width="48" height="48" id="img1" href="data:image/png;base64,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"/>
                                                </defs>
                                                <style>
                                                </style>
                                                <use id="Layer 1" href="#img1" x="0" y="0"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://twitter.com/intent/tweet?url={{$actual_link}}" aria-label="twitter-X-share-community">
                                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
                                                <defs>
                                                    <image  width="48" height="48" id="img1" href="data:image/png;base64,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"/>
                                                    <image  width="48" height="48" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAAXNSR0IB2cksfwAAAnZQTFRFAAAAEREUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUAAAkEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUGBgaRERGdnZ4lZWWmpqbm5ublpaXIyMlEhIUEhIUEhIULCwukZGS9PT0////R0dIEhIUEhIUEhIULy8wuLi5R0dJEhIUEhIUEhIUqqqrEhIUEhIUMzM1+vr6EhIUEhIUEhIUEhIUj4+PyMjJra2urKytqKipJycpEhIUEhIUExMUEhIUtLS1eXl6JycoGRkbFhYYEhIUEhIUEhIUurq709PTHR0fEhIUEhIUEhIUu7u7rq6vEhIUEhIUEhIVEhIUEhIUEhIUEhIUMDAxw8PEJSUnTk5P0dHR3Nzc9fX18/PzxsbGEhIUEhIUa2ts/Pz8Pj5AEhIUEhIU+Pj4FBQWZmZowcHBEhIUJiYoY2Nk1NTVzc3NNTU2EhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIVEhIUEhIUEhIUEhIUEhIUEhIVEhIUEhIUEhIUEhIUEhIUEhIUZmZno6Okt7e3goKDEhIUFBQUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEhIUEBAWEhIUEhIUEhIUEhIUEhIUEhIUEhISEhIUEhIUEhIUEhIUEREVEhIUEhIUEhIUiNhRxQAAANJ0Uk5TAAU3ZYymuMLEvK2VcUgPBIbD6P3/8NKcTw4DTKzn8m0MACue7vi/UAdm9/6bFhWj0zUT1UvY9hTU///////////0PKH//////9wgZP///7EIKP8Cmv//0RpG7P////////yJAqX//////yIw4/////tygP//wQUDL1v5gv///////////8yu////ubr/////oP//////iMc5fMjtQ43LCj7qgQa14gGw3y4/fwABhBDAMyb/////XQAxdzR1KslYmTIAU/p0yt2UAFyv6XYBY5FzDzOsdgAAAlVJREFUeJxjYEAHjEzMLKxs7BycXNw8vHwY0miAn0lAUEhYBAZExcQlJPEol5KWkRVBA3KC8go4lCsqKaugKwcBVTV1fmzqNTS1sCkHAW0dXUz1evq4lIOAgSG6eiNjfOqBXjFBU2+KX72IiBmKDnMLNGlLK2sbWzs7O3sHuJCjE5J/ndHUu7i6uUOAB0LQ0wuuwRtNvY+vOwz4IQn7B0DVB5qhaQhyx6pBRBOiPjgETX1oGA4N4RFgDZFRaBqiwUrDYmLj4uITkCUSk0Dqk1PQ1IukgtWnpWdYWmaiyphmATVk56BryAVpyMtHFwaCgkKghiIM4WKQhhIs6kVESssYytVI0SDExFCB4SJ8GrQLGSqrSNEgosxQjcLPdKmpqakFafCtAYE6dA3sDOIo/PqGxsbGJpCG5kYQaEHX0crQhsJv73BHBZ0YGrrwa0jH0NCNV0NPL4YGfxR+Xxiqhn50T7cyTEDhT5zU3t4+GaR0SjsITMXUMA1dCH88TGfwTiRJAyvDDCGSNMxk0JhFiobZcxgY5pKiYd58BoYFC4nXILwImIEWLyFew9JsUKaudCRWg7byMpCGxcuJ1bBiJaRgWpVIpIbVayAa1q4jTsO89bCyVXIDMRpENyKK700o0b15y9b+2m3o6hO370CqIHZirQ6RgfYu1CpoN0b0oZm/B72S27sPn3qV/ejqgdXWAW2c6vcdPISpgYH/MMcRrK73nImr+bD+6DH0ykgk8fiJwJM41IPcder0igIkw88InsWnHATObTp/gW1eKwhsUL44YzG6PADI9SrSzZufIgAAAABJRU5ErkJggg=="/>
                                                    <image  width="48" height="48" id="img3" href="data:image/png;base64,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"/>
                                                </defs>
                                                <style>
                                                </style>
                                                <use id="Layer 1" style="display: none" href="#img1" x="0" y="0"/>
                                                <use id="Layer 2" style="display: none" href="#img2" x="0" y="0"/>
                                                <use id="Layer 3" href="#img3" x="0" y="0"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
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




<dialog id="mymodalcentered-community-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-1/4 relative">

            <div class="flex flex-col items-start w-full hidden" id="form_submitted">
                <div class="p-7 flex items-stretch w-full">
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full">
                    <div class="rounded-lg  px-16 py-14">
                        <div class="flex justify-center">
                        <div class="rounded-full bg-green-200 p-6">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                            </div>
                        </div>
                        </div>
                        <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Successful!</h3>
                        <p class="w-[100%] text-center font-normal text-gray-600">
                            Thank you for submitting your information. One of our representatives will contact you soon on your enquiry.
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="flex flex-col items-start w-full" id="form_ready">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">Register Your Interest</div>
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form class="flex flex-col items-start w-full" id="new-project-details-desktop-form" method="post" action="en/project-detail-inquiry">
                    @csrf
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="project" name="project" value="{{$name}}">
                        <input type="hidden" id="url" name="url" value="{{$actual_link}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="{{__('frontend.formFullName')}}"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="{{__('frontend.formEmail')}}" required>
                        </div>

                        <div class="mb-6">

                            <table class="w-full">
                                <tr>
                                    <td>
                                        <select name="country_code"  class="w-full" >
                                            <option data-countryCode="AE" value="971" Selected>United Arab Emirates (+971)</option>
                                            <optgroup label="Other countries">
                                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option data-countryCode="CN" value="86">China (+86)</option>
                                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option data-countryCode="FR" value="33">France (+33)</option>
                                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option data-countryCode="IN" value="91">India (+91)</option>
                                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <option data-countryCode="GB" value="44">UK (+44)</option>
                                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <option data-countryCode="US" value="1">USA (+1)</option>
                                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </optgroup>
                                        </select>
                                    </td>
                                <td><input type="text" name="phone" id="phone" placeholder="ex: 501234567" class="border w-full" required></td>
                                    
                                </tr>
                            </table>
                        </div>

                        <div>
                            <button type="submit" class="bg-black w-[100%] hover:bg-white border border-black text-white hover:text-black font-bold py-2 rounded-0">
                                {{ __('frontend.projectRegisterInterest') }}
                            </button>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">                        
                        
                    </div>
                </form>
            </div>

        </div>
    </div>
</dialog>



<dialog id="mymodalcentered-brochure-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-1/4 relative">

            <div class="flex flex-col items-start w-full hidden" id="form_submitted">
                <div class="p-7 flex items-stretch w-full">
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full">
                    <div class="rounded-lg  px-16 py-14">
                        <div class="flex justify-center">
                        <div class="rounded-full bg-green-200 p-6">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                            </div>
                        </div>
                        </div>
                        <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Successful!</h3>
                        <p class="w-[100%] text-center font-normal text-gray-600">
                            Thank you for submitting your information. One of our representatives will contact you soon on your enquiry.
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="flex flex-col items-start w-full" id="form_ready_brochure">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-bold text-xl text-black " >{{ __('frontend.projectDownloadBrochure') }}</div>
                    <svg onclick="modalClose('mymodalcentered-brochure-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form id="new-project-details-desktop-brochure-form" action="/something" method="post" class="flex flex-col items-start w-full">
                    @csrf
                    <div class="px-4 w-full" style="max-height: 40vh;">
                        <input type="hidden" id="project_brochure" name="project_brochure" value="{{$name}}">
                        <!-- <input type="hidden" id="country_code_brochure" name="country_code_brochure"> -->
                        <input type="hidden" id="url_brochure" name="url_brochure" value="{{$actual_link}}">
                        <input type="hidden" id="MAVmKG09eI4aX8uv" name="MAVmKG09eI4aX8uv">

                        <div class="mb-6">
                            <input type="text" id="name2" name="name_brochure" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="{{__('frontend.formFullName')}}"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email2" name="email_brochure" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="{{__('frontend.formEmail')}}" required>
                        </div>

                        <div class="mb-6">
                            <select name="country_code_brochure"  class="w-full" required >
                                <option value="" Selected>Country Code</option>
                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                <optgroup label="Other countries">
                                    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                    <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                    <option data-countryCode="AO" value="244">Angola (+244)</option>
                                    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                    <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                    <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                    <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                    <option data-countryCode="AU" value="61">Australia (+61)</option>
                                    <option data-countryCode="AT" value="43">Austria (+43)</option>
                                    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                    <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                    <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                    <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                    <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                    <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                    <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                    <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                    <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                                    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                    <option data-countryCode="CL" value="56">Chile (+56)</option>
                                    <option data-countryCode="CN" value="86">China (+86)</option>
                                    <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                    <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                    <option data-countryCode="CG" value="242">Congo (+242)</option>
                                    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                    <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                    <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                    <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                    <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                    <option data-countryCode="FI" value="358">Finland (+358)</option>
                                    <option data-countryCode="FR" value="33">France (+33)</option>
                                    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                    <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                    <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                    <option data-countryCode="DE" value="49">Germany (+49)</option>
                                    <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                    <option data-countryCode="GR" value="30">Greece (+30)</option>
                                    <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                    <option data-countryCode="GU" value="671">Guam (+671)</option>
                                    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                    <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                    <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                    <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                    <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                    <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                    <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                    <option data-countryCode="IN" value="91">India (+91)</option>
                                    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                                    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                    <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                    <option data-countryCode="IL" value="972">Israel (+972)</option>
                                    <option data-countryCode="IT" value="39">Italy (+39)</option>
                                    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                    <option data-countryCode="JP" value="81">Japan (+81)</option>
                                    <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                    <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                    <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                    <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                    <option data-countryCode="LA" value="856">Laos (+856)</option>
                                    <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                    <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                    <option data-countryCode="LY" value="218">Libya (+218)</option>
                                    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                    <option data-countryCode="MO" value="853">Macao (+853)</option>
                                    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                    <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                    <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                    <option data-countryCode="ML" value="223">Mali (+223)</option>
                                    <option data-countryCode="MT" value="356">Malta (+356)</option>
                                    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                    <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                    <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                    <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                    <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                    <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                    <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                    <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                    <option data-countryCode="NE" value="227">Niger (+227)</option>
                                    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                    <option data-countryCode="NU" value="683">Niue (+683)</option>
                                    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                    <option data-countryCode="NO" value="47">Norway (+47)</option>
                                    <option data-countryCode="OM" value="968">Oman (+968)</option>
                                    <option data-countryCode="PW" value="680">Palau (+680)</option>
                                    <option data-countryCode="PA" value="507">Panama (+507)</option>
                                    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                                    <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                    <option data-countryCode="PL" value="48">Poland (+48)</option>
                                    <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                    <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                    <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                    <option data-countryCode="RO" value="40">Romania (+40)</option>
                                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                                    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                    <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                    <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                    <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                    <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                    <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                    <option data-countryCode="ES" value="34">Spain (+34)</option>
                                    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                    <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                    <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                    <option data-countryCode="SI" value="963">Syria (+963)</option>
                                    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                    <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                    <option data-countryCode="TG" value="228">Togo (+228)</option>
                                    <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                    <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                    <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                    <option data-countryCode="GB" value="44">UK (+44)</option>
                                    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                    <option data-countryCode="US" value="1">USA (+1)</option>
                                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="mb-6">
                            <input type="number" id="phone2" name="phone_brochure" class="w-max px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Ex: 050 123 4567" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-4 flex justify-end items-center w-full">
                        <button type="button" onclick="modalClose('mymodalcentered-brochure-register')" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-0"   >
                            {{ __('frontend.buttonClose') }}
                        </button>
                        <button type="submit" id="submitFormBrochure" class="bg-black hover:bg-white border border-black text-white hover:text-black font-bold py-2 px-4 rounded-0 ml-3">
                            {{ __('frontend.projectDownloadBrochure') }}
                        </button>      
                        <button type="button" id="submitVerifyingBrochure" hidden disabled class="bg-transparent border border-black text-black font-bold py-2 px-4 rounded-0 ml-3"><div id="loading"></div> Verifying</button>                  
                    </div>
                </form>
            </div>

        </div>
    </div>
</dialog>


<dialog id="mymodalcentered-brochure-verify" class="bg-transparent relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-1/4 relative"> 
            <div class="flex flex-col items-start w-full hidden" id="form_submitted">
                <div class="p-7 flex items-stretch w-full">
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full">
                    <div class="rounded-lg  px-16 py-14">
                        <div class="flex justify-center">
                        <div class="rounded-full bg-green-200 p-6">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                            </div>
                        </div>
                        </div>
                        <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Successful!</h3>
                        <p class="w-[100%] text-center font-normal text-gray-600">
                            Thank you for submitting your information. One of our representatives will contact you soon on your enquiry.
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="flex flex-col items-start w-full" id="form_ready_brochure">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-bold text-xl text-black" >{{ __('frontend.projectDownloadBrochure') }}</div>
                    <svg onclick="modalClose('mymodalcentered-brochure-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form id="verificationForm" class="flex flex-col items-start w-full p-6" action="en/project-detail-inquiry" method="post" >
                        <h3 class="text-2xl text-gray-900 font-semibold text-center mx-auto">{{__('frontend.careersEnterVerification')}}</h3>
                        <table class="w-full">
                            <tbody>
                                <caption class="my-4">
                                    {{__('frontend.careersSentToEmail')}} <span id="email_placeholder"></span>
                                </caption>
                                <tr class="mx-auto text-center">
                                    <td class="mx-auto text-center"><input type="text" class="text-center mx-auto" name="applicant_code" id="applicant_code" placeholder="xxxx - xxxx - xxxx - xxxx" class=" w-full" ></td>
                                </tr>
                                <tr class="mx-auto text-center hidden">
                                    <td class="mx-auto text-center text-red-900"><small>{{__('frontend.careersVerificationFailed')}}</small></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button"  id="verificationFormSubmit" class="w-full mt-8 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Verify</button>
                        {{-- <button type="button" id="ResendVerificationCode" class="w-full mt-4 text-black font-thin">Didn't get a code? <span class="font-bold">Click to resend</button> --}}
                    </form>
            </div>

        </div>
    </div>
</dialog>

