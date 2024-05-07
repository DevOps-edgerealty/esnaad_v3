<?php
    /**
     * NOTICE
     *
     * The code written for this page will be confusing - guranteed.
     * The code written here is not for developer easiness rather page optimization.
     * There is no separate code for mobile and desktop. Logics are written for
     * each section that is decided to be loaded as responsive or not.
     *
     * Beware - do not REPEAT any ELEMENT TAGS while writing logics. Write logics
     * inside of the element tags. This is due to the fact that google crawls every page
     * and reads all element tags instead of the contents. If it notices duplicate contents
     * in separate element tags such as:
     *      02 <p> tags contains same heading for Mobile and Desktop with different stylings.
    */
?>

<div class="max-w-full rounded overflow-hidden ">


        <div class="w-full h-fit group">
            <div class="relative overflow-hidden">
                <img
                    class="h-32 md:h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                    src="{{ asset('uploads/properties/' . $id. '/' . $img) }}"
                    alt="lpd-projects-{{$img}}"
                    onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                >
                <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <a
                        @if($type == '1')
                            href="{{ URL($langSeg.'/buy/off-plan/' . strtolower($property_type) .'/' . $sluglink ) }}"
                        @elseif($type == '2')
                            href="{{ URL($langSeg.'/buy/ready/' . strtolower($property_type) . '/' . $sluglink) }}"
                        @endif
                        alt="{{$titleen}}"
                        aria-label="view-more-{{$sluglink}}"
                    >
                        <button class="bg-white text-black py-2 px-5">More Details</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="px-6 py-4 ">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <p class="font-light text-md mb-2 ">
                            {{ $location }}
                        </p>
                    </div>
                </div>
                <div class="hidden md:block w-full max-w-full px-0 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap list-none p-0 " nav-pills="" role="tablist">
                            <li class="z-30 flex-auto text-center">
                                <p class="font-light text-md mb-2 ">
                                    @if($type == '1') Off Plan @elseif($type == '2') Ready @else Unlisted @endif
                                </p>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <hr class="border-1 border-black">

            <div class=" mt-2" style="height: 60px !important;">
                <p class=" text-md mb-2 h-full " >
                    {{ Str::limit($titleen, 60 ) }}
                </p>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <p class="font-light  text-base mb-2">
                            @if($price == 'Price On Request')
                                {{ __('Price on Request') }}
                            @else
                                AED {{ number_format($price) }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="hidden md:block w-full max-w-full px-0 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap list-none p-0 " nav-pills="" role="tablist">
                            <li class="z-30 flex-auto text-center">
                                <p class="hidden xl:block font-light text-base mb-2 ">
                                    {{$category}}
                                </p>

                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <p class="hidden xl:block font-light text-base mb-2 ">
                {{$category}}
            </p>


            <p class="font-light  text-base mb-2">
                @if($price == 'Price On Request')
                    {{ __('Price on Request') }}
                @else
                    AED {{ number_format($price) }}
                @endif
            </p>


            <p class="font-light text-base mb-2">
                <span class=" md:hidden">@if($type == '1') Off Plan @elseif($type == '2') Ready @else Unlisted @endif | </span> <span class="xl:hidden">{{$category}} </span>
            </p>



            <div class="flex flex-wrap ">
                <div class="flex-none w-auto max-w-full px-0 my-auto">
                    <div class="h-full">
                        <p class="font-light text-base mb-2">
                            {{$bedrooms}} Bed &nbsp; . &nbsp; {{$bathrooms}} Bath &nbsp; . &nbsp; {{ number_format($area)}} Sq. Ft
                        </p>
                    </div>
                </div>
                <div class="hidden xxl:block w-full max-w-full px-1 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap list-none p-0 " nav-pills="" role="tablist">
                            <li class="z-30 flex-auto text-center">
                                <p class="font-light text-base mb-2 ">
                                    {{$category}}
                                </p>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            {{-- <hr class="my-4"> --}}

            <div class="flex flex-wrap grid grid-cols-2 gap-2 mb-5">
                <div>
                    <button type="button" class="inline-block w-full  xl:px-6 py-2 font-light text-sm text-center  align-middle transition-all bg-transparent border border-gray-500 rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">
                        Request Details
                    </button>
                </div>
                <div>
                    <a href="https://wa.me/971585602665?text=Good Day! I would like to have a consultation session on this property - {{ $titleen }}. Thank you ESNAAD Real Estate Development!">
                        <button type="button" class="inline-block w-full px-6 py-2 text-white font-light text-sm text-center  align-middle transition-all bg-transparent border border-gray-500 rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 bg-whatsapp hover:-translate-y-px active:opacity-85 hover:shadow-md">
                            WhatsApp
                        </button>
                    </a>
                </div>
            </div>

        </div>
</div>
