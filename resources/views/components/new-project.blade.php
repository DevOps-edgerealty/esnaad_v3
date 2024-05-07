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
    <div class="w-full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center">
        <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[50rem] w-[100%] z-0">
            <div
                class="text-white text-xl rounded-0 absolute inset-0 bg-opacity-80 flex justify-center items-center ">
            </div>                    
            <img class="h-[100%] w-[100%] object-cover     "
                src="https://mis.esnaad.com/uploads/projects/{{$id}}/{{$thumbnail}}"
                alt="esnaad-project-card"
                title="{{$thumbnail}}"
                height="300px"
                width="auto"
                loading="lazy"
            >
        </div>
        <div class="row mx-auto mt-4 z-20">
            <div class="mt-[-80px] w-full mx-auto">
                <img class="object-cover m-0 p-0  z-90 text-center mx-auto border border-gray-200"
                    width="140px" height="auto"
                    src="https://mis.esnaad.com/uploads/projects/{{$id}}/{{$logo}}"
                    alt="esnaad-project-card"
                    title="{{$logo}}"
                    loading="lazy"
                    height="auto"
                    width="auto"
                >
            </div>
        </div>
        <div class="row w-full mx-auto mt-4 z-20">
            <div  >
                <h2 class="text-xl font-bold text-center">@if($langSeg == 'ar'){{$namear}}@else {{$name}} @endif</h2>
                <p class="text-base font-thin text-center">@if($langSeg == 'ar'){{$community}}@else {{$community}} @endif</p>
            </div>
        </div>
        <div class="text-center py-4 sm:py-4 w-full mt-2">
            <a href="javascript:void(0)" onclick="return false;" class="bg-white text-base text-black py-3 px-10 rounded-0">
                Coming Soon
            </a>
        </div>
    </div>
</div>