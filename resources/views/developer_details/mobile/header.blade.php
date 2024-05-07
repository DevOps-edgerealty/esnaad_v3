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
    <div class="block relative isolate overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mb-4 h-full">
                    <img
                        class="h-full w-full object-cover my-auto hover:shadow-lg hover:shadow-gray/0"
                        src="{{ asset('uploads/developers/'.$properties->id.'/'.$properties->image)}}"
                        onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                        alt="lpd-blogs-images-{{$properties->image}}"
                        style="width: 100% !important; height: 100% !important;"
                    >
                    <button onclick="openModal('mymodalcenteredMobile')" class="mt-4 px-4 py-2 w-full bg-black text-white text-xs uppercase font-medium rounded-sm  hover:bg-gray-100 hover:text-gray-800 focus:outline-none ring-1 ring-gray-200 ">
                        Register Your Interest
                    </button>

                </div>

                <div class="col-span-3">
                    <div class="font-light text-gray-800 text-justify">
                        {!!html_entity_decode($properties->description_en, ENT_COMPAT, 'UTF-8')!!}
                    </div>

                </div>
        </div>
    </div>




</header>

@include('developer_details.mobile.modals.inquiryModal')
<!-- component -->
{{-- <div class="flex justify-center items-start h-full absolute top-0 w-full mt-7">
    <button type="button" onclick="openModal('mymodalcentered')" class="px-4 py-2 bg-blue-500 text-white rounded mr-3">Open Modal Centered</button>
    <button type="button"  class="px-4 py-2 bg-blue-500 text-white rounded">Open Modal Top</button>
</div> --}}




