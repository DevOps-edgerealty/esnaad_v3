<style >
    dialog {
        padding: 1rem 3rem;
        background: white;
        /* max-width: auto; */
        padding-top: 2rem;
        border-radius: 20px;
        border: 0;
        box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
        animation: fadeIn 1s ease both;
        &::backdrop {
            animation: fadeIn 1s ease both;
            background: rgb(255 255 255 / 40%);
            z-index: 2;
            backdrop-filter: blur(20px);
        }
        .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
            &:hover {
                filter: grayscale(0);
                transform: scale(1.1);
            }
        }
        h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }
        p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
            a {
                &:visited {
                    color: rgb(var(--vs-primary));
                }
            }
        }
    }

    button.primary {
        display: inline-block;
        font-size: 0.8rem;
        color: #fff !important;
        background: rgb(var(--vs-primary) / 100%);
        padding: 13px 25px;
        border-radius: 17px;
        transition: background-color 0.1s ease;
        box-sizing: border-box;
        transition: all 0.25s ease;
        border: 0;
        cursor: pointer;
        box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
        &:hover {
            box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
            transform: translateY(-5px);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 0.9;
        }
    }

    .navbar1 {
        transition: all 0.5s !important;
    }

    .navbar-scrolled {
        background-color: #1c1c1c !important;
    }
    


</style>
@notmobile
    <div class="container mx-auto 2xl:px-8 md:px-28 ">
        <div class="flex justify-between h-20">

            <div class="flex items-center">

                <x-dropdown align="left">
                    <x-slot name="trigger">
                        <button class="hidden space-x-8 sm:-my-px sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="inline-flex items-center px-0 space-x-8 pt-1 border-indigo-400 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out">
                                {{ __('frontend.desktop_aboutUs') }}
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" class="bg-white border-0 space-y-6" >
                        <x-dropdown-link href="{{ url($langSeg.'/about-us') }}"  class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_ourCompany') }}
                        </x-dropdown-link>
                        
                        <x-dropdown-link href="{{ url($langSeg.'/ceo-message') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_ceoMessageNav') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>


                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/projects') }}" aria-label="navbar-route" rel='canonical'>
                        {{ __('frontend.desktop_developments') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/communities') }}" aria-label="navbar-route" rel='canonical'>
                        {{ __('frontend.desktop_communities') }}
                    </x-nav-link>
                </div>
            </div>

            <div class=" flex items-center ">
                <div class="shrink-0 flex items-center hidden md:hidden lg:block text-2xl font-thin">
                    @tablet
                        <a href="{{ url($langSeg.'/') }}" aria-label="home-route" rel='canonical'>
                            {{-- <img style="height: 30px !important;" src="{{ asset('logo-dark.png') }}" alt="esnaad-logo-navbar"> --}}
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="100%" height="30.000000pt" viewBox="0 0 1000.000000 269.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,269.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M2889 1887 c-181 -51 -267 -211 -210 -393 27 -91 80 -159 239 -310
                                155 -147 194 -210 195 -309 1 -114 -68 -179 -190 -178 -99 1 -181 60 -224 161
                                -11 24 -23 41 -28 37 -5 -3 -12 -31 -16 -63 -3 -31 -8 -73 -11 -92 -5 -33 -2
                                -37 35 -58 96 -54 217 -78 317 -62 156 25 255 125 270 276 14 129 -51 242
                                -239 418 -167 156 -225 241 -226 334 -2 125 102 197 234 161 38 -11 104 -68
                                132 -114 20 -33 33 1 31 79 l-3 69 -63 23 c-78 30 -181 38 -243 21z"/>
                                <path d="M5001 1422 c-170 -378 -307 -674 -359 -774 -2 -5 35 -8 82 -8 l86 0
                                0 43 c0 30 20 88 69 202 l69 160 272 0 272 0 64 -148 c44 -98 67 -166 71 -202
                                l6 -55 114 0 c63 0 113 4 111 8 -1 4 -28 57 -59 117 -31 61 -159 341 -284 623
                                l-227 512 -37 0 -36 0 -214 -478z m336 -28 c62 -142 113 -259 113 -261 0 -1
                                -103 -3 -230 -3 -126 0 -230 3 -230 6 0 15 224 524 228 519 3 -3 56 -120 119
                                -261z"/>
                                <path d="M6542 1883 c-6 -10 -125 -274 -267 -588 -141 -314 -267 -587 -281
                                -607 -13 -21 -24 -40 -24 -43 0 -3 38 -5 85 -5 l85 0 0 34 c0 41 12 76 85 244
                                l58 132 270 -2 270 -3 65 -145 c46 -104 66 -161 69 -202 l6 -58 118 0 118 0
                                -37 62 c-20 34 -150 317 -288 628 l-252 565 -35 3 c-26 2 -38 -2 -45 -15z
                                m127 -490 c61 -138 111 -254 111 -257 0 -3 -104 -6 -231 -6 -181 0 -230 3
                                -226 13 44 114 224 514 229 509 3 -4 56 -120 117 -259z"/>
                                <path d="M2121 1883 l-303 -3 7 -33 c13 -58 18 -1004 6 -1106 -7 -51 -10 -95
                                -8 -97 2 -2 142 -4 313 -4 l309 -1 6 33 c4 18 10 49 13 69 l6 35 -86 -17 c-92
                                -19 -269 -39 -341 -39 l-43 0 0 267 0 266 118 -7 c64 -3 145 -9 179 -12 l61
                                -7 12 57 c6 32 10 60 7 62 -2 2 -55 0 -118 -6 -63 -5 -147 -10 -186 -10 l-73
                                0 0 229 0 228 46 7 c69 9 183 7 266 -4 40 -6 81 -12 92 -13 13 -1 22 8 31 33
                                27 78 28 80 8 78 -10 -2 -155 -4 -322 -5z"/>
                                <path d="M7476 1883 l-178 -3 8 -23 c12 -35 17 -1069 5 -1145 -6 -36 -8 -68
                                -6 -71 3 -2 119 -5 258 -5 235 -1 257 1 332 22 162 47 287 133 360 247 103
                                160 130 425 65 621 -42 125 -136 236 -244 289 -124 60 -254 75 -600 68z m324
                                -84 c178 -29 313 -159 354 -341 23 -101 29 -207 17 -306 -27 -216 -118 -346
                                -290 -410 -56 -21 -88 -26 -218 -30 l-153 -4 -8 23 c-10 26 -18 561 -14 876
                                l2 192 63 4 c133 7 184 6 247 -4z"/>
                                <path d="M3478 1833 c9 -64 9 -1096 -1 -1150 l-7 -43 76 0 76 0 -6 43 c-4 23
                                -9 231 -12 462 -6 417 -6 420 14 400 11 -11 207 -220 437 -465 230 -245 424
                                -449 432 -454 8 -4 19 -4 23 0 5 5 11 279 13 609 2 330 7 610 11 623 9 23 8
                                23 -70 20 -59 -2 -78 -6 -76 -16 15 -74 22 -277 20 -569 l-3 -352 -395 420
                                c-217 231 -416 442 -441 470 -33 35 -54 49 -72 49 -26 0 -26 -1 -19 -47z"/>
                                </g>
                            </svg>
                        </a>
                    @endtablet

                    @desktop
                        <a href="{{ url($langSeg.'/') }}" aria-label="home-route" rel='canonical'>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="100%" height="36.000pt" viewBox="0 0 665.000000 190.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,190.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M1129 1497 c-181 -51 -267 -211 -210 -393 27 -91 80 -159 239 -310
                                155 -147 194 -210 195 -309 1 -114 -68 -179 -190 -178 -99 1 -181 60 -224 161
                                -11 24 -23 41 -28 37 -5 -3 -12 -31 -16 -63 -3 -31 -8 -73 -11 -92 -5 -33 -2
                                -37 35 -58 96 -54 217 -78 317 -62 156 25 255 125 270 276 14 129 -51 242
                                -239 418 -167 156 -225 241 -226 334 -2 125 102 197 234 161 38 -11 104 -68
                                132 -114 20 -33 33 1 31 79 l-3 69 -63 23 c-78 30 -181 38 -243 21z"/>
                                <path d="M3241 1032 c-170 -378 -307 -674 -359 -774 -2 -5 35 -8 82 -8 l86 0
                                0 43 c0 30 20 88 69 202 l69 160 272 0 272 0 64 -148 c44 -98 67 -166 71 -202
                                l6 -55 114 0 c63 0 113 4 111 8 -1 4 -28 57 -59 117 -31 61 -159 341 -284 623
                                l-227 512 -37 0 -36 0 -214 -478z m336 -28 c62 -142 113 -259 113 -261 0 -1
                                -103 -3 -230 -3 -126 0 -230 3 -230 6 0 15 224 524 228 519 3 -3 56 -120 119
                                -261z"/>
                                <path d="M4782 1493 c-6 -10 -125 -274 -267 -588 -141 -314 -267 -587 -281
                                -607 -13 -21 -24 -40 -24 -43 0 -3 38 -5 85 -5 l85 0 0 34 c0 41 12 76 85 244
                                l58 132 270 -2 270 -3 65 -145 c46 -104 66 -161 69 -203 l6 -57 118 0 118 0
                                -37 62 c-20 34 -150 317 -288 628 l-252 565 -35 3 c-26 2 -38 -2 -45 -15z
                                m127 -490 c61 -138 111 -254 111 -257 0 -3 -104 -6 -231 -6 -181 0 -230 3
                                -226 13 44 114 224 514 229 509 3 -4 56 -120 117 -259z"/>
                                <path d="M361 1493 l-303 -3 7 -33 c13 -58 18 -1004 6 -1106 -7 -51 -10 -95
                                -8 -97 2 -2 142 -4 313 -4 l309 -1 6 33 c4 18 10 49 13 69 l6 35 -86 -17 c-92
                                -19 -269 -39 -341 -39 l-43 0 0 267 0 266 118 -7 c64 -3 145 -9 179 -12 l61
                                -7 12 57 c6 32 10 60 7 62 -2 2 -55 0 -118 -6 -63 -5 -147 -10 -186 -10 l-73
                                0 0 229 0 228 46 7 c69 9 183 7 266 -4 40 -6 81 -12 92 -13 13 -1 22 8 31 33
                                27 78 28 80 8 78 -10 -2 -155 -4 -322 -5z"/>
                                <path d="M5716 1493 l-178 -3 8 -23 c12 -35 17 -1069 5 -1145 -6 -36 -8 -68
                                -6 -71 3 -2 119 -5 258 -5 235 -1 257 1 332 22 162 47 287 133 360 247 103
                                160 130 425 65 621 -42 125 -136 236 -244 289 -124 60 -254 75 -600 68z m324
                                -84 c178 -29 313 -159 354 -341 23 -101 29 -207 17 -306 -27 -216 -118 -346
                                -290 -410 -56 -21 -88 -26 -218 -30 l-153 -4 -8 23 c-10 26 -18 561 -14 876
                                l2 192 63 4 c133 7 184 6 247 -4z"/>
                                <path d="M1718 1443 c9 -64 9 -1096 -1 -1151 l-7 -42 76 0 76 0 -6 43 c-4 23
                                -9 231 -12 462 -6 417 -6 420 14 400 11 -11 207 -220 437 -465 230 -245 424
                                -449 432 -454 8 -4 19 -4 23 0 5 5 11 279 13 609 2 330 7 610 11 623 9 23 8
                                23 -70 20 -59 -2 -78 -6 -76 -16 15 -74 22 -277 20 -569 l-3 -352 -395 420
                                c-217 231 -416 442 -441 470 -33 35 -54 49 -72 49 -26 0 -26 -1 -19 -47z"/>
                                </g>
                            </svg>
                        </a>
                    @enddesktop
                </div>
            </div>

            <div class="flex items-center">

                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/constructions') }}"  aria-label="navbar-route" rel='canonical'>
                        {{ __('frontend.desktop_construction') }}
                    </x-nav-link>
                </div>

                {{-- <div class="hidden space-x-8 sm:-my-px sm:flex text-center 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/news') }}"  aria-label="navbar-route" rel='canonical'>
                        {{ __('frontend.desktop_news') }}
                    </x-nav-link>
                </div>  --}}

                <div class="group relative cursor-pointer py-2">

                    <div class="flex items-center justify-between space-x-5 bg-white px-4">
                        
                        <button onClick="" class="menu-hover my-2 py-2 lg:mx-4 hidden space-x-8 sm:-my-px sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="inline-flex items-center px-0 space-x-8 pt-1 border-indigo-400 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out">
                                {{ __('frontend.desktop_media') }}
                            </div>
                        </button>
                    </div>
            
                    <div
                        class="invisible absolute z-50 flex w-full flex-col bg-white py-1 px-4 text-gray-800 shadow-xl group-hover:visible">
            
                        <x-dropdown-link href="{{ url($langSeg.'/press-release') }}"  class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_press_release') }}
                        </x-dropdown-link>
            
                        <x-dropdown-link href="{{ url($langSeg.'/blogs') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_blogs') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ url($langSeg.'/media-gallery') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_gallery') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ url($langSeg.'/careers') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_careers') }}
                        </x-dropdown-link>
            
                    </div>
                </div>

                {{-- <x-dropdown align="left">
                    <x-slot name="trigger">
                        <button class="hidden space-x-8 sm:-my-px sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="inline-flex items-center px-0 space-x-8 pt-1 border-indigo-400 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out">
                                {{ __('frontend.desktop_media') }}
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" class="bg-white border-0 space-y-6" >
                        <x-dropdown-link href="{{ url($langSeg.'/press-release') }}"  class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_press_release') }}
                        </x-dropdown-link>
                        
                        <x-dropdown-link href="{{ url($langSeg.'/blogs') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_blogs') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ url($langSeg.'/media-gallery') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_gallery') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ url($langSeg.'/careers') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-base text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical'>
                            {{ __('frontend.desktop_careers') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown> --}}

                <div class="hidden space-x-8 sm:-my-px sm:flex text-center 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/contact') }}"   aria-label="navbar-route" rel='canonical'>
                        {{ __('frontend.desktop_contact_us') }}
                    </x-nav-link>
                </div>
                

                <div class="hidden absolute  space-x-8 sm:-my-px sm:flex text-center float-right" style="right: 30px;">
                    @if($langSeg === 'ar')
                        <x-nav-link href="{{$finalUrlen}}" aria-label="navbar-route" rel='canonical'>
                            <div class="flex">
                                <div class="flex-none my-auto">
                                    
                                    <img 
                                        src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXUlEQVR4nO2Yj09TVxTH+0/NCTKKOCUoKBTZpPwQZUwCbChxZrgYolkIicRsI8vi5rZs7mfCzH6VgdMMgQGR8aMi/gKFMUv7Xkv7XmlL+9q+73Lv6ys8Hq8tUp1Z3je5aZr0nnM/99x77jk1GHTp0qVLly5dz4GiHIe1WglG8Pl3D/By6W8wFltSHrJsGS8ohqzN2DIWW5B7sBudn07Dx/nh/eQiFrN3UHsqAHv+bvh/+QkQRQXIgs2HE60j/wlA4+khPJz3Ijg8BOZgsWQrcxs8755TA8iO2CNVEO7eUUAQpt6+xyiq/v2ZABRWXkXXr3MQWAbus61xG2xlGULWSWpHBRC42gNHQb7046zt4D94D2LArwBZ9gk0nDtLup8KQI7Jgrb3J8G5A1j+5iss5hrpXPJJviMSidtRAVzumkXI6wP/YSdsO16kEwmQv3t1UbKm73tQ0zyQVoDXmgeo3dDkBNiKsvi8pZMnEHHYFf6FcFQNQIyY6//AzQkWwswDOGuPxo24GuoQnp9TGImKIn7u/Rt7y3u3BJBX1oOvr8xC8PDgLnSsbl5JEVaGBlWbN3l7CYffvLExgDxa2kbBOgN098nlpmHMzqTREUMhhUGXO0jD/iQALW2jYFjZzx7Jz0sZG/pZ8kh+yDEjcxMCkEF2llyksIdT7AzJBiQrrNfElAtVb9xICUAR6ddrlJGeU0eaJJDCKmUCSQogj5o1Z5MpP5TwbIYjYlIA8rYE+dhdy9qe8K7df8ih7tSfG64rZYD12cH3/bdY3CVnh2x4L30MURBUzrUAVgb64SgqiGc77kIHRJ9v09lOBYA0SwsgXTL87wBs6xw+78OgA2ToEUBaj1C6L5mehZIo5YdsX4VUm0ejykYnvLAAV1NjfKeddbUQZmeSRmB4jFUtJjQxDsb8quKVDzsYWkLsP7xxD5ISQOv5cbg5ZVElBoP09ZVbO3veLvo6O51++lonA5CLOAcbUNoNh6VXPtYD2HfvpN95Pii9yqbu1AEqGvrwl9Wp2qmVwQE4Sg5Ii8rcRrslweWmEco3S2V1KgC0jD7UQ+siUtuvVYRl4T79dnweW1WO0O0pWKeXUN3UnxggoVFFa2dGaOoWbt1x48jx/i31AxWNfRizutSbRWom037NzVIBkLDaGY2wrineli9/oRnWJ+3IckwWtHdawfHJj6v/xytwsP7kaTQ0PgbG/Ep8Ae4z7yDMsvRiHdC4WFvtiQsqNRLGo0dw1h9bTRj1x7QBojwPT3sbDRv5MVNqQnBkGLNzPBpahhIuYKsAxtioPTmIuzPK/6mIAtevwb4vT+Mhi0bh+6EL9j250nHJyYL3s0sIeAO4+OU9+gdTKs7TAWAsttDj2fHRFHz+sAIi6vWCO9+uBnDWVK/m4ebjiNgeY2iUQWnt9ZSdphPAGBumo9fosV0vFQBx4ijcS1s7m92Pt87d3LSzpwFgjI2mMyOY/2dZG0CXLl26dOnSZXj2+hdh4D9R4Q/X/wAAAABJRU5ErkJggg==" 
                                        alt="English-Language" 
                                        height="auto"
                                        width="auto"
                                        style="height: 25px; width: 25px;"
                                        loading="eager"
                                        title="English"
                                    />
                                </div>
                                <div class="flex-1 p-1 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out">
                                    EN
                                </div>
                            </div>
                        </x-nav-link>
                        
                    @else
                        <x-nav-link href="{{$finalUrl}}"> 
                            <div class="flex">
                                <div class="flex-none my-auto">
                                    <img 
                                        src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAcElEQVR4nO3VsQ3EMAgFUKaKUlzF7edJI1mR3HOty5T25T2JARDwiQCAfzC+Rz2ps32WqNBAM4GyQjNH3KRQidHxhkd29XuJCg10EygrNHPEXQqVGB1veGSZuUSFBtIEygrNHHFKoRKjY+dHBgCxoR+KvePZGHXRaQAAAABJRU5ErkJggg==" 
                                        alt="Arabic-Language" 
                                        height="auto"
                                        width="auto"
                                        style="height: 25px; width: 25px;"
                                        loading="eager"
                                        title="Arabic"
                                    />
                                </div>
                                <div class="flex-1 p-1 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out">
                                    AR
                                </div>
                            </div>
                        </x-nav-link>
                    @endif
                    
                    {{-- <x-dropdown align="left" width="40">
                        <x-slot name="trigger">
                            <button class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                @if($langSeg === 'ar')
                                    <div class="flex">
                                        <div class="flex-none ">
                                            
                                            <img 
                                                src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXUlEQVR4nO2Yj09TVxTH+0/NCTKKOCUoKBTZpPwQZUwCbChxZrgYolkIicRsI8vi5rZs7mfCzH6VgdMMgQGR8aMi/gKFMUv7Xkv7XmlL+9q+73Lv6ys8Hq8tUp1Z3je5aZr0nnM/99x77jk1GHTp0qVLly5dz4GiHIe1WglG8Pl3D/By6W8wFltSHrJsGS8ohqzN2DIWW5B7sBudn07Dx/nh/eQiFrN3UHsqAHv+bvh/+QkQRQXIgs2HE60j/wlA4+khPJz3Ijg8BOZgsWQrcxs8755TA8iO2CNVEO7eUUAQpt6+xyiq/v2ZABRWXkXXr3MQWAbus61xG2xlGULWSWpHBRC42gNHQb7046zt4D94D2LArwBZ9gk0nDtLup8KQI7Jgrb3J8G5A1j+5iss5hrpXPJJviMSidtRAVzumkXI6wP/YSdsO16kEwmQv3t1UbKm73tQ0zyQVoDXmgeo3dDkBNiKsvi8pZMnEHHYFf6FcFQNQIyY6//AzQkWwswDOGuPxo24GuoQnp9TGImKIn7u/Rt7y3u3BJBX1oOvr8xC8PDgLnSsbl5JEVaGBlWbN3l7CYffvLExgDxa2kbBOgN098nlpmHMzqTREUMhhUGXO0jD/iQALW2jYFjZzx7Jz0sZG/pZ8kh+yDEjcxMCkEF2llyksIdT7AzJBiQrrNfElAtVb9xICUAR6ddrlJGeU0eaJJDCKmUCSQogj5o1Z5MpP5TwbIYjYlIA8rYE+dhdy9qe8K7df8ih7tSfG64rZYD12cH3/bdY3CVnh2x4L30MURBUzrUAVgb64SgqiGc77kIHRJ9v09lOBYA0SwsgXTL87wBs6xw+78OgA2ToEUBaj1C6L5mehZIo5YdsX4VUm0ejykYnvLAAV1NjfKeddbUQZmeSRmB4jFUtJjQxDsb8quKVDzsYWkLsP7xxD5ISQOv5cbg5ZVElBoP09ZVbO3veLvo6O51++lonA5CLOAcbUNoNh6VXPtYD2HfvpN95Pii9yqbu1AEqGvrwl9Wp2qmVwQE4Sg5Ii8rcRrslweWmEco3S2V1KgC0jD7UQ+siUtuvVYRl4T79dnweW1WO0O0pWKeXUN3UnxggoVFFa2dGaOoWbt1x48jx/i31AxWNfRizutSbRWom037NzVIBkLDaGY2wrineli9/oRnWJ+3IckwWtHdawfHJj6v/xytwsP7kaTQ0PgbG/Ep8Ae4z7yDMsvRiHdC4WFvtiQsqNRLGo0dw1h9bTRj1x7QBojwPT3sbDRv5MVNqQnBkGLNzPBpahhIuYKsAxtioPTmIuzPK/6mIAtevwb4vT+Mhi0bh+6EL9j250nHJyYL3s0sIeAO4+OU9+gdTKs7TAWAsttDj2fHRFHz+sAIi6vWCO9+uBnDWVK/m4ebjiNgeY2iUQWnt9ZSdphPAGBumo9fosV0vFQBx4ijcS1s7m92Pt87d3LSzpwFgjI2mMyOY/2dZG0CXLl26dOnSZXj2+hdh4D9R4Q/X/wAAAABJRU5ErkJggg==" 
                                                alt="English-Language" 
                                                height="auto"
                                                width="auto"
                                                style="height: 25px; width: 25px;"
                                                loading="eager"
                                                title="English"
                                            />
                                        </div>
                                        <div class="flex-1 text-base p-1">
                                            EN
                                        </div>
                                    </div>
                                @else
                                    <div class="flex">
                                        <div class="flex-none ">
                                            <img 
                                                src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAcElEQVR4nO3VsQ3EMAgFUKaKUlzF7edJI1mR3HOty5T25T2JARDwiQCAfzC+Rz2ps32WqNBAM4GyQjNH3KRQidHxhkd29XuJCg10EygrNHPEXQqVGB1veGSZuUSFBtIEygrNHHFKoRKjY+dHBgCxoR+KvePZGHXRaQAAAABJRU5ErkJggg==" 
                                                alt="Arabic-Language" 
                                                height="auto"
                                                width="auto"
                                                style="height: 25px; width: 25px;"
                                                loading="eager"
                                                title="Arabic"
                                            />
                                        </div>
                                        <div class="flex-1 text-base p-1">
                                            AR
                                        </div>
                                    </div>
                                @endif
                            </button>
                        </x-slot>

                        <x-slot name="content" class="bg-white border-0">
                            <x-dropdown-link href="{{$finalUrl}}">
                                <div class="flex">
                                    <div class="flex-none ">
                                        <img 
                                            src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAcElEQVR4nO3VsQ3EMAgFUKaKUlzF7edJI1mR3HOty5T25T2JARDwiQCAfzC+Rz2ps32WqNBAM4GyQjNH3KRQidHxhkd29XuJCg10EygrNHPEXQqVGB1veGSZuUSFBtIEygrNHHFKoRKjY+dHBgCxoR+KvePZGHXRaQAAAABJRU5ErkJggg==" 
                                            alt="Arabic-Language" 
                                            height="auto"
                                            width="auto"
                                            style="height: 25px; width: 25px;"
                                            loading="eager"
                                            title="Arabic"
                                        />
                                    </div>
                                    <div class="flex-1 text-base p-1">
                                        AR
                                    </div>
                                </div>
                            </x-dropdown-link>
                            <x-dropdown-link href="{{$finalUrlen}}">
                                <div class="flex">
                                    <div class="flex-none ">
                                        
                                        <img 
                                            src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXUlEQVR4nO2Yj09TVxTH+0/NCTKKOCUoKBTZpPwQZUwCbChxZrgYolkIicRsI8vi5rZs7mfCzH6VgdMMgQGR8aMi/gKFMUv7Xkv7XmlL+9q+73Lv6ys8Hq8tUp1Z3je5aZr0nnM/99x77jk1GHTp0qVLly5dz4GiHIe1WglG8Pl3D/By6W8wFltSHrJsGS8ohqzN2DIWW5B7sBudn07Dx/nh/eQiFrN3UHsqAHv+bvh/+QkQRQXIgs2HE60j/wlA4+khPJz3Ijg8BOZgsWQrcxs8755TA8iO2CNVEO7eUUAQpt6+xyiq/v2ZABRWXkXXr3MQWAbus61xG2xlGULWSWpHBRC42gNHQb7046zt4D94D2LArwBZ9gk0nDtLup8KQI7Jgrb3J8G5A1j+5iss5hrpXPJJviMSidtRAVzumkXI6wP/YSdsO16kEwmQv3t1UbKm73tQ0zyQVoDXmgeo3dDkBNiKsvi8pZMnEHHYFf6FcFQNQIyY6//AzQkWwswDOGuPxo24GuoQnp9TGImKIn7u/Rt7y3u3BJBX1oOvr8xC8PDgLnSsbl5JEVaGBlWbN3l7CYffvLExgDxa2kbBOgN098nlpmHMzqTREUMhhUGXO0jD/iQALW2jYFjZzx7Jz0sZG/pZ8kh+yDEjcxMCkEF2llyksIdT7AzJBiQrrNfElAtVb9xICUAR6ddrlJGeU0eaJJDCKmUCSQogj5o1Z5MpP5TwbIYjYlIA8rYE+dhdy9qe8K7df8ih7tSfG64rZYD12cH3/bdY3CVnh2x4L30MURBUzrUAVgb64SgqiGc77kIHRJ9v09lOBYA0SwsgXTL87wBs6xw+78OgA2ToEUBaj1C6L5mehZIo5YdsX4VUm0ejykYnvLAAV1NjfKeddbUQZmeSRmB4jFUtJjQxDsb8quKVDzsYWkLsP7xxD5ISQOv5cbg5ZVElBoP09ZVbO3veLvo6O51++lonA5CLOAcbUNoNh6VXPtYD2HfvpN95Pii9yqbu1AEqGvrwl9Wp2qmVwQE4Sg5Ii8rcRrslweWmEco3S2V1KgC0jD7UQ+siUtuvVYRl4T79dnweW1WO0O0pWKeXUN3UnxggoVFFa2dGaOoWbt1x48jx/i31AxWNfRizutSbRWom037NzVIBkLDaGY2wrineli9/oRnWJ+3IckwWtHdawfHJj6v/xytwsP7kaTQ0PgbG/Ep8Ae4z7yDMsvRiHdC4WFvtiQsqNRLGo0dw1h9bTRj1x7QBojwPT3sbDRv5MVNqQnBkGLNzPBpahhIuYKsAxtioPTmIuzPK/6mIAtevwb4vT+Mhi0bh+6EL9j250nHJyYL3s0sIeAO4+OU9+gdTKs7TAWAsttDj2fHRFHz+sAIi6vWCO9+uBnDWVK/m4ebjiNgeY2iUQWnt9ZSdphPAGBumo9fosV0vFQBx4ijcS1s7m92Pt87d3LSzpwFgjI2mMyOY/2dZG0CXLl26dOnSZXj2+hdh4D9R4Q/X/wAAAABJRU5ErkJggg==" 
                                            alt="English-Language" 
                                            height="auto"
                                            width="auto"
                                            style="height: 25px; width: 25px;"
                                            loading="eager"
                                            title="English"
                                        />
                                    </div>
                                    <div class="flex-1 text-base p-1">
                                        EN
                                    </div>
                                </div>
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown> --}}
                </div>
            </div>
            
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endnotmobile




