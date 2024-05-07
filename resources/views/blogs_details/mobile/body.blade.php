
<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    
    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class="container mx-auto flex flex-col items-start ">
            
            <div class="mt-20 px-4 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
                <div class="w-full">
                    <div class="space-y-10">
                        <div>
                            <div class="flex items-center overflow-x-auto whitespace-nowrap" @if($langSeg == 'ar')  dir="rtl" @endif>
                                <a href="{{ url('/en/blogs') }}" class="text-sm">
                                    {{__('frontend.mobile_media')}}   
                                </a>
                                <span class="mx-2 text-xs">
                                    /
                                </span> 
                                <a href="{{ url('/en/blogs') }}" class="text-sm">
                                    {{__('frontend.mobile_blogs')}}
                                </a>
                                <span class="mx-2 text-xs">
                                    /
                                </span> 
                                <p class="text-xs">
                                    @if($langSeg == 'ar')
                                        {{$titlear}}
                                    @else
                                        {{$title}}
                                    @endif
                                </p>
                            </div>

                            <h1 class="text-2xl mb-2 mt-4" @if($langSeg == 'ar') dir="rtl" @endif>
                                @if($langSeg == 'ar')
                                    {{$titlear}}
                                @else
                                    {{$title}}
                                @endif
                            </h1>

                            <div class="grid grid-cols-2 mt-2 gap-4 place-content-between" @if($langSeg == 'ar') dir="rtl" @endif>
                                <div class="">
                                    <p class="text-sm mb-2">Published {{\Carbon\Carbon::parse($created_at)->format('j F, Y')}}</p>
                                </div>
                                <div class="@if($langSeg == 'ar') text-left @else text-right @endif">
                                    <div class="inline-flex @if($langSeg == 'ar')  float-left text-left @else  float-right text-right @endif">
                                        @include('blogs_details.mobile.buttons')
                                    </div>
                                </div>
                            </div>

                            <img src="{{ URL("https://mis.esnaad.com/uploads/blogs/".$id."/header_image/".$header_image)}}" alt="Ensaad-news-article-{{$title}}" class="object-cover w-full h-56 mb-6 rounded-0 shadow-md sm:h-80 2xl:h-96">                          
                            
                            
                            @if($langSeg == 'ar')
                                {!! $descriptionar !!}
                            @else
                                {!! $description !!}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
