{{-- Desktop View --}}
<div class=" md:container mx-auto md:px-4 my-8 ">
    <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">
        @foreach($properties as $data)
            <div>
                <x-new-project
                    :id="$data->id"
                    :type="$data->pro_status"
                    :propertyreference="$data->id"
                    :name="$data->title_en"
                    :price="$data->project_price"
                    :location="@$data->locationss->name_en"
                    :handover="$data->est_completion_en"
                    :img="@$data->images->first()->image"
                    :slug="$data->slug_link"
                    :projtype="@$data->project_types->first()->name_en"
                    :developer="@$data->developer->name_en"
                />
            </div>
        @endforeach
    </div>
    {{ $properties->links() }}
</div>
