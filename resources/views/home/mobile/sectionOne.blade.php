@php
    $shortenedText = Str::limit(__('frontend.homeSectionOneP1'), 500, '...');
@endphp

<div class="container mx-auto  px-4 m-0 mt-4 mb-0">
    <div class="row">
        <div class="grid md:grid-cols-1 mx-auto">
            <div>
                <h1 class="py-2 font-base text-xl">{{__('frontend.homeSectionOneH')}}</h1>
                <div class="paragraph-container">
                    <p id="mobileAboutP" class="leading-6 text-base text-justify" >{{$shortenedText }}</p>
                    <p id="mobileAboutP2" class="leading-6 text-base text-justify mt-5" ></p>
                    <p id="mobileAboutP3" class="leading-6 text-base text-justify mt-5" ></p>
                    <button class="mt-2 underline" id="read-more-btn-about-mobile" data-full-text="{{ __('frontend.homeSectionOneP1') }}" data-full-text2="{{ __('frontend.homeSectionOneP2') }}" data-full-text3="{{ __('frontend.homeSectionOneP3') }}">Read More</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto  px-0 m-0 mt-4 mb-0">
    <div class="row mt-8 p-0">
        <img src="{{ asset('home/project/12-1.webp')}}">
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

<script>
    $(document).ready(function() {
        $('#read-more-btn-about-mobile').click(function() {
            var fullText = $(this).data('full-text');
            var fullText2 = $(this).data('full-text2');
            var fullText3 = $(this).data('full-text3');
            $('#mobileAboutP').text(fullText);
            $('#mobileAboutP2').text(fullText2);
            $('#mobileAboutP3').text(fullText3);
            $(this).hide();
        });
    });
</script>