
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
</style>


<!-- <div class="video-wrapper bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[70vh] ">
    <div class="relative isolate  h-full flex flex-1 flex-col justify-between">
        <div></div>
        <video name="ESNAAD" playsinline preload="auto" autoplay muted loop poster="/developments/6.avif" class="mt-[5rem]" data-setup="{"autoplay":"any"}">
            <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div> -->

<section class="video-wrapper hero bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[70vh] " data-v-6d98d5bc="">
  <video id="hero-video" name="ESNAAD" playsinline preload="auto" autoplay muted loop poster="/developments/6.avif" class="mt-[5rem] absolute z-[1] w-auto min-w-full min-h-full max-w-none" data-setup="{"autoplay":"any"}">
      <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
  </video>
  <div class="absolute top-0 right-0 bottom-0 left-0 bg-backdrop z-[2] bg-black bg-opacity-60" data-v-6d98d5bc=""></div>
    <div class="absolute flex flex-col items-center z-[3] mobile:px-4" data-v-6d98d5bc="">
      <div class="info flex justify-center items-center flex-col text-white mt-[60px] p-0 mobile:p-2" data-v-6d98d5bc="">
        <h1 class="text-2xl title-font-thin mobile:text-60p ltr:leading-none" data-v-6d98d5bc="">A team of innovators and builders pioneering progressive forms of large-scale urban development</h1>
      </div>
    </div>
  </div>
</section>  