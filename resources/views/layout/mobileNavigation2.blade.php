<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="fixed top-0 z-50 w-full z-50 m-0 p-0" style="background-color: #1C1C1C !important; color: #ccc !important;">
  
  <div class="w-full  shadow-md">

    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl">

      <div class="flex flex-row items-center justify-between p-4">
        <a href="{{ url($langSeg.'/') }}" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">
          <img style="height: 30px !important;" class="px-2" src="{{ asset('logo-light-3.png') }}" alt="esnaad-logo-navbar">
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <nav :class="{'flex': open, 'hidden': !open}" class="h-[100%] z-10 w-[100vw] shadow flex-col flex-grow hidden md:pb-0 md:flex md:justify-end md:flex-row py-8 px-4" style="background-color: #1C1C1C !important; color: #ccc !important;"> 
        
        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg  md:mt-0 md:ml-4" style="background-color: #1C1C1C !important; color: #ccc !important;" href="{{ url($langSeg.'/') }}" class="text-dark" rel="canonical">{{ __('frontend.mobile_home') }}</a>
        
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row text-gray-900 items-center w-full px-4 py-2 mt-2 text-smv font-base text-left bg-transparent rounded-lg  md:w-auto md:inline md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;">
            <span class="mt-2 text-base font-base bg-transparent rounded-lg 4 ">
              {{ __('frontend.mobile_aboutUs') }}
            </span>
          </button>
          
          <div x-show="open" style="background-color: #1C1C1C !important; color: #ccc !important;" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right border-t-2 border-b-2 border-white">
            <div class="px-2 pt-2 pb-4 bg-white rounded-0 shadow-md" style="background-color: #1C1C1C !important; color: #ccc !important;">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4" style="background-color: #1C1C1C !important; color: #ccc !important;">
                <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;" href="{{ url($langSeg.'/about-us') }}" >{{ __('frontend.mobile_ourCompany') }}</a>
                <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;" href="{{ url($langSeg.'/ceo-message') }}"rel="canonical">{{ __('frontend.mobile_ceoMessageNav') }}</a>
              </div>
            </div>
          </div>
        </div>   

        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;" href="{{ url($langSeg.'/developments') }}">{{ __('frontend.mobile_developments') }}</a>
        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;" href="{{ url($langSeg.'/communities') }}">{{ __('frontend.mobile_communities') }}</a></li>
        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;" href="{{ url($langSeg.'/invest-in-dubai') }}">{{ __('frontend.mobile_invest_in_dubai') }}</a>
        
        <div @click.away="open = false" class="relative z-50" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-smv font-base text-left bg-transparent rounded-lg  md:w-auto md:inline md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;">
            <span class="mt-2 text-base font-base bg-transparent rounded-lg  md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;">
              {{ __('frontend.mobile_media') }}
            </span>
          </button>
          
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right border-t-2 border-b-2 border-white">
            <div class="px-2 pt-2 pb-4 bg-white rounded-0  shadow" style="background-color: #1C1C1C !important; color: #ccc !important;">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4" style="background-color: #1C1C1C !important; color: #ccc !important;">
                <a href="{{ url($langSeg.'/press-release') }}" class="text-dark flex" rel="canonical" style="background-color: #1C1C1C !important; color: #ccc !important;">{{ __('frontend.mobile_press_release') }}</a>
                <a href="{{ url($langSeg.'/blogs') }}" class="text-dark flex" rel="canonical" style="background-color: #1C1C1C !important; color: #ccc !important;">{{ __('frontend.mobile_blogs') }}</a>
                <a href="{{ url($langSeg.'/media-gallery') }}" class="text-dark flex" rel="canonical" style="background-color: #1C1C1C !important; color: #ccc !important;">{{ __('frontend.mobile_gallery') }}</a>
                <a href="{{ url($langSeg.'/careers') }}" class="text-dark flex" rel="canonical" style="background-color: #1C1C1C !important; color: #ccc !important;">{{ __('frontend.mobile_careers') }}</a>
              </div>
            </div>
          </div>
        </div> 
        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " href="{{ url($langSeg.'/constructions') }}">{{ __('frontend.mobile_constructions') }}</a></li>

        

        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg md:mt-0 md:ml-4 " href="{{ url($langSeg.'/contact-us') }}">{{ __('frontend.mobile_contact_us') }}</a></li>
        
        {{-- <div @click.away="open = false" class="relative z-10" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-smv font-base text-left bg-transparent rounded-lg  md:w-auto md:inline md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;">
            <span class="mt-2 text-base font-base bg-transparent rounded-lg  md:mt-0 md:ml-4 " style="background-color: #1C1C1C !important; color: #ccc !important;">
              {{ __('frontend.mobile_language') }}
            </span>
          </button>
          
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right border-t-2 border-b-2 border-white">
            <div class="px-2 pt-2 pb-4 bg-white rounded-0  shadow" style="background-color: #1C1C1C !important; color: #ccc !important;">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4" style="background-color: #1C1C1C !important; color: #ccc !important;">
                <a href="{{$finalUrlen}}" class="text-dark flex" rel="canonical" style="background-color: #1C1C1C !important; color: #ccc !important;">
                  <img 
                      src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXUlEQVR4nO2Yj09TVxTH+0/NCTKKOCUoKBTZpPwQZUwCbChxZrgYolkIicRsI8vi5rZs7mfCzH6VgdMMgQGR8aMi/gKFMUv7Xkv7XmlL+9q+73Lv6ys8Hq8tUp1Z3je5aZr0nnM/99x77jk1GHTp0qVLly5dz4GiHIe1WglG8Pl3D/By6W8wFltSHrJsGS8ohqzN2DIWW5B7sBudn07Dx/nh/eQiFrN3UHsqAHv+bvh/+QkQRQXIgs2HE60j/wlA4+khPJz3Ijg8BOZgsWQrcxs8755TA8iO2CNVEO7eUUAQpt6+xyiq/v2ZABRWXkXXr3MQWAbus61xG2xlGULWSWpHBRC42gNHQb7046zt4D94D2LArwBZ9gk0nDtLup8KQI7Jgrb3J8G5A1j+5iss5hrpXPJJviMSidtRAVzumkXI6wP/YSdsO16kEwmQv3t1UbKm73tQ0zyQVoDXmgeo3dDkBNiKsvi8pZMnEHHYFf6FcFQNQIyY6//AzQkWwswDOGuPxo24GuoQnp9TGImKIn7u/Rt7y3u3BJBX1oOvr8xC8PDgLnSsbl5JEVaGBlWbN3l7CYffvLExgDxa2kbBOgN098nlpmHMzqTREUMhhUGXO0jD/iQALW2jYFjZzx7Jz0sZG/pZ8kh+yDEjcxMCkEF2llyksIdT7AzJBiQrrNfElAtVb9xICUAR6ddrlJGeU0eaJJDCKmUCSQogj5o1Z5MpP5TwbIYjYlIA8rYE+dhdy9qe8K7df8ih7tSfG64rZYD12cH3/bdY3CVnh2x4L30MURBUzrUAVgb64SgqiGc77kIHRJ9v09lOBYA0SwsgXTL87wBs6xw+78OgA2ToEUBaj1C6L5mehZIo5YdsX4VUm0ejykYnvLAAV1NjfKeddbUQZmeSRmB4jFUtJjQxDsb8quKVDzsYWkLsP7xxD5ISQOv5cbg5ZVElBoP09ZVbO3veLvo6O51++lonA5CLOAcbUNoNh6VXPtYD2HfvpN95Pii9yqbu1AEqGvrwl9Wp2qmVwQE4Sg5Ii8rcRrslweWmEco3S2V1KgC0jD7UQ+siUtuvVYRl4T79dnweW1WO0O0pWKeXUN3UnxggoVFFa2dGaOoWbt1x48jx/i31AxWNfRizutSbRWom037NzVIBkLDaGY2wrineli9/oRnWJ+3IckwWtHdawfHJj6v/xytwsP7kaTQ0PgbG/Ep8Ae4z7yDMsvRiHdC4WFvtiQsqNRLGo0dw1h9bTRj1x7QBojwPT3sbDRv5MVNqQnBkGLNzPBpahhIuYKsAxtioPTmIuzPK/6mIAtevwb4vT+Mhi0bh+6EL9j250nHJyYL3s0sIeAO4+OU9+gdTKs7TAWAsttDj2fHRFHz+sAIi6vWCO9+uBnDWVK/m4ebjiNgeY2iUQWnt9ZSdphPAGBumo9fosV0vFQBx4ijcS1s7m92Pt87d3LSzpwFgjI2mMyOY/2dZG0CXLl26dOnSZXj2+hdh4D9R4Q/X/wAAAABJRU5ErkJggg==" 
                      alt="Red dot" 
                      height="auto"
                      width="auto"
                      style="height: 25px; width: 25px;"
                  />
                  &nbsp; EN
                </a>
                <a href="{{$finalUrl}}" class="text-dark flex" rel="canonical" style="background-color: #1C1C1C !important; color: #ccc !important;">
                  <img 
                      src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAcElEQVR4nO3VsQ3EMAgFUKaKUlzF7edJI1mR3HOty5T25T2JARDwiQCAfzC+Rz2ps32WqNBAM4GyQjNH3KRQidHxhkd29XuJCg10EygrNHPEXQqVGB1veGSZuUSFBtIEygrNHHFKoRKjY+dHBgCxoR+KvePZGHXRaQAAAABJRU5ErkJggg==" 
                      alt="Red dot" 
                      height="auto"
                      width="auto"
                      style="height: 25px; width: 25px;"
                  />
                  &nbsp; AR
                </a>
              </div>
            </div>
          </div>
        </div>    --}}
         
      </nav>
    </div>
  </div>
</div>
