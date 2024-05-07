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
    <div class="w-full bg-cover bg-center grayscale" style="margin-top: 60px; height: 40vh; background-image: url('{{ URL::asset('developments/banners/7.webp')}}'), url('{{ URL::asset('developments/banners/7.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-40">
            <div class="container mx-0 px-0 mx-auto text-white">
                <h1 class="text-xl font-light px-2">
                    {{(__('frontend.careersH'))}}
                </h1>
                <p class="text-base font-thin leading-6 px-2 pt-2">
                    {{(__('frontend.careersP'))}}
                </p>
            </div>
        </div>
    </div>
</header>