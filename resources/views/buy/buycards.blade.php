{{-- Desktop View --}}
<div class=" md:container mx-auto md:px-4 my-8 ">

    @if( count($properties) > 1)
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5   ">
            @foreach($properties as $data)
                <div>
                    <x-buy-card
                        :sluglink="$data->slug_link"
                        :id="$data->id"
                        :titleen="$data->title_en"
                        :location="$data->locationss->title_en"
                        :price="$data->price"
                        :type="$data->property_release"
                        :bedrooms="$data->bedrooms"
                        :bathrooms="$data->bathrooms"
                        :img="@$data->images->first()->image"
                        :category="$data->property_category->cat_name_en"
                        :price="$data->price"
                        :area="$data->area"

                    />
                </div>
            @endforeach
        @else
            @include('no-listing')
        @endif

    </div>
    {{ $properties->links() }}

</div>
