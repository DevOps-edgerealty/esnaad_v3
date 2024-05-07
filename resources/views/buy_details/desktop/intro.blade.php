
    {{-- <div class="mx-auto max-w-2xl lg:mx-auto text-center my-6">

        <h1 class="font-thin text-2xl text-gray-800 text-center">
            {{ $properties->title_en }}
        </h1>
    </div> --}}


    <div class="container text-sm text-gray-500">

        <div class="flex flex-wrap grid sm:grid-cols-3 gap-2 my-2 w-full">
            <div class="col-span-2">
                <a href="{{ route('luxe.home') }}" aria-label="luxe-properties-dubai-home" aria-label="home-route" class="text-gray-400 font-light hover:text-gray-500 ">
                    Home
                </a>
                /
                <a href="{{ route('luxe.buy') }}" aria-label="luxe-properties-dubai-new-projects" aria-label="dubai-new-projects" class="text-gray-400 font-light hover:text-gray-500 ">
                    Buy
                </a>
                /
                <a href="{{ route('luxe.new-projects') }}" aria-label="luxe-properties-dubai-new-projects" aria-label="communities-routes" class="text-gray-400 font-light hover:text-gray-500 ">
                    {{ @$properties->locationss->title_en }}
                </a>
                /
                <span class="text-gray-400 font-light ">{{$properties->title_en}}</span>
            </div>
            <div class="text-right">
                {{-- // Share property logos here - SVG --}}
            </div>
        </div>

    </div>

    {{-- <hr class="container"> --}}
