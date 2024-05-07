<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="">
            <div class="">
                <div class="row-span-2 grid h-3/5 grid-cols-3 bg-white  shadow-lg">
                    <div class="row-span-2 col-span-2 border">
                        <div class="w-full bg-cover bg-center" style="height:15rem; background-image: url('{{URL::asset('uploads/projects/images/'.$properties->id.'/'.$images[1]->image)}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
                            <div class="relative flex items- justify-left h-full w-full bg-gray-900 bg-opacity-20 hover:bg-opacity-50">
                                <div class="absolute bottom-16 left-16 ">

                                    <button onclick="openModal('mymodaltopMobile')" class="mt-4 px-4 py-2 w-full bg-gray-100 text-gray-800 text-xs uppercase font-medium rounded-0 hover:bg-black hover:text-gray-100 focus:outline-none ring-1 ring-gray-200 ">
                                        More Photos
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1">
                        <img
                            class="h-30  w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                            src="{{ asset('uploads/projects/images/'.$properties->id.'/'.$images[2]->image)}}"
                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                            alt="lpd-blogs-images-{{$images[2]->image}}"
                        >
                    </div>
                    <div class="">
                        <img
                            class="h-30  w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
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
