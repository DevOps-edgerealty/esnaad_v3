<style >
    dialog {
        padding: 1rem 3rem;
        background: #1c1c1c;
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
    <div class="container mx-auto 2xl:px-8 md:px-28" style="background-color: #1C1C1C !important; color: #ccc !important; ">
        <div class="flex justify-between h-20">

            <div class="flex items-center">

                <div class="group relative cursor-pointer ">

                    <div class="flex items-center justify-between space-x-5 px-4 mx-4">
                        <button onClick="" class="hidden space-x-8 sm:-my-px sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700  focus:outline-none transition ease-in-out duration-150">
                            <div class="inline-flex items-center px-0 space-x-8 pt-1 border-indigo-400 font-thin text-xs md:text-[12px] xl:text-[16px] 2xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out" style="background-color: #1C1C1C !important; color: #ccc !important;">
                                {{ __('frontend.desktop_aboutUs') }}
                            </div>
                        </button>
                    </div>
            
                    <div class="invisible absolute z-50 flex w-full flex-col bg-white mx-8 pb-1 pt-4 text-gray-800 shadow-xl group-hover:visible" style="background-color: #1C1C1C !important; color: #ccc !important;  width: 200px !important;">
            
                        <x-dropdown-link href="{{ url($langSeg.'/about-us') }}"  class="font-thin text-xs my-4 md:text-[12px] xl:text-[16px] 2xl:text-lg text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical' style="background-color: #1C1C1C !important; color: #ccc !important; width: 200px !important;">
                            {{ __('frontend.desktop_ourCompany') }}
                        </x-dropdown-link>
                        
                        <x-dropdown-link href="{{ url($langSeg.'/ceo-message') }}" class="font-thin text-xs my-4 md:text-[12px] xl:text-[16px] 2xl:text-lg text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical' style="background-color: #1C1C1C !important; color: #ccc !important;">
                            {{ __('frontend.desktop_ceoMessageNav') }}
                        </x-dropdown-link>
            
                    </div>
                </div>

                {{-- <x-dropdown align="left">
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
                </x-dropdown> --}}


                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/developments') }}" aria-label="navbar-route" rel='canonical'>
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
                            <img style="height: 30px !important;" src="{{ asset('logo-light-3.png') }}" alt="esnaad-logo-navbar">
                        </a>
                    @endtablet

                    @desktop
                        <a href="{{ url($langSeg.'/') }}" aria-label="home-route hidden 3xl:visible" rel='canonical'>
                            <img style="height: 30px !important;" src="{{ asset('logo-light-3.png') }}" alt="esnaad-logo-navbar">
                            
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

                <div class="group relative cursor-pointer">

                    <div class="flex items-center justify-between space-x-5  px-4 mx-4">
                        <button onClick="" class="hidden space-x-8 sm:-my-px sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" style="background-color: #1C1C1C !important; color: #ccc !important;">
                            <div class="inline-flex items-center px-0 pt-1 font-thin text-xs md:text-[12px] xl:text-[16px] 2xl:text-lg text-center  leading-5 text-black transition duration-150 ease-in-out" style="background-color: #1C1C1C !important; color: #ccc !important;">
                                {{ __('frontend.desktop_media') }}
                            </div>
                        </button>
                    </div>
            
                    <div class="invisible absolute z-50 flex w-full flex-col mx-8 pb-1 pt-4 text-gray-800 shadow-xl group-hover:visible" style="background-color: #1C1C1C !important; color: #ccc !important;  width: 200px !important;">
            
                        <x-dropdown-link href="{{ url($langSeg.'/press-release') }}"  class="font-thin text-xs my-2 md:text-[12px] xl:text-[16px] 2xl:text-lg text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical' style="background-color: #1C1C1C !important; color: #ccc !important;">
                            {{ __('frontend.desktop_press_release') }} 
                        </x-dropdown-link>
            
                        <x-dropdown-link href="{{ url($langSeg.'/blogs') }}" class="font-thin text-xs my-2 md:text-[12px] xl:text-[16px] 2xl:text-lg text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical' style="background-color: #1C1C1C !important; color: #ccc !important;">
                            {{ __('frontend.desktop_blogs') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ url($langSeg.'/media-gallery') }}" class="font-thin text-xs my-2 md:text-[12px] xl:text-[16px] 2xl:text-lg text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical' style="background-color: #1C1C1C !important; color: #ccc !important;">
                            {{ __('frontend.desktop_gallery') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ url($langSeg.'/careers') }}" class="font-thin text-xs my-2 md:text-[12px] xl:text-[16px] 2xl:text-lg text-left  leading-5 text-black transition duration-150 ease-in-out" aria-label="navbar-route" rel='canonical' style="background-color: #1C1C1C !important; color: #ccc !important;">
                            {{ __('frontend.desktop_careers') }}
                        </x-dropdown-link>
            
                    </div>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:flex text-center 2xl:px-8 md:px-2">
                    <x-nav-link href="{{ url($langSeg.'/contact-us') }}"   aria-label="navbar-route" rel='canonical'>
                        {{ __('frontend.desktop_contact_us') }}
                    </x-nav-link>
                </div>
                

                {{-- <div class="hidden absolute  space-x-8 sm:-my-px sm:flex text-center float-right" style="right: 30px;">
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
                                <div class="flex-1 p-1 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-white transition duration-150 ease-in-out">
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
                                <div class="flex-1 p-1 font-thin text-xs md:text-[12px] xl:text-lg text-center  leading-5 text-white transition duration-150 ease-in-out">
                                    AR
                                </div>
                            </div>
                        </x-nav-link>
                    @endif
                </div> --}}
            </div>
            
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out" style="background-color: #1C1C1C !important; color: #ccc !important;">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endnotmobile




