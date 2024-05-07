
    {{-- <div class="mx-auto max-w-2xl lg:mx-auto text-center my-6">

        <h1 class="font-thin text-2xl text-gray-800 text-center">
            {{ $properties->title_en }}
        </h1>
    </div> --}}


    <div class="container text-sm text-gray-500">

        <h1 class="text-center text-3xl text-gray-800 font-bold my-7">
            {{ $properties->name_en }}
        </h1>

        <div class="flex flex-wrap grid sm:grid-cols-3 gap-2 my-0 w-full">
            <div class="col-span-2">
                <a href="{{ route('luxe.home') }}" aria-label="luxe-properties-dubai-home" aria-label="home-route" class="text-gray-400 font-light hover:text-gray-500 ">
                    Home
                </a>
                /
                <a href="{{ route('luxe.dubai-developers') }}" aria-label="luxe-properties-dubai-new-projects" aria-label="dubai-new-projects" class="text-gray-400 font-light hover:text-gray-500 ">
                    Developers
                </a>
                /
                <span class="text-gray-400 font-light ">{{$properties->name_en}}</span>
            </div>
            <div class="text-right">
                {{-- // Share property logos here - SVG --}}
            </div>
        </div>

    </div>

    {{-- <hr class="container"> --}}
