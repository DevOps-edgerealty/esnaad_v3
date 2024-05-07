<div class="container mx-0 px-4 mt-10 mx-auto">

    {{-- <h2 class="text-esnaad_text text-justify  my-8 text-2xl leading-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        accumsan dictum.
    </h2> --}}


    <div class="text-justify text-base my-4 w-full leading-8">
        @if($langSeg === 'ar')
            {!! $descriptionar !!}
        @else
            {!! $description !!}
        @endif
    </div>

</div>

