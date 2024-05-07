{{-- Desktop View --}}
<div class=" md:container mx-auto md:px-4 my-8 ">
    <div class="grid xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-2 mb-5">
        @foreach($properties as $data)
            <div>
                <div class="w-full h-fit group">
                    <div class="relative overflow-hidden">
                        {{-- <img class="h-96 w-full object-cover" src="https://images.unsplash.com/photo-1659576294143-1da218a2d82e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt=""> --}}
                        <a href="{{ URL($langSeg.'/dubai-developers/'.$data->slug_link) }}" aria-label="view-more-{{$data->slug_link}}">
                        <img
                            class="h-32 md:h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                            src="{{ asset('uploads/developers/'.$data->id.'/'.$data->image)}}" alt="lpd-projects-{{$data->slug_link}}"
                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                            alt="LPD-{{$data->slug_link}}"
                        >
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $properties->links() }}
</div>
