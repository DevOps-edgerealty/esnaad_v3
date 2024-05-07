

@notmobile
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
        <div class="w-full bg-cover bg-top mb-4" style="height: 75vh; background-image: url('{{ URL::asset('developments/banners/8.webp')}}'), url('{{ URL::asset('developments/banners/8.webp')}}');">
        {{-- <div class="w-full bg-cover bg-center" style="height: 40vh;"> --}}
            <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-50" style="padding-top: 10vh;">
                <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-white">
                    <h1 class="text-4xl font-thin text-center">
                        {{__('frontend.communityH')}}
                    </h1>
                    <div class="w-[900px] text-center mx-auto">
                        <p class="text-base w-200 text-center font-thin mt-2 leading-8">
                            {{__('frontend.communityP')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>   
@endnotmobile

@mobile
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
    <div class="w-full bg-cover bg-center mb-4" style="margin-top: 60px; height: 40vh; background-image: url('{{ URL::asset('community_header.webp')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-40">

            <div class="container mx-0 px-0 mx-auto text-white">
                <h1 class="text-xl font-light px-2">
                    {{__('frontend.communityH')}}
                </h1>
                <h2 class="text-base font-thin leading-6 px-2 pt-2 ">
                    {{__('frontend.communityP')}}
                </h2>
            </div>            
        </div>
    </div>
</header>
@endmobile