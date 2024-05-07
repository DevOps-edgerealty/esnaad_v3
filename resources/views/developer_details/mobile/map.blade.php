<div class="block relative isolate overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <p class="mt-18 mb-4 text-3xl font-thin">
            Community of {{$properties->locationss->title_en}}
        </p>

        <div class="mb-4 text-justify">
            {!! html_entity_decode(@$properties->locationss->description_en, ENT_COMPAT, 'UTF-8') !!}
        </div>

        <div id='map' class="map" style='width: 100%; height: 400px'></div>

    </div>
</div>







