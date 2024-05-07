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
    <div class="w-full bg-cover bg-bottom" style="height: 75vh; background-image: url({{ asset('front/communities/2.png') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        {{-- <div class="w-full bg-cover bg-bottom" style="height: 75vh; background-image: url('https://mis.esnaad.com/uploads/communities/{{$id}}/header_image/{{$header_image}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');"> --}}
        <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-30" style="padding-top: 10vh;">
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-white">
                <h1 class="text-4xl font-thin text-center">
                    @if($langSeg === 'ar')
                        {{$namear}}
                    @else
                        {{$name}}
                    @endif
                </h1>
                <div class="w-[600px] text-center mx-auto">
                    <h2 class="text-base w-200 text-center font-thin mt-2 leading-8">
                        @if($langSeg === 'ar')
                            {{$headingar}}
                        @else
                            {{$heading}}
                        @endif
                    </h2>
                </div>
            </div>
        </div>
    </div>
</header>

