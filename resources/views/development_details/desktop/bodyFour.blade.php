
@section('developments_gallery_head')
    <!-- Link to the file hosted on your server, -->
    <link rel="stylesheet" href="{{ asset('splide/dist/css/splide.min.css')}}">

@endsection
<style>
    .thumbnails {
        display: flex;
        margin: 1rem auto 0;
        padding: 0;
        justify-content: center;
    }


    .thumbnail {
        width: 150px;
        height: 150px;
        overflow: hidden;
        list-style: none;
        margin: 0 0.2rem;
        cursor: pointer;
    }

    .thumbnail img {
        width: 100%;
        height: auto;
    }
</style>

<section id="main-carousel" class="splide" aria-label="The Spark by ESNAAD Gallery">
    <div class="splide__track">
        <ul class="splide__list gap-2">
            @foreach($images as $image)
                <li class="splide__slide ">
                    <img src="{{ url('https://mis.esnaad.com/uploads/projects/images/'.$project_image_id.'/'.$image['name']) }}" style="height: auto !important;" alt="{{$name}}-{{$image['id']}}" width="100%" height="auto" loading="lazy" >
                </li>
            @endforeach
        </ul>
    </div>
</section>


<ul id="thumbnails" class="thumbnails">
    @foreach($images as $image)
        <li class="thumbnail">
            <img src="{{ url('https://mis.esnaad.com/uploads/projects/images/'.$project_image_id.'/'.$image['name']) }}" alt="{{$name}}-{{$image['id']}}" width="100%" height="auto" loading="lazy" >
        </li>
    @endforeach
</ul>



<div class="sm:container sm:mx-auto mx-0 px-4 xl:my-20 sm:my-4 mx-auto">
    <div class="row-span-2 grid sm:grid-cols-2 gap-4 h-[100%] w-[100%]" @if($langSeg == 'ar') dir="rtl" @endif>
        <div>
            <h2 class=" text-justify font-base my-8 text-2xl xl:text-2xl w-[90%]">
                @if($langSeg == 'ar')
                    {{$secTwo_title_ar}}
                @else
                    {{$secTwo_title}}
                @endif
            </h2>
            <p class=" text-justify font-base my-8 w-[90%] leading-8">
                @if($langSeg == 'ar')
                    {{$SecTwo_description_ar}}
                @else
                    {{$SecTwo_description }}
                @endif
            </p>
        </div>
        <div class=" text-justify font-light m-8 w-full">
            <div class="row w-[100%] h-[30%] mb-8">
                @if($langSeg == 'ar')
                    {!! $SecTwo_amenities_ar !!}
                @else
                    {!! $SecTwo_amenities !!}
                @endif
            </div>
        </div>
    </div>
</div>


@section('developments_gallery_js')

<script src="{{ asset('splide/dist/js/splide.min.js')}}"></script>

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '#main-carousel', {
        pagination: false,
        perPage: 2,

    } );


    var thumbnails = document.getElementsByClassName( 'thumbnail' );
    var current;


    for ( var i = 0; i < thumbnails.length; i++ ) {
    initThumbnail( thumbnails[ i ], i );
    }


    function initThumbnail( thumbnail, index ) {
    thumbnail.addEventListener( 'click', function () {
        splide.go( index );
    } );
    }


    splide.on( 'mounted move', function () {
    var thumbnail = thumbnails[ splide.index ];


    if ( thumbnail ) {
        if ( current ) {
        current.classList.remove( 'is-active' );
        }


        thumbnail.classList.add( 'is-active' );
        current = thumbnail;
    }
    } );


    splide.mount();
  } );
</script>
@endsection

