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
    <div class="w-full bg-cover bg-center" style="height:20rem; background-image: url('{{URL::asset('uploads/properties/'.$properties->id.'/'.$images[1]->image)}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-30">
            <div class="text-center p-4">

                <div class="flex flex-wrap grid grid-cols-2 gap-2 my-2 w-full">

                    <div>
                        <button onclick="openModal('mymodaltopMobile')" class="mt-4 px-4 py-2 w-full bg-black text-white text-xs uppercase font-medium rounded-sm  hover:bg-gray-100 hover:text-gray-800 focus:outline-none ring-1 ring-gray-200 ">
                            More Photos
                        </button>
                    </div>

                    <div>
                        <a href="#project_detail_map_section" aria-label="dubai-new-project-in-detail-view-map">
                            <button class="mt-4 px-4 py-2 w-full bg-gray-100 text-gray-800 text-xs uppercase font-medium rounded-sm  hover:bg-black hover:text-gray-100 focus:outline-none ring-1 ring-gray-200 ">
                                View Map
                            </button>
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</header>

@include('buy_details.mobile.modals.galleryModal')
@include('buy_details.mobile.modals.inquiryModal')
<!-- component -->
{{-- <div class="flex justify-center items-start h-full absolute top-0 w-full mt-7">
    <button type="button" onclick="openModal('mymodalcentered')" class="px-4 py-2 bg-blue-500 text-white rounded mr-3">Open Modal Centered</button>
    <button type="button"  class="px-4 py-2 bg-blue-500 text-white rounded">Open Modal Top</button>
</div> --}}




