<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="mt-18 mb-4 text-3xl font-thin">
            Similar New Projects in {{$properties->locationss->name_en}}
        </p>
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">

            @foreach($similar_properties as $data)
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
        </div>
    </div>
</div>
