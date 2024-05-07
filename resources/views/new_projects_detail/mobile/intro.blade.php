{{--
    <div class="mx-auto max-w-2xl lg:mx-auto text-center my-6">

        <p class="font-thin text-xs text-gray-800 text-center">
            {{ $properties->title_en }}
        </p>
    </div> --}}


    <div class="container text-sm text-gray-500">

        <div class="flex">
            <div class="flex-none w-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/> </svg>
            </div>
            <div class="flex-initial w-64 ...">
                <a href="{{ route('luxe.new-projects') }}" aria-label="luxe-properties-dubai-home" aria-label="home-route" class="text-xs text-gray-400 font-light hover:text-gray-500 ">
                    Back to New Projects
                </a>
            </div>
        </div>

    </div>

    {{-- <hr class="container"> --}}
