<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto">

    {{-- <h2 class="text-esnaad_text text-justify font-light my-8 text-xl">
        @if($langSeg === 'ar')
            {!! $descriptionar !!}
        @else
            {!! $description !!}
        @endif
    </h2> --}}


    <div class="text-base text-justify font-light my-8 w-full leading-8">
        @if($langSeg === 'ar')
            {!! $descriptionar !!}
        @else
            {!! $description !!}
        @endif
    </div>

</div>

