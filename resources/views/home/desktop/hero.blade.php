
<style>
    video {
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;

    }
    .video-wrapper {
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow: hidden;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body {
    background: black;
    }

    .component-header__arrow-down {
        animation: bounce 1.5s infinite;
    }
    @keyframes bounce {
        0% {
            transform: translateY(-15px);
        }
        50% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-15px);
        }
    }
</style>

<section class="video-wrapper hero bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[70vh] " data-v-6d98d5bc="">
    <video id="hero-video" name="ESNAAD" playsinline preload="auto" autoplay muted loop poster="/developments/6.avif" class="mt-[5rem] absolute z-[1] w-auto min-w-full min-h-full max-w-none" data-setup="{"autoplay":"any"}">
        <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <div class="absolute top-0 right-0 bottom-0 left-0 bg-backdrop z-[2] bg-black bg-opacity-60" data-v-6d98d5bc=""></div>
    <div class="absolute flex flex-col items-center z-[3] mobile:px-4" data-v-6d98d5bc="">
        <div class="info flex justify-center items-center flex-col text-white mt-[60px] p-0 mobile:p-2" data-v-6d98d5bc="">
            <h1 class="text-3xl title-font-thin mobile:text-60p ltr:leading-none" data-v-6d98d5bc="">{{__('frontend.heroH')}}</h1>
        </div>
    </div>

    <a href="#component_home_section_one"  id="scrollToSection" class="component-header__arrow-down absolute bottom-[10px] text-white z-[3]" data-v-6d98d5bc=""  style="cursor:pointer !important">
        <img src="{{asset('arrow-down.png')}}" id="component_header_arrow_down" height="auto" width="auto" style="height:50px !important; width: auto;" alt="esnaad-view-more" title="View More" loading="eager"/>
    </a>  
</section>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

<script>
    $(document).ready(function() {
        $('#scrollToSection').on('click', function (e) {
            e.preventDefault();

            // Get the target section
            var targetSection = $($(this).attr('href'));

            // Check if the target section exists
            if (targetSection.length) {
                var screenHeight = $(window).height();
                var targetScrollPosition = targetSection.offset().top - (0.1 * screenHeight);

                // Scroll to the target position
                $('html, body').animate({ scrollTop: targetScrollPosition }, 1000, 'linear');
            }
        });
    });
</script>