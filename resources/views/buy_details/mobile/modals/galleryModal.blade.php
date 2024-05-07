<dialog id="mymodaltopMobile" class="bg-transparent z-0 relative w-screen h-screen">
    <div class="p-0 flex justify-center items-start overflow-x-hidden overflow-y-auto fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-full relative">
            <div class="flex flex-col items-stretch w-full">
                <div class="p-7 flex items-center w-full">
                    <div class="font-thin text-xl text-gray-900">Photos of {{$properties->title_en}}</div>
                    <svg onclick="modalClose('mymodaltopMobile')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>

                <div class="px-0">
                    @foreach($images as $data)
                        <img
                            class="h-max w-full object-cover hover:shadow-lg hover:shadow-gray/0 mb-3"
                            src="{{ asset('uploads/properties/'.$properties->id.'/'.$images[1]->image)}}"
                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                            alt="lpd-blogs-images-{{$data->image}}"
                        >
                    @endforeach

                </div>

                <div class="p-3 flex justify-end items-center w-full">
                    <button type="button" onclick="modalClose('mymodaltopMobile')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog>
