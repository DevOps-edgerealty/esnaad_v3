@if($project_video != null)

<div class="bg-footer mx-0 py-8 mt-4 mx-auto">
    <div class="mx-0 px-0 mx-auto w-full pb-4">
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

</div>



<div class="mx-0 px-0 mt-4 mb-0 mx-auto w-full ">
    <div class="row px-4 grid xl:grid-cols-2 gap-0 h-[100%] w-[100%]">
        <div class="">
            <p class=" text-justify font-sm xl:font-base my-4 xl:w-[90%]">
                @if($langSeg == 'ar')
                    {{ \Illuminate\Support\Str::limit($SecThree_description_ar, $limit = 150, $end='') }}
                @else
                    {{ \Illuminate\Support\Str::limit($SecThree_description_ar, $limit = 150, $end='') }}
                @endif

                <span class="hidden" id="more-text">
                @if($langSeg == 'ar')
                    {{ preg_replace('/^\s+/', '', substr($SecThree_description, 149)) }}
                @else
                    {{ preg_replace('/^\s+/', '', substr($SecThree_description, 149)) }}
                    
                @endif
                </span>
                <button id="toggle-btn" class=" text-black focus:outline-none underline">Read More...</button>
                <button id="hide-btn" class="hidden text-black focus:outline-none underline">Hide...</button>
            </p>
        </div>
    </div>
</div>
@endif

<script>
    const moreTextEl2 = document.getElementById('more-text');
    const toggleBtnEl2 = document.getElementById('toggle-btn');
    const hideBtnEl2 = document.getElementById('hide-btn');

    toggleBtnEl2.addEventListener('click', () => {
        moreTextEl2.classList.toggle('hidden');
        toggleBtnEl2.classList.toggle('hidden');
        hideBtnEl2.classList.toggle('hidden');
    });

    hideBtnEl2.addEventListener('click', () => {
        moreTextEl2.classList.toggle('hidden');
        toggleBtnEl2.classList.toggle('hidden');
        hideBtnEl2.classList.toggle('hidden');
    });
</script>
