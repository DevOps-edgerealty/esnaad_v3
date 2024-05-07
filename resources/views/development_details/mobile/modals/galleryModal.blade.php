<dialog id="mymodaltop" class="bg-transparent z-0 relative w-screen h-screen">
    <div class="p-7 flex justify-center items-start overflow-x-hidden overflow-y-auto fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-full relative">

            <div class="flex flex-col items-stretch w-full">
                <div class="">
                    <svg onclick="modalClose('mymodaltop')" class="ml-auto fill-current text-gray-700 w-8 h-8 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                    <div class="">

                        <div class="container mx-auto flex flex-col items-start md:flex-row">
                            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 mx-0">
                                <div class="p-7 flex w-full">
                                    <div class="font-thin text-3xl text-gray-900">Photos of {{$properties->title_en}}</div>
                                    <svg onclick="modalClose('mymodaltop')" class="ml-auto fill-current text-gray-700 w-12 h-12 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-0 md:mr-12 lg:w-2/3 sticky">
                                <div class="px-7 col-span-3">
                                    @foreach($images as $data)
                                        <img
                                            class="h-screen w-full object-cover hover:shadow-lg hover:shadow-gray/0 mb-6"
                                            src="{{ asset('uploads/properties/'.$properties->id.'/'.$data->image)}}"
                                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                                            alt="lpd-blogs-images-{{$data->image}}"
                                            style="height: 600px !important; width: 800px !important;"
                                        >
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-7 flex justify-end items-center w-full">
                    <button type="button" onclick="modalClose('mymodaltop')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog>