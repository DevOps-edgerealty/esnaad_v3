@if($project_video != null)
<div class="mx-0 px-4 mx-auto w-full pb-4">
    <div class="row-span-2 grid xl:grid-cols-2 gap-4 h-[100%] w-[100%]">
        <div>
            {{-- <iframe width="100%" style="margin:0;" src="{{ asset('videos/project-details.mp4') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            <video width="100%" height="auto" autoplay="autoplay" muted loop>
                <source src="{{ asset('videos/project-details.mp4') }}" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

        </div>
    </div>
</div>
@endif