{{-- Desktop View --}}
<div class="container mx-auto px-4 mx-0 px-0 sm:px-4 mt-10 mb-5 sm:mt-5 sm:mb-2 mx-auto">
    <div class="row">
        <div class="grid md:grid-cols-2 gap-12 mx-auto">
            <div>
                <h2 class="text-left text-xl">
                    {{ __('frontend.homeSectionThreeH') }}
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 mx-0 px-0 sm:px-4 mb-5 sm:mt-5 sm:mb-2 mx-auto">
    <div class="relative overflow-hidden max-h-[24rem] ">
        <div
            class="text-white text-5xl absolute inset-0 flex justify-center items-center">
            {{-- {{ __('frontend.homeSectionThreeImage') }} --}}
        </div>
        <img class="max-h-[24rem] w-full object-cover "
        src="{{ asset('home/project/2.webp')}}"
        alt="esnaad-project-card">
    </div>
</div>


<div class="container mx-auto px-4 mx-0 px-0 mt-5  mx-auto">
    <div class="row mb-4">
        <div class="grid md:grid-cols-2 gap-2 mx-auto">
            <div>
                <p class="text-base text-left leading-relax leading-6">
                    {{ __('frontend.homeSectionThreeP') }}
                </p>

            </div>

            <div class="text-center py-4 sm:py-4 w-full mt-2">
                <a href="http://esnaad.com/en/developments/the-spark-by-esnaad" title="THE SPARK BY ESNAAD" alt="THE SPARK BY ESNAAD" class="bg-white text-base text-black py-3 px-10 rounded-0" onclick="showLoader()">
                    <span id="buttonText">Explore More</span>
                    <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
                </a>
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


