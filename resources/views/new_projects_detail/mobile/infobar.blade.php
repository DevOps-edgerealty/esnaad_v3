<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 my-2 text-gray-800">

        <h1 class="text-2xl font-thin">
            {{ $properties->title_en }}
        </h1>

        <p class="text-lg font-semibold my-4">
            AED {{ $properties->project_price }}
        </p>

        <div class="flex justify-between mb-4">
            <div class="text-md font-light">@if($properties->bedrooms == '0') Studio @else {{$properties->bedrooms}} Bed @endif</div>
            <div class="text-md font-light">{{ $properties->est_completion_en}}</div>
            <div class="text-md font-light">{{ $properties->locationss->name_en }}</div>
        </div>

        <hr class="container    ">

    </div>
</div>



