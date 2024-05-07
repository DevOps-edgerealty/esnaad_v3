
<div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl mt-8 ">
    <div class="container mx-auto flex flex-col items-start md:flex- min-h-[7vh]">
        <div class="mb-4 w-[30vw] flex justify-center space-x-4 p-0 rounded-lg gap-6 mx-auto">
            <a href="{{ url('/en/press-release')}}" class=" text-xl font-light  transition duration-150 ease-out hover:ease-in">
                {{ __('frontend.mediaH2') }}
            </a>
            <a href="{{ url('/en/blogs')}}" class=" text-xl font-light underline underline-offset-4">
                {{ __('frontend.mediaH3') }}
            </a>
            <a href="{{ url('/en/media-gallery')}}" class=" text-xl font-light transition duration-150 ease-out hover:ease-in">
                {{ __('frontend.mediaH4') }}
            </a>
        </div>

    </div>
</div>



@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-3- lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $sluglink = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                    $created_at = $data['created_at'];
                ?>
                <div class="">
                    <div class="mx-auto px-0 ">
                        <div class="max-w-full cursor-pointer rounded-0 border p-0 shadow">
                            <div class="row">
                                <img class="w-full rounded-0 object-cover object-center" src="https://www.mis.esnaad.com/uploads/blogs/{{$id}}/thumbnail/{{$thumbnail}}"
                                    height="400px"
                                    width="auto"
                                    loading="lazy"
                                    style="height: 400px !important;"
                                    alt="ESNAAD Media Unit - Gallery - {{$title}}"
                                />
                            </div>
                            <div class="row">
                                <div>
                                    <p class="mt-4 pl-4 text-2xl text-center font-thin">
                                        @if($langSeg == 'ar')
                                            {{$titlear}}
                                        @else
                                            {{$title}}
                                        @endif
                                    </p>
                                    <p class="mb-4 ml-4 font-thin text-center text-sm">
                                        {{ date('jS F Y', strtotime($created_at)) }}
                                    </p>
                                </div>
                            </div>
                            <div class="row text-center pb-5 pt-2">
                                <a href="{{ URL($langSeg.'/blogs/'.$sluglink) }}" 
                                    class="bg-white text-black px-15 py-3">
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
