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
                    class="h-60 sm:h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                    src="{{ asset('uploads/properties/' . $id. '/' . $img) }}"
                    alt="lpd-projects-{{$img}}"
                    onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                >
                <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <a
                        @if($type == '1')
                            @if($category == 'Apartment')
                                href="{{ URL($langSeg.'/buy/off-plan/apartments-for-sale/'. $sluglink) }}"
                            @elseif($category == 'Villa')
                                href="{{ URL($langSeg.'/buy/off-plan/villas-for-sale/'. $sluglink) }}"
                            @elseif($category == 'Townhouses')
                                href="{{ URL($langSeg.'/buy/off-plan/townhouses-for-sale/'. $sluglink) }}"
                            @endif
                        @elseif($type == '2')
                            @if($category == 'Apartment')
                                href="{{ URL($langSeg.'/buy/ready/apartments-for-sale/'. $sluglink) }}"
                            @elseif($category == 'Villa')
                                href="{{ URL($langSeg.'/buy/ready/villas-for-sale/'. $sluglink) }}"
                            @elseif($category == 'Townhouses')
                                href="{{ URL($langSeg.'/buy/ready/townhouses-for-sale/'. $sluglink) }}"
                            @endif
                        @endif
                        alt="luxe-properties-dubai-{{$titleen}}"
                        aria-label="view-more-{{$sluglink}}"
                    >
                        <button class="bg-white text-black py-2 px-5">More Details</button>
                    </a>
                </div>
            </div>
        </div>



        <div class="px-3 py-4 pt-0 ">
            <a
                @if($type == '1')
                    @if($category == 'Apartment')
                        href="{{ URL($langSeg.'/buy/off-plan/apartments-for-sale/'. $sluglink) }}"
                    @elseif($category == 'Villa')
                        href="{{ URL($langSeg.'/buy/off-plan/villas-for-sale/'. $sluglink) }}"
                    @elseif($category == 'Townhouses')
                        href="{{ URL($langSeg.'/buy/off-plan/townhouses-for-sale/'. $sluglink) }}"
                    @endif
                @elseif($type == '2')
                    @if($category == 'Apartment')
                        href="{{ URL($langSeg.'/buy/ready/apartments-for-sale/'. $sluglink) }}"
                    @elseif($category == 'Villa')
                        href="{{ URL($langSeg.'/buy/ready/villas-for-sale/'. $sluglink) }}"
                    @elseif($category == 'Townhouses')
                        href="{{ URL($langSeg.'/buy/ready/townhouses-for-sale/'. $sluglink) }}"
                    @endif
                @endif
                alt="luxe-properties-dubai-{{$titleen}}"
                aria-label="view-more-{{$sluglink}}"
            >
                <div class="flex flex-wrap grid grid-cols-3 gap-2 my-3 sm:my-2">
                    <div class="col-span-2">
                        <p class="font-thin sm:font-light text-gray-500 sm:text-gray-600 sm:text-xs">
                            {{ $location }}
                        </p>
                    </div>
                    <div>
                        <p class="font-thin sm:font-light text-gray-500 sm:text-gray-600 sm:text-xs text-right ">
                            @if($type == '1') Off Plan @elseif($type == '2') Ready @else Unlisted @endif
                        </p>
                    </div>
                </div>



                <hr class="sm:border-1 sm:border-black">

                <div class="mt-3 sm:mt-2" style="height: 60px !important;">
                    <p class=" text-md mb-2 h-full " >
                        {{ Str::limit($titleen, 60 ) }}
                    </p>
                </div>

                <div class="flex flex-wrap grid grid-cols-2 gap-2 my-2">
                    <div >
                        <p class="text-whatsapp text-sm lg:text-xs mb-2 font-semibold">
                            @if($price == 'Price On Request')
                                {{ __('Price on Request') }}
                            @else
                                AED {{ number_format($price) }}
                            @endif
                        </p>
                    </div>
                    <div class="">
                        <p class="font-light lg:text-xs mb-2 text-right  ">
                            {{$category}}
                        </p>
                    </div>
                </div>


                <div class="flex justify-between mb-4">
                    <div class="text-sm font-light">@if($bedrooms == '0') Studio @else {{$bedrooms}} Bed @endif</div>
                    <div class="text-sm font-light">{{$bathrooms}} Bath</div>
                    <div class="text-sm font-light">{{ number_format($area)}} Sq. Ft</div>
                </div>
            </a>


            <div class="flex flex-wrap grid grid-cols-2 gap-2 mb-5">
                <div>
                    <button onclick="openModal('mymodalcentered-{{$id}}')"  class="inline-block w-full  py-2 font-light  text-center  align-middle transition-all bg-transparent border border-gray-500 rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md"
                        style="font-size: .9rem !important"
                    >
                        Details
                    </button>
                </div>
                <div>
                    <a href="https://wa.me/971585602665?text=Good Day! I would like to have a consultation session on this property - {{ $titleen }}. Thank you ESNAAD Real Estate Development!"
                        aria-label="chat-on-whatsapp">
                        <button type="button" class="inline-block w-full py-2 text-white font-light  text-center  align-middle transition-all bg-transparent border border-gray-500 rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 bg-whatsapp hover:-translate-y-px active:opacity-85 hover:shadow-md"
                            style="font-size: .9rem !important"
                        >
                            WhatsApp
                        </button>
                    </a>
                </div>
            </div>

        </div>
</div>


<dialog id="mymodalcentered-{{$id}}" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-full sm:w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">{{$titleen}}</div>
                    <svg onclick="modalClose('mymodalcentered-{{$id}}')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form class="flex flex-col items-start w-full"  method="post" action="{{ route('luxe.form.new.projects.details') }}">
                    @csrf
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="property_id" name="property_id" value="{{$id}}">
                        <input type="hidden" id="country_code" name="country_code">
                        <input type="hidden" id="url" name="url" value="{{Request::url()}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>
                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>
                        <div class="mb-6">
                            <input type="tel" id="phone" name="phone" class="w-max px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        <button type="submit" class="bg-whatsapp hover:bg-whatsapp text-white font-bold py-2 px-4 rounded mr-3">
                            Register Your Interest
                        </button>
                        <button type="button" onclick="modalClose('mymodalcentered-{{$id}}')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded"   >
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</dialog>
