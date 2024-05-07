@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 my-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mx-4 mb-5">

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
                    <div class="mx-auto px-0 mb-4">
                        <div class="max-w-full cursor-pointer rounded-0 shadow border">
                            <div class="row">
                                <img class="w-full rounded-0 object-cover object-center" src="https://www.mis.esnaad.com/uploads/gallery/{{$id}}/thumbnail/{{$thumbnail}}"
                                    height="250px"
                                    width="auto"
                                    loading="lazy"
                                    style="height: 250px !important;"
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
                                <a href="{{ URL($langSeg.'/media-gallery/'.$sluglink) }}" 
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
