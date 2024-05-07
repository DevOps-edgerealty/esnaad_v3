
    {{-- <div class="mx-auto max-w-2xl lg:mx-auto text-center my-6">

        <h1 class="font-thin text-2xl text-gray-800 text-center">
            {{ $properties->title_en }}
        </h1>
    </div> --}}


    <div class="container text-sm text-gray-500">

        <h1 class="text-black mx-auto text-center text-2xl font-light uppercase my-10">
            {{ $properties->name_en }}
        </h1>

        <div class="flex flex-wrap grid sm:grid-cols-3 gap-2 my-0 w-full">
            <div class="col-span-2">
                <a href="{{ route('luxe.home') }}" aria-label="luxe-properties-dubai-home" aria-label="home-route" class="text-gray-600 font-thin hover:text-gray-800">
                    Home
                </a>
                /
                <a href="{{ route('luxe.blogs') }}" aria-label="luxe-properties-dubai-new-projects" aria-label="dubai-new-projects" class="text-gray-600 font-thin hover:text-gray-800 ">
                    Our Insights
                </a>
                /
                <span class="text-gray-600 font-thin ">{{$properties->slug_link}}</span>
            </div>
            <div class="text-right">
                {{-- // Share property logos here - SVG --}}
            </div>
        </div>

    </div>

    {{-- <hr class="container"> --}}
