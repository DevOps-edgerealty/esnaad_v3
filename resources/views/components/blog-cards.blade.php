<!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <div class="max-w-full h-fit mx-auto" >
        <a href="{{ URL($langSeg.'/blogs/'.$updated->format('Y').'/'.$updated->format('m').'/'.$sluglink) }}">


            <div class="w-full h-full group">
                <div class="relative overflow-hidden">
                    {{-- <img class="h-96 w-full object-cover" src="https://images.unsplash.com/photo-1659576294143-1da218a2d82e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt=""> --}}
                    <img
                        class="h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                        src="{{ asset('uploads/blogs/'.$id.'/'.$image)}}"
                        onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                        alt="lpd-blogs-{{$sluglink}}"
                    >
                    <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <a href="{{ URL($langSeg.'/blogs/'.$updated->format('Y').'/'.$updated->format('m').'/'.$sluglink) }}"
                        aria-label="lpd-blogs-{{$sluglink}}">
                            <button class="bg-white text-black py-2 px-5">More Details</button>
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-5 flex flex-col  h-full justify-between">
                <a href="{{ URL($langSeg.'/blogs/'.$updated->format('Y').'/'.$updated->format('m').'/'.$sluglink) }}"
                aria-label="lpd-blogs-{{$sluglink}}">
                    <h5 class="mb-2 text-lg font-normal tracking-tight text-gray-900 ">
                        {{ Str::limit($name, 65)}}
                    </h5>
                </a>

                <a href="{{ URL($langSeg.'/blogs/'.$updated->format('Y').'/'.$updated->format('m').'/'.$sluglink) }}" class="inline-flex items-center px-0 py-2 text-sm font-light uppercase"
                aria-label="lpd-blogs-{{$sluglink}}">
                    {{$updated->format('Y - M')}} |
                    4 min read
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>

                </a>
            </div>
        </a>
    </div>
