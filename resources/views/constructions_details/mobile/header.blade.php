@section('luxe_asset_css')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection



<header>

   
    <div class="container mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class=" flex flex-col items-start px-4">
            <div class="ml-0 md:mr-12 sticky">
                <div class="container mx-auto w-full h-full mt-[8vh]">
                    <style>
                        ul {
                            padding-left: 30px;
                        }
                        li {
                            /* list-style-type: disc; */
                            padding-left: 10px;
                        }
                    </style>
                    
                    <div class="flex items-center overflow-x-auto whitespace-nowrap" @if($langSeg == 'ar')  dir="rtl" @endif>
                        <a href="{{ url('/en/constructions') }}" class="text-sm">
                            {{__('frontend.mobile_media')}}   
                        </a>
                        <span class="mx-2 text-xs">
                            /
                        </span> 
                        <a href="{{ url('/en/constructions') }}" class="text-sm">
                            {{__('frontend.mobile_constructions')}}
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

                    <h1 class="text-2xl mb-0" @if($langSeg == 'ar')  dir="rtl" @endif>
                        @if($langSeg == 'ar')
                            {{$titlear}}
                        @else
                            {{$title}}
                        @endif
                    </h1>
                </div>
            </div>            
        </div>
    </div>
</header>



