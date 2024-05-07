<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="">
            <div class="">
                <div class="row-span-2 grid h-3/5 grid-cols-3 bg-white  shadow-lg">
                    <div class="row-span-2 col-span-2 border">
                        <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url('{{URL::asset('uploads/projects/images/'.$properties->id.'/'.$images[1]->image)}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
                            <div class="relative flex items- justify-left h-full w-full bg-gray-900 bg-opacity-20 hover:bg-opacity-50">
                                <div class="absolute bottom-16 left-16 ">

                                    <button onclick="openModal('mymodaltop')" class="mt-4 px-10 py-4 w-full bg-black text-gray-50 text-xs uppercase font-medium rounded-0 hover:bg-white hover:text-gray-800 focus:outline-none ring-1 ring-gray-200 ">
                                        More Photos
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1">
                        <img
                            class="h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                            src="{{ asset('uploads/projects/images/'.$properties->id.'/'.$images[2]->image)}}"
                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                            alt="lpd-blogs-images-{{$images[2]->image}}"
                        >
                    </div>
                    <div class="">
                        <img
                            class="h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                            src="{{ asset('uploads/projects/images/'.$properties->id.'/'.$images[3]->image)}}"
                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                            alt="lpd-blogs-images-{{$images[3]->image}}"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
