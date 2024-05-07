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



<header class="">
    <div class="w-full bg-cover bg-center" style="height: 75vh; background-image: url('{{ URL::asset('developments/banners/1.webp')}}'), url('{{ URL::asset('developments/banners/1.webp')}}');">
    {{-- <div class="w-full bg-cover bg-center" style="height: 40vh;"> --}}
        <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-75   " style="padding-top: 10vh;">
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-white">
                <h1 class="text-4xl font-thin text-center">
                        {{__('frontend.aboutH')}}                        
                    
                </h1>
                <div class="w-[600px] text-center mx-auto">
                    <p class="text-lg w-200 text-center font-thin mt-2 leading-8 ">
                        {{__('frontend.aboutP')}}                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
