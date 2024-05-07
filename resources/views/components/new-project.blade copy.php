<?php
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    $seg1 = $uri_segments[1];
    if($seg1 == 'en' || $seg1 == 'ar'){
        $langSeg = $uri_segments[1];
    }else{
        $langSeg = 'en';
    }
?>
<div class="max-w-6xl mx-auto p-0">
            <div class="w-full bg-white rounded-0 sahdow-lg overflow-hidden flex flex-col justify-center items-center">
                <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[50rem] z-0">
                    <div
                        class="text-white text-xl rounded-0 absolute inset-0 bg-black bg-opacity-80 flex justify-center items-center ">
                    </div>
                    
                    <img class="h-[300px] w-[100%] object-cover "
                        src="https://mis.esnaad.com/uploads/projects/{{$id}}/{{$thumbnail}}"
                        alt="esnaad-project-card"
                        title="{{$thumbnail}}"
                        height="300px"
                        width="auto"
                        loading="lazy"
                    >
                </div>
                <div class="row w-full grid grid-cols-5 mt-4 z-20">
                    <div class="col-span-2 mt-[-70px] w-full mx-auto">
                        <img class="object-cover m-0 p-0  z-90 text-center mx-auto"
                            width="160px" height="auto"
                            src="https://mis.esnaad.com/uploads/projects/{{$id}}/{{$logo}}"
                            alt="esnaad-project-card"
                            title="{{$logo}}"
                            loading="lazy"
                            height="auto"
                            width="auto"
                        >
                    </div>
                    <div class="col-span-3" >
                        <h2 class="text-xl text-black font-bold text-left">@if($langSeg == 'Ar'){{$namear}}@else {{$name}} @endif</h2>
                        <p class="text-base text-black font-thin text-left">@if($langSeg == 'Ar'){{$community}}@else {{$community}} @endif</p>
                    </div>
                </div>
                <div class="text-center py-4 sm:py-4 w-full">
                    <a href="{{ url('en/developments/'.$slug) }}" class="bg-black border-black text-sm text-white font-thin py-3 px-10 rounded-0">
                        Explore More
                    </a>
                </div>
            </div>
    </div>