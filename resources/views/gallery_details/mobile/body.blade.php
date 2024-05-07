
<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    
    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class="container mx-auto flex flex-col items-start mt-[10vh]">
            
            <div class=" px-4 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
                <div class="w-full">
                    <div class="space-y-10">
                        <div>                            

                            <div class="flex items-center overflow-x-auto whitespace-nowrap">
                                <a href="{{ url('/en/media-gallery') }}" class="text-sm">
                                    Media   
                                </a>
                                <span class="mx-2 text-sm">
                                    /
                                </span> 
                                <a href="{{ url('/en/media-gallery') }}" class="text-sm">
                                    {{__('frontend.mediaH4')}}
                                </a>
                                <span class="mx-2 text-sm">
                                    /
                                </span> 
                                <p class="text-sm">
                                    @if($langSeg == 'ar')
                                        {{$titlear}}
                                    @else
                                        {{$title}}
                                    @endif
                                </p>
                            </div>

                            <h1 class="text-2xl mt-2">
                                {{$title}}
                            </h1>

                            <div class="grid grid-cols-2 gap-4 place-content-between">
                                <div class="">
                                    <p class="text-sm mb-2">Published {{\Carbon\Carbon::parse($created_at)->format('j F, Y')}}</p>
                                </div>
                                <div class="text-right">
                                    <div class="inline-flex float-right text-right">
                                        @include('news_details.mobile.buttons')
                                    </div>
                                </div>
                            </div>
                            @if($langSeg == 'ar')
                                {!! $descriptionar !!}
                            @else
                                {!! $description !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center w-full">
                <div x-data="{ openTab: 1 }" class="p-0 w-full">
                    <div class="">
                        <div class="mb-4 mt-4 w-[100%] mx-auto flex space-x-4 px-4 rounded-lg ">
                            <button x-on:click="openTab = 1" :class="{ 'bg-white text-black': openTab === 1 }" class="flex-1 py-2 px-4 rounded-0 shadow transition-all duration-300">
                                {{ __('frontend.galleryImages') }}
                            </button>
                            <button x-on:click="openTab = 2" :class="{ 'bg-white text-black': openTab === 2 }" class="flex-1 py-2 px-4 rounded-0 shadow transition-all duration-300">
                                {{ __('frontend.galleryVideos') }}
                            </button>
                        </div>
            
                        <div x-show="openTab === 1" class="transition-all duration-300 px-4 rounded-lg ">
                            <div class="mx-auto">
                                <div class="container mx-auto flex flex-col items-start md:flex-">
                        
                                    @if(isset($available))
                                        <div class="grid md:grid-cols-2 gap-3 mb-5 mx-auto" >
                                            @foreach($images as $image)
                                                @if($image['type'] == 'image')
                                                <div>
                                                    <img src="{{ URL("https://mis.esnaad.com/uploads/gallery/".$id."/images/".$image['name'])}}" alt="ESNAAD Media Unit - Gallery - Image - {{$image['name']}}" class="object-cover w-auto mb-2 mx-auto rounded-0 shadow h-[40vh]"> 
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                        
                                </div>
                            </div>
                        </div>
            
                        <div x-show="openTab === 2" class="transition-all duration-300 p-4 rounded-lg ">
                            <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
                                <div class="container mx-auto flex flex-col items-start md:flex-">
                        
                                    @if(isset($available))
                                        <div class="grid md:grid-cols-2 gap-3 mb-4 mx-auto" >
                                            <style>
                                                iframe {
                                                    max-width: 400px !important;
                                                    max-height: 200px !important;
                                                    padding-right: 10px !important;
                                                    padding-left: 10px !important;
                                                }
                                            </style>
                                            @foreach($images as $image)
                                                @if($image['type'] == 'video')
                                                <div>
                                                    {!! $image['name'] !!}
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                        
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        </div>
    </div>


    
