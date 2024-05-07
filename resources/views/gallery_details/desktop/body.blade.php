<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

    
    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class="container mx-auto flex flex-col items-start md:flex-">
            
            <div class="mt-8 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
                <div class="w-full">
                    <div class="space-y-10">
                        <div>
                            <h1 class="text-2xl font-bold mb-4 text-center">
                                @if($langSeg == 'ar')
                                    {{$titlear}}
                                @else
                                    {{$title}}
                                @endif
                            </h1>
                            
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

    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl mt-12 ">
        <div class="container mx-auto flex flex-col items-start md:flex- min-h-screen">
            

            <div class="flex items-center justify-center w-full">
                <div x-data="{ openTab: 1 }" class="p-0 w-full">
                    <div class="">
                        <div class="mb-4 w-[20vw] mx-auto flex space-x-4 p-0 rounded-lg ">
                            <button x-on:click="openTab = 1" :class="{ 'bg-white text-black': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md shadow transition-all duration-300">
                                {{ __('frontend.galleryImages') }}
                            </button>
                            <button x-on:click="openTab = 2" :class="{ 'bg-white text-black': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md shadow transition-all duration-300">
                                {{ __('frontend.galleryVideos') }}
                            </button>
                        </div>
            
                        <div x-show="openTab === 1" class="transition-all duration-300 p-4 rounded-lg ">
                            <div class="mx-auto  mt-8">
                                <div class="container mx-auto flex flex-col items-start md:flex-">
                        
                                    @if(isset($available))
                                        <div class="grid md:grid-cols-2 gap-3 mb-5 mx-auto" >
                                            @foreach($images as $image)
                                                @if($image['type'] == 'image')
                                                <div>
                                                    <img src="{{ URL("https://mis.esnaad.com/uploads/gallery/".$id."/images/".$image['name'])}}" alt="ESNAAD Media Unit - Gallery - Image - {{$image['name']}}" class="object-cover w-auto mb-6 mx-auto rounded-lg shadow h-[40vh]"> 
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                        
                                </div>
                            </div>
                        </div>
            
                        <div x-show="openTab === 2" class="transition-all duration-300 p-4 rounded-lg ">
                            <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl mt-8">
                                <div class="container mx-auto flex flex-col items-start md:flex-">
                        
                                    @if(isset($available))
                                        <div class="grid md:grid-cols-2 gap-3 mb-5 mx-auto" >
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
