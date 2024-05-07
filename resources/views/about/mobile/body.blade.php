@php
    $shortenedText = Str::limit(__('frontend.aboutLegacy'), 500, '...');
@endphp


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>



<div class="container mx-auto  px-4 m-0 mt-8 mb-0">
    <div class="row">
        <div class="grid md:grid-cols-1 mx-auto">
            <div class="paragraph-container">
                <p id="mobileAboutP" class="leading-6 text-base text-justify" >{{$shortenedText }}</p>
                <button class="mt-2 underline" id="read-more-btn-about-mobile" data-full-text="{{ __('frontend.aboutLegacy') }}">Read More</button>
            </div>
        </div>
    </div>

    {{-- <div class="row my-8 p-0">
            <img src="{{ asset('home/home-decor-1.jpg')}}">
        </div> --}}
</div>




<div class="w-full px-4 mx-auto">
    <div class="sm:container pt-0 sm:mx-auto mx-0 mt-4 sm:mb-4 mx-auto">

        <div class="space-y-2">
            <div
                class="group flex flex-col gap-2 rounded-0 "
                tabindex="3" @if($langSeg == 'ar') dir="rtl" @endif
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                    {{-- <img src="{{asset('front/icons/values.png')}}" title="ESNAAD CORE VALUES" alt="ESNAAD CORE VALUES" height="auto" width="auto" loading="eager" style="height: 32px"> --}}

                    <h3 class="text-xl font-thin text-left leading-6 py-4">
                        {{__('frontend.aboutH1')}}
                    </h3>
                    <img
                        src="https://demo.esnaad.com/public/home/down-arrow.png"
                        class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                    />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 text-justify"
                >
                    {{__('frontend.aboutP1')}}
                </div>
            </div>

            <div
                class="group flex flex-col gap-2 rounded-0 "
                tabindex="1" @if($langSeg == 'ar') dir="rtl" @endif
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                    {{-- <img src="{{asset('front/icons/mission.png')}}" title="ESNAAD CORE VALUES" alt="ESNAAD CORE VALUES" height="auto" width="auto" loading="eager" style="height: 32px"> --}}

                    <h3 class="text-xl font-thin text-left leading-6 py-4">
                        {{__('frontend.aboutH2')}}
                    </h3>
                    <img
                        src="https://demo.esnaad.com/public/home/down-arrow.png"
                        class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                    />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 text-justify"
                >
                    {{__('frontend.aboutP2')}}
                </div>
            </div>

            <div
                class="group flex flex-col gap-2 rounded-0 "
                tabindex="2" @if($langSeg == 'ar') dir="rtl" @endif
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                    {{-- <img src="{{asset('front/icons/vision.png')}}" title="ESNAAD CORE VALUES" alt="ESNAAD CORE VALUES" height="auto" width="auto" loading="eager" style="height: 32px"> --}}

                    <h3 class="text-xl font-thin text-left leading-6 py-4">
                        {{__('frontend.aboutH3')}}
                    </h3>
                    <img
                        src="https://demo.esnaad.com/public/home/down-arrow.png"
                        class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                    />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 text-justify"
                >
                    {{__('frontend.aboutP3')}}
                </div>
            </div>
        </div>


    </div>
</div>



<script>
    $(document).ready(function() {
        $('#read-more-btn-about-mobile').click(function() {
            var fullText = $(this).data('full-text');
            $('#mobileAboutP').text(fullText);
            $(this).hide();
        });
    });


    const moreTextEl = document.getElementById('more-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });
</script>