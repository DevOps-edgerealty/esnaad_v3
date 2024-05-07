{{-- Desktop View --}}
<div class="container px-0 px-4 mx-auto" @if($langSeg == 'ar') dir="rtl" @endif>
    <div class="mt-10 mb-10">
        <h3 class="text-xl xl:text-3xl font-thin text-center">

            {{ __('frontend.homeSectionThreeH') }}

        </h3>
    </div>
    <div class="row">
        <div class="grid grid-cols-5 gap-12 mb-5 mx-auto">

            <div class="col-span-2 w-full overflow-hidden flex flex-col justify-center items-center ">
                <div class="relative overflow-hidden max-h-[24rem] ">
                    <a href="http://esnaad.com/en/developments/the-spark-by-esnaad" title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" height="auto" width="auto" loading="lazy">
                    <div
                        class="text-white text-7xl absolute inset-0  flex justify-center items-center shadow ">
                        {{-- <span class="drop-shadow">{{ __('frontend.homeSectionThreeImage') }}</span> --}}
                    </div>
                    <img class=" w-full object-cover "
                        src="{{ asset('home/project/2.webp')}}"
                        alt="esnaad-project-coming-soon"
                        title="COMING-SOON"
                        height="auto"
                        width="auto"
                        loading="lazy"
                        style="width: 100% !important;"
                    >
                </a>
                </div>
            </div>
            <div class="col-span-3 my-auto">
                <h2 class=" text-xl xl:text-4xl">
                </h2>
                <h3 class="text-xl mt-10 text-justify leading-8">
                    {{ __('frontend.homeSectionThreeP') }}
                </h3>
                <div class="text-left py-4 sm:py-4 w-full">
                    <a href="http://esnaad.com/en/developments/the-spark-by-esnaad" title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" id="exploreButton" class="bg-white text-base text-black py-3 px-10 rounded-0 mb-3" onclick="showLoader()">
                        <span id="buttonText">Explore More</span>
                        <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
                    </a>
                </div>

                {{-- <p class="text-base mt-2 text-justify leading-8">
                    {{ __('frontend.homeSectionThreeP2') }}
                </p> --}}
            </div>
        </div>
    </div>

</div>

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


