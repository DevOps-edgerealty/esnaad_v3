<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex my-4">
            <div class="flex-auto ..">
                <p class="font-base text-xl text-gray-800">
                    AED {{$properties->project_price}}
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-base text-xl text-gray-800">
                    {{ $properties->bedrooms }} Bedroom
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-base text-xl text-gray-800">
                    {{ $properties->locationss->name_en }}
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-base text-xl text-gray-800">
                    {{ $properties->project_types->first()->name_en }}
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-base text-xl text-gray-800">
                    {{ $properties->developer->name_en }}
                </p>
            </div>
        </div>

    </div>
</div>



