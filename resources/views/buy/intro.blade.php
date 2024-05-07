<div class="block relative isolate overflow-hidden py-0 mt-4">

  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-auto text-center">
        <h1 class="text-2xl leading-8 text-gray-800 text-center">
            @if($property_to_be_shown == 'all')
                {{ __("Properties For Sale in Dubai")}}

            @elseif($property_to_be_shown == 'ready apartments')
                {{ __("Ready Apartments for Sale in Dubai")}}

            @elseif($property_to_be_shown == 'ready villas')
                {{ __("Ready Villas for Sale in Dubai")}}

            @elseif($property_to_be_shown == 'ready townhouses')
                {{ __("Ready Townhouses for Sale in Dubai")}}

            @elseif($property_to_be_shown == 'offplan apartments')
                {{ __("Off Plan Apartments for Sale in Dubai")}}

            @elseif($property_to_be_shown == 'offplan villas')
                {{ __("Off Plan Villas for Sale in Dubai")}}

            @elseif($property_to_be_shown == 'offplan townhouses')
                {{ __("Off Plan Townhouses for Sale in Dubai")}}

            @endif
        </h1>
    </div>
  </div>

</div>
