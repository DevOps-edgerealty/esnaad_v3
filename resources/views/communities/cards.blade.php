<?php
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    $seg1 = $uri_segments[1];
    if($seg1 == 'en' || $seg1 == 'ar'){
        $langSeg = $uri_segments[1];
    }else{
        $langSeg = 'en';
    }
?>

{{-- Desktop View --}}
<div class="container mx-auto md:px-4 ">
    <section class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-4 mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6">

            {{-- @foreach($response as $data)             --}}
                {{-- <?php
                    $id = $data['id'];
                    $name = $data['title'];
                    $namear = $data['title_ar'];
                    $address = $data['address'];
                    $addressar = $data['address_ar'];
                    $slug = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?> --}}
                <div class="full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center shadow">
                    <div class="relative overflow-hidden rounded-0 ">
                        {{--
                        <p
                            class="text-white text-xl rounded-0 absolute inset-0  bg-gray-950/80 flex justify-center items-center">
                            COMING SOON
                        </p>
                        --}}

                        <img class="h-full w-full object-cover "
                            {{-- src="https://mis.esnaad.com/uploads/communities/{{$id}}/thumbnail/{{$thumbnail}}" --}}
                            src="{{asset('front/communities/1.png')}}"
                            alt="esnaad-community"
                            title="esnaad-community"
                            height="auto"
                            width="100%"
                            loading="lazy"
                        >
                    </div>
                    <div class="text-center py-8 sm:py-6">
                        {{-- <p class="text-xl  font-bold mb-2">
                            @if($langSeg === 'ar')
                                {{$namear}}
                            @else
                                {{$name}}
                            @endif
                        </p>
                        <p class="text-base  font-normal">
                            @if($langSeg === 'ar')
                                {{$addressar}}
                            @else
                                {{$address}}
                            @endif
                        </p> --}}

                        <div class="text-center py-4 sm:py-4 w-full mt-2">
                            <a href="https://www.esnaad.com/en/communities/mohammed-bin-rashid-city" class="bg-white text-base text-black py-3 px-10 rounded-0"  onclick="showLoader()">

                                <span id="buttonText"> {{ __('frontend.exploreMore')}}</span>
                                <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
                            </a>
                        </div>
                    </div>

                </div>
            {{-- @endforeach --}}
        </div>
    </section>
</div>
<script>
    function showLoader() {
        // Hide the button text
        document.getElementById('buttonText').style.display = 'none';
        // Show the loader image
        document.getElementById('loaderImg').style.display = 'inline';

        // Wait for 2 seconds and then navigate to the next page
        setTimeout(function() {
            window.location.href = 'https://www.esnaad.com/en/communities/mohammed-bin-rashid-city'; // URL of the next page
        }, 500);
    }
</script>
