{{-- Desktop View --}}
<div class="container mx-auto my-8">
    <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">
        @foreach($blogs as $key => $data)

            @if($key == 0)
            @else
                <div class="h-96">
                    <x-blog-cards
                        :sluglink="$data->slug_link"
                        :id="$data->id"
                        :name="$data->name_en"
                        :updated="$data->updated_at"
                        :image="$data->image_url"
                    />
                </div>
            @endif
        @endforeach
    </div>
    {{ $blogs->links() }}
</div>
