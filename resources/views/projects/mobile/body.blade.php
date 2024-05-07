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

<section class="max-w-8xl mx-auto px-4 py-4">
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
<div class="max-w-6xl mx-auto p-0 mt-4">
    <div class="w-full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center">
        <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[50rem] w-[100%] z-0">
            <div
                class="text-white text-xl rounded-0 absolute inset-0 bg-opacity-80 flex justify-center items-center ">
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
        <div class="row mx-auto mt-4 z-20">
            <div class="mt-[-80px] w-full mx-auto">
                <img class="object-cover m-0 p-0  z-90 text-center mx-auto border border-gray-200"
                    width="140px" height="auto"
                    src="{{asset('front/project/the-spark-by-esnaad-logo.png')}}"
                    alt="esnaad-project-card"
                    title="the-spark-by-esnaad-thumbnail}"
                    loading="lazy"
                    height="auto"
                    width="auto"
                >
            </div>
        </div>
        <div class="row w-full mx-auto mt-4 z-20">
            <div>
                <h2 class="text-xl font-bold text-center">The Spark By ESNAAD</h2>
                <p class="text-base font-thin text-center">Mohammed Bin Rashid City</p>
            </div>
        </div>
        <div class="text-center py-4 sm:py-4 w-full mt-2">
            <a href="http://esnaad.com/en/developments/the-spark-by-esnaad" title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" class="bg-white text-base text-black py-3 px-10 rounded-0"  onclick="showLoader()">
                <span id="buttonText">Explore More</span>
                <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
            </a>
        </div>
    </div>
</div>


<div class="max-w-6xl mx-auto p-0 mt-8">
    <div class="w-full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center">
        <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[50rem] w-[100%] z-0">
            <div
                class="text-white text-xl rounded-0 absolute inset-0 bg-opacity-80 flex justify-center items-center bg-black bg-opacity-70">
            </div>
            <img class="h-[100%] w-[100%] object-cover     "
            src="{{asset('front/project/proj2.jpeg')}}"
                alt="esnaad-project-card"
                title="the-spark-by-esnaad-thumbnail"
                height="300px"
                width="auto"
                loading="lazy"
            >
        </div>
        <div class="row w-full mx-auto mt-4 z-20">
            <div>
                <h2 class="text-xl font-bold text-center">Coming Soon</h2>
                <p class="text-base font-thin text-center">&nbsp;</p>
            </div>
        </div>
        <div class="text-center py-4 sm:py-4 w-full mt-2">
            <a title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" class="bg-white text-base text-black py-3 px-10 rounded-0">
                Explore More
            </a>
        </div>
    </div>
</div>
{{-- @foreach($response as $data)
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
    <x-new-project
        :id="$id"
        :name="$name"
        :namear="$namear"
        :community="$community"
        :communityar="$communityar"
        :slug="$slug"
        :thumbnail="$thumbnail"
        :logo="$logo"
        :header="$header"

    ></x-new-project>
@endforeach --}}
</section>
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
