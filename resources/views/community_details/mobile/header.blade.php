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
    <div class="w-full bg-cover bg-center" style="height: 70vh; background-image: url({{ asset('front/communities/2.png') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-50">
            <div class="container mx-0 px-0 mx-auto text-white">
                <h1 class="text-2xl font-semibold px-2">
                    @if($langSeg === 'ar')
                        {{$namear}}
                    @else
                        {{$name}}
                    @endif
                </h1>
                <h2 class="text-lg font-light mt-2 px-2 leading-8">
                    @if($langSeg === 'ar')
                        {{$headingar}}
                    @else
                        {{$heading}}
                    @endif
                </h2>
            </div>
        </div>
    </div>
</header>

{{-- @include('new_projects_detail.mobile.modals.galleryModal')
@include('new_projects_detail.mobile.modals.inquiryModal') --}}
<!-- component -->
{{-- <div class="flex justify-center items-start h-full absolute top-0 w-full mt-7">
    <button type="button" onclick="openModal('mymodalcentered')" class="px-4 py-2 bg-blue-500 text-white rounded mr-3">Open Modal Centered</button>
    <button type="button"  class="px-4 py-2 bg-blue-500 text-white rounded">Open Modal Top</button>
</div> --}}




