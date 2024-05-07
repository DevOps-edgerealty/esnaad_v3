<div class="container mx-auto px-4 my-16 ">
    <div class="grid md:grid-cols-4 gap-2 mb-5">

        @foreach($blogs as $data)

            <div class="max-w-sm  h-full" >
                <a href="{{ URL($langSeg.'/blogs/'.$data->updated_at->format('Y').'/'.$data->updated_at->format('m').'/'.$data->slug_link) }}"
                aria-label="luxe-properties-dubai-home-page-blog-links">

                    <img class="object-none"
                        style="height: 400px;"
                        src="{{ asset('uploads/blogs/'.$data->id.'/'.$data->image_url)}}"
                        onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                        alt="blogs-images"
                    />

                    <div class="p-5 flex flex-col h-fit justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-normal tracking-tight text-gray-900 ">
                                {{ Str::limit($data->name_en, 60)}}
                            </h5>
                        </a>

                        <p class="mb-3 font-thin text-sm my-8">
                            {{ \Illuminate\Support\Str::limit(strip_tags($data->description_en), $limit = 50, $end = '...') }}
                        </p>

                        <a href="#" class="inline-flex items-center px-0 py-2 text-sm font-medium uppercase">
                            {{$data->updated_at->format('Y - M')}} |
                            4 min read
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>

                        </a>
                    </div>
                </a>
            </div>

        @endforeach

    </div>
</div>
