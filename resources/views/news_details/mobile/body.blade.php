
<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    
    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class="container mx-auto flex flex-col items-start mt-[8vh]">
            
            <div class="mt-8 px-4 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
                <div class="w-full">
                    <div class="space-y-10">
                        <div>

                            

                            <div class="flex items-center overflow-x-auto whitespace-nowrap">
                                <a href="/news" class="text-sm ">
                                    News
                                </a>
                                <span class="mx-2 text-sm ">
                                    /
                                </span> 
                                <p class="text-sm capitalize ">
                                    {{ $title }}
                                </p>
                            </div>

                            <h1 class="text-2xl font-bold mt-2">
                                {{$title}}
                            </h1>

                            <div class="grid grid-cols-2 mt-2 gap-4 place-content-between">
                                <div class="">
                                    <p class="text-sm mb-2">Published {{\Carbon\Carbon::parse($created_at)->format('j F, Y')}}</p>
                                </div>
                                <div class="text-right">
                                    <div class="inline-flex float-right text-right">
                                        @include('news_details.mobile.buttons')
                                    </div>
                                </div>
                            </div>

                            <img src="{{ URL("https://mis.esnaad.com/uploads/news/".$id."/header_image/".$header_image)}}" alt="Ensaad-news-article-{{$title}}" class="object-cover w-full h-56 mb-6 rounded-0 shadow-md sm:h-80 2xl:h-[60vh]" onerror="this.onerror=null;this.src='https://www.esnaad.com/public/developments/12.webp';">

                            {!! $description !!}
                        </div>
                    </div>
                </div>
            </div>

            @if(isset($available))
                <div class="grid md:grid-cols-2 gap-3 mb-5 mx-auto" >
                    @foreach($images as $image)
                        <div>
                            <img src="{{ URL("https://mis.esnaad.com/uploads/news/".$id."/images/".$image['name'])}}" loading="eager" height="auto" width="auto"  alt="Awesome Tailwind CSS Timelines to use for free Image" class="object-cover w-auto mb-6 rounded-lg shadow h-auto"> 
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>


    
