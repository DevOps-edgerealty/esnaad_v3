<div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg border border-gray-100">
    <p class="text-xl font-semibold text-gray-800 mb-4">
        {{ $properties->title_en }}
    </p>

    <p class="text-lg font-light text-gray-800 mb-4">
        AED {{ number_format($properties->price) }}
    </p>

    <p class="text-lg font-light text-gray-800 mb-4">
        {{ @$properties->locationss->title_en }}
    </p>
    @if($properties->agentss != null)
        <p class="text-lg font-light text-gray-800 mb-4">
            Agent: {{ @$properties->agentss->name_en }}
        </p>
    @endif
    <div class="my-3">
        <button onclick="openModal('mymodalcentered')" class="px-4 py-2 w-full bg-black text-white rounded-md shadow-md ">
            Register Your Interest
        </button>
    </div>

    <div class="my-3">
        <a class="my-4" href="https://wa.me/971585602665?text=Good Day! I would like to have know more about a New Project in Dubai - {{ $properties->title_en }}. Thank you ESNAAD Real Estate Development!" aria-label="whatsapp-for-{{$properties->slug_link}}">
            <button class="px-4 py-2 w-full  bg-whatsapp text-white rounded-md shadow-md ">
                    WhatsApp
            </button>
        </a>
    </div>

</div>
