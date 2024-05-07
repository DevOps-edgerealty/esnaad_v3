<div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto mt-5" >
    <div class="grid xl:grid-cols-3- lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5" >

            <div class="">
                <div class="mx-auto px-0 ">
                    <div class="max-w-full cursor-pointer rounded-0 border shadow">
                        <div class="row">
                            <img class="w-full rounded-0 object-cover object-center" src="{{ asset('developments/KmcFHmUUEyPwQ1x5qMoUZiXxmuMZwXQJ9tD2tRc7.webp')}}"
                                height="400px"
                                width="auto"
                                loading="lazy"
                                style="height: 400px !important;"
                                alt="ESNAAD Media Unit - Gallery - The Spark"
                            />
                        </div>
                        <div class="row">
                            <div>
                                <p class="mt-4 pl-4 text-2xl text-center font-thin">
                                    The Spark By ESNAAD
                                </p>
                            </div>
                        </div>
                        <div class="row text-center pb-5 pt-2 mt-3">
                            <a href="https://esnaad.com/en/media-gallery/the-spark-by-esnaad"
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
            window.location.href = 'https://esnaad.com/en/media-gallery/the-spark-by-esnaad'; // URL of the next page
        }, 500);
    }
</script>
