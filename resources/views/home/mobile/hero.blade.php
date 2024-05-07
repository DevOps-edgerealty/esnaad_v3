

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
            height: 400px;
            position: relative;
            overflow: hidden;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 7vh;
        }

</style>

{{-- Mobile View --}}
<div class="video-wrapper bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full ">
    <div class="relative isolate  h-full flex flex-1 flex-col justify-between">
        
        <video playsinline autoplay muted loop poster="/developments/6.webp">
            <source src="{{ asset('home/HERO.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>
