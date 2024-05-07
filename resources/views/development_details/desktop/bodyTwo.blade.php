@if($project_video != null)
<div class="sm:container sm:mx-auto mx-0 px-4 my-20 sm:my-4 mx-auto  xl:h-[50vh]">
    <div class="row-span-2 @if($project_video != null) grid xl:grid-cols-2 @endif gap-4 h-[100%] w-[100%]"  @if($langSeg == 'ar') dir="rtl" @endif>
        <div>
            {{-- <video height="100%" width="100%" controls autoplay>
                <source src="{{ URL::asset('pulbic/front/videos/test.mp4') }}" type="video/mp4">
                <source src="{{ URL::asset('pulbic/front/videos/test.mp4') }}" type="video/ogg">
                Your browser does not suppor    t the video tag.
            </video> --}}
            <iframe height="100%" width="100%" class="h-[30vh] md:h-[50vh] xl:h-[50vh]" src="https://www.youtube.com/embed/ef2o1-VpoSc?si=KmbSbrKHYHuw-YPz&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="xl:m-10">
            <h2 class=" text-justify font-base text-xl xl:text-2xl xl:w-[90%]">
                @if($langSeg == 'ar')
                    {{$secThree_title_ar}}
                @else
                    {{$secThree_title}}
                @endif
            </h2>
            <p class=" text-justify font-sm xl:font-base my-8 xl:w-[90%] leading-8">
                @if($langSeg == 'ar')
                    {{$SecThree_description}}
                @else
                    {{$SecThree_description_ar }}
                @endif
            </p>
        </div>
    </div>
</div>
 @endif