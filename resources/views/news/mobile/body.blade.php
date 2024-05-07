
<div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto" >
    <div class="grid xl:grid-cols-3- lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5" >

            <div class="">
                <div class="mx-auto px-0 ">
                    <div class="max-w-full cursor-pointer rounded-0 border shadow">
                        <div class="row">
                            <img class="w-full rounded-0 object-cover object-center" src="{{ asset('developments/12.webp')}}"
                                height="400px"
                                width="auto"
                                loading="lazy"
                                style="height: 400px !important;"
                                alt="ESNAAD Press Release - The Spark by ESNAAD"
                            />
                        </div>
                        <div class="row">
                            <div>
                                <p class="mt-4 pl-4 text-2xl text-center font-thin">
                                    ESNAAD Unveils "The Spark by ESNAAD": A Beacon of Innovation
                                </p>
                            </div>
                        </div>
                        <div class="row text-center pb-5 pt-2 mt-3">
                            <a href="https://esnaad.com/en/press-release/esnaad-unveils-the-spark-by-esnaad-a-beacon-of-innovation"
                                class="bg-white text-black px-15 py-3"  onclick="showLoader()">
                                <span id="buttonText">Explore More</span>
                                <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
                            </a>
                        </div>
                    </div>
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
            window.location.href = 'https://esnaad.com/en/press-release/esnaad-unveils-the-spark-by-esnaad-a-beacon-of-innovation'; // URL of the next page
        }, 500);
    }
</script>
