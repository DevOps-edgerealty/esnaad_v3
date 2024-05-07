<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex my-4">
            <div class="flex-auto ..">
                <p class="font-light text-xl text-gray-800">
                    AED {{ number_format($properties->price) }}
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-light text-xl text-gray-800">
                    {{ $properties->bedrooms }} Bedroom
                </p>
            </div>

            <div class="flex-auto">
                <p class="font-light text-xl text-gray-800">
                    {{ $properties->bathrooms }} Bathrooms
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-light text-xl text-gray-800">
                    {{ $properties->parking }} Parking
                </p>
            </div>
            <div class="flex-auto">
                <p class="font-light text-xl text-gray-800">
                    {{ @$properties->locationss->title_en }}
                </p>
            </div>
        </div>
    <hr class="container">

    </div>
</div>



