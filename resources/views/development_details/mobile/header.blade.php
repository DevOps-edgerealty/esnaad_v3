@section('luxe_asset_css')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection

<header>
    <div class="w-full bg-cover bg-center" style="margin-top: 60px; height: 50vh; background-image: url('https://mis.esnaad.com/uploads/projects/{{$id}}/{{$header}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-60">

            <div class="container mx-0 px-0 mx-auto text-white">
                <h1 class="text-2xl font-semibold px-2">
                    @if($langSeg == 'ar')
                        {{$namear}}
                    @else
                        {{$name}}
                    @endif
                </h1>
                <h2 class="text-base font-light px-2 leading-6">
                    @if($langSeg == 'ar')
                        {{$descriptionar}}
                    @else
                        {{$description}}
                    @endif
                </h2>
                <div class="absolute mt-[8vh] w-[90vw] mx-auto text-right">
                    <button onclick="openModal('mymodalcentered-community-share')" class="text-center align-middle rounded-0 cursor-pointer">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20.000000pt" height="20.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
                            <path d="M2495 4725 c-17 -9 -200 -185 -407 -393 -404 -405 -410 -412 -394
                            -496 8 -41 46 -90 87 -111 36 -19 102 -19 137 -1 15 8 128 116 252 240 124
                            124 228 226 232 226 5 0 8 -485 8 -1077 0 -1050 1 -1079 20 -1107 27 -41 87
                            -76 133 -76 52 0 111 32 138 77 l24 38 5 1073 5 1072 225 -226 c124 -124 237
                            -232 252 -240 15 -8 45 -14 68 -14 103 0 175 92 155 198 -6 32 -56 86 -388
                            419 -210 211 -395 389 -413 398 -41 19 -100 19 -139 0z"></path>
                            <path d="M1243 3416 c-170 -42 -318 -192 -353 -359 -7 -36 -10 -398 -8 -1182
                            l3 -1130 23 -57 c50 -124 156 -230 281 -280 l56 -23 1315 0 1315 0 57 23 c124
                            50 230 156 280 281 l23 56 3 1134 c3 1250 5 1196 -60 1309 -64 113 -190 205
                            -316 231 -31 6 -163 11 -314 11 -260 0 -262 0 -303 -25 -56 -32 -79 -80 -73
                            -152 5 -55 32 -97 83 -126 13 -8 112 -14 292 -17 302 -6 300 -5 351 -80 l22
                            -33 0 -1090 0 -1089 -21 -38 c-12 -21 -38 -47 -59 -59 l-38 -21 -1244 0 -1245
                            0 -34 23 c-18 12 -44 38 -56 56 l-23 34 0 1092 0 1092 23 33 c50 75 48 74 350
                            80 180 3 279 9 292 17 11 6 34 25 50 43 27 28 30 38 30 98 0 77 -17 107 -76
                            141 -35 20 -51 21 -305 20 -179 0 -286 -5 -321 -13z"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</header>



<dialog id="mymodalcentered-community-share" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-2 flex items-stretch w-full">
                    <div class="font-semibold text-xl text-black">Share</div>
                    <svg onclick="modalClose('mymodalcentered-community-share')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill="#000" d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full"  >
                    <div class="px-2 w-full" style="max-height: 40vh;">

                        <div class="mb-6">
                        @if($langSeg == 'ar')
                            {{$namear}}
                        @else
                            {{$name}}
                        @endif
                        </div>

                        <div class="mb-6">
                            <div class="flex my-8 w-full text-center mx-auto">

                                <div class="flex-1 mx-auto">
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fedgerealty.ae%2F" target="_blank" ria-label="facebook-share-community">
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

                                <div class="flex-1 mx-auto my-auto">
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl  mx-auto my-auto">
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
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
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
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
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

                    <div class=" flex justify-end items-center w-full p-2">
                        <div class="w-full font-base text-base border border-gray-500 rounded-0 py-2 px-0 mr-2 ">
                            <input type="text" value="{{$actual_link}}" id="myInput" class="border-0 focus:ring-0 truncate py-0" >
                        </div>
                        <div class="px-4">
                            <button onclick="myFunction()">Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</dialog>