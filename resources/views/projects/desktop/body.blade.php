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



<header class="">
    <div class="w-full bg-cover bg-center" >
        <div class="flex items-center justify-center h-full w-full" >
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-black">

                <section class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-4 py-12">

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6" @if($langSeg == 'ar') dir="rtl" @endif>
                        <div>
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
                            <div class="max-w-6xl mx-auto p-0">
                                    <div class="w-full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center">
                                        <div class="relative overflow-hidden rounded-0 lg:h-[22rem] max-h-[50rem] w-[100%] z-0">
                                            <div
                                                class="text-white text-xl rounded-0 absolute inset-0 flex justify-center items-center ">
                                            </div>

                                            <img class="h-[100%] w-[100%] object-cover     "
                                                src="{{asset('front/project/the-spark-by-esnaad-thumbnail.jpg')}}"
                                                alt="esnaad-project-card"
                                                title="the-spark-by-esnaad-thumbnail"
                                                height="300px"
                                                width="auto"
                                                loading="lazy"
                                            >
                                        </div>
                                        <div class="row w-full grid grid-cols-5 mt-4 z-20">
                                            <div class="col-span-2 mt-[-70px] w-full mx-auto">
                                                <img class="object-cover m-0 p-0  z-90 text-center mx-auto border border-gray-200"
                                                    width="180px" height="auto"
                                                    src="{{asset('front/project/the-spark-by-esnaad-logo.png')}}"
                                                    alt="esnaad-project-card"
                                                    title="the-spark-by-esnaad-thumbnail"
                                                    loading="lazy"
                                                    height="auto"
                                                    width="auto"
                                                >
                                            </div>
                                            <div class="col-span-3 my-4" style="color: #ccc !important; background-color: #1c1c1c !important;">
                                                <h2 class="text-xl font-bold text-left">The Spark By ESNAAD</h2>
                                                <p class="text-base font-thin text-left">Mohammed Bin Rashid City</p>
                                                {{-- <h2 class="text-xl font-bold text-left">@if($langSeg == 'ar'){{$namear}}@else {{$name}} @endif</h2>
                                                <p class="text-base font-thin text-left">@if($langSeg == 'ar'){{$community}}@else {{$community}} @endif</p> --}}
                                            </div>
                                        </div>
                                        <div class="text-center py-4 sm:py-4 w-full mb-4">
                                            <a href="http://esnaad.com/en/developments/the-spark-by-esnaad" title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" class="bg-white text-base text-black py-3 px-10 rounded-0 mb-3"  onclick="showLoader()">
                                                <span id="buttonText">Explore More</span>
                                                <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div>
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
                            <div class="max-w-6xl mx-auto p-0">
                                    <div class="w-full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center">
                                        <div class="relative overflow-hidden rounded-0 lg:h-[22rem] max-h-[50rem] w-[100%] z-0 bg-black bg-opacity-60">
                                            <div
                                                class="text-white text-xl rounded-0 absolute inset-0 flex justify-center items-center bg-black bg-opacity-80">
                                            </div>

                                            <img class="h-[100%] w-[100%] object-cover  bg-black bg-opacity-60   "
                                                src="{{asset('front/project/proj2.jpeg')}}"
                                                alt="esnaad-project-card"
                                                title="the-spark-by-esnaad-thumbnail"
                                                height="300px"
                                                width="auto"
                                                loading="lazy"
                                            >
                                        </div>
                                        <div class="row w-full grid grid-cols-5 mt-4 z-20">
                                            <div class="col-span-2 mt-[-70px] w-full mx-auto ">
                                                {{-- <img class="object-cover m-0 p-0  z-90 text-center mx-auto border border-gray-200"
                                                    width="180px" height="auto"
                                                    src="{{asset('front/project/the-spark-by-esnaad-logo.png')}}"
                                                    alt="esnaad-project-card"
                                                    title="the-spark-by-esnaad-thumbnail"
                                                    loading="lazy"
                                                    height="auto"
                                                    width="auto"
                                                > --}}
                                            </div>
                                            <div class="col-span-3 my-4" style="color: #ccc !important; background-color: #1c1c1c !important;">
                                                <h2 class="text-xl font-bold text-left">Coming Soon</h2>
                                                <p class="text-base font-thin text-left">&nbsp;</p>
                                                {{-- <h2 class="text-xl font-bold text-left">@if($langSeg == 'ar'){{$namear}}@else {{$name}} @endif</h2>
                                                <p class="text-base font-thin text-left">@if($langSeg == 'ar'){{$community}}@else {{$community}} @endif</p> --}}
                                            </div>
                                        </div>
                                        <div class="text-center py-4 sm:py-4 w-full mb-4">
                                            <a title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" class="bg-white text-base text-black py-3 px-10 rounded-0 mb-3" >
                                                Explore More
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>

                    {{-- <div>
                        @if($available == '1')
                        @foreach($response as $data)
                            <?php
                                $id = $data['id'];
                                $name = $data['name'];
                                $namear = $data['name_ar'];
                                $community = $data['community'];
                                $communityar = $data['community_ar'];
                                $slug = $data['slug_link'];
                                $thumbnail = $data['thumbnail'];
                                $logo = $data['logo'];
                                $header = $data['header'];
                            ?>
                            <x-new-project-desktop
                                :id="$id"
                                :name="$name"
                                :namear="$namear"
                                :community="$community"
                                :communityar="$communityar"
                                :slug="$slug"
                                :thumbnail="$thumbnail"
                                :logo="$logo"
                                :header="$header"
                            ></x-new-project-desktop>
                        @endforeach
                        @endif
                    </div> --}}
                    </div>
                </section>

            </div>
        </div>
    </div>
</header>
<script>
    function showLoader() {
        // Hide the button text
        document.getElementById('buttonText').style.display = 'none';
        // Show the loader image
        document.getElementById('loaderImg').style.display = 'inline';

        // Wait for 2 seconds and then navigate to the next page
        setTimeout(function() {
            window.location.href = 'http://esnaad.com/en/developments/the-spark-by-esnaad'; // URL of the next page
        }, 500);
    }
</script>
