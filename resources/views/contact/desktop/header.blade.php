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



<header class="]">
    
    <div class="w-full bg-cover bg-center" style="height: 75vh; background-image: url('{{ URL::asset('developments/banners/4.webp')}}'), url('{{ URL::asset('developments/banners/4.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-40">
            <div class="md:container mx-auto pt-20">
                    
                <h1 class="xl:text-4xl md:text-4xl mx-auto text-white font-light uppercase text-center">
                    {{__('frontend.contactH')}}
                </h1>
                <br>
                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-base text-center">
                    
                    {{__('frontend.contactAddress')}}
                </p>
                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-base text-center">
                    <a href="tel:{{ env('COMPANY_PHONE') }}" >
                    {{__('frontend.contactPhone')}} 
                    </a>
                </p>
                {{-- <p class="w-[75%] mx-auto text-white font-thin leading-8 text-base text-center">
                    <a href="mailto:{{env('COMPANY_EMAIL')}}" class="inline-flex items-center">
                        {{__('frontend.contactEmail')}}
                        &nbsp;
                        customercare@esnaad.com
                    </a>
                </p> --}}
            </div>
        </div>
    </div>
</header>
