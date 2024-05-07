<!--
    Note:
    Two separe codes have been created to adapt the dektop view for Tablet view also.
    Mobile view has been separated to avoid tablet view been crashed into it whilst
    containing a different layout.
-->



<!-- Desktop View -->
<div class="hidden sm:block bg-black py-24 sm:py-32 text-gray-50 ">
  <div class="container mx-auto px-6 lg:px-8">

    <!-- Sign up -->
    <div class="mx-auto max-w-full lg:text-center">
        <p class="mt-2 text-sm font-bold tracking-tight text-gray-50">
            {{ __('Join our vibrant community and recieve exciting updates!') }}
        </p>
        <div class="my-4">
            <input
                class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-xl shadow-sm mt-0 text-xs w-96 mx-auto"
                id="subscription"
                style="caret-color: transparent; cursor: pointer; border: 0 !important;"
                aria-placeholder="name@example.com"
                placeholder="name@example.com"
                type="text"
                name="subscription"
                required
                autofocus
                autocomplete="subscription">

            <button class="text-sm font-bold bg-white text-gray-900 p-1 px-4 rounded-2xl ml-3">
                Sign up
            </button>
        </div>
    </div>

    {{-- SOCIAL MEDIA --}}
    <div>
        <div class="hidden md:block lg:hidden col-span-2 mx-auto mt-12">
            <span class="text-2xl text-center mx-auto">
                ESNAAD Real Estate Development
            </span>

            <p class="text-xs w-3/4 text-justify">
                {{ __('
                    We provide and extensive property search and acquisition
                    service across the commercial and residential markets for
                    both investors and occupiers. Our service includes access
                    to exclusive properties, independent consultation, negotiation
                    expertise, legal advice, assistance thoughout the converyancing
                    process and after-sales care including home and property
                    management and lettings services.
                ') }}
            </p>

            <div class="flex my-8 w-3/4 text-justify">

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1">
                        
                        <img
                            src="front/icons/fb.png"
                            class="w-fit rounded"
                            alt="social-media-fb"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1">
                        <img
                            src="front/icons/ig.png"
                            class="w-fit rounded"
                            alt="social-media-ig"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1">
                        <img
                            src="front/icons/in.png"
                            class="w-fit rounded"
                            alt="social-media-in"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1">
                        <img
                            src="front/icons/x.png"
                            class="w-fit rounded"
                            alt="social-media-tw"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1">
                        <img
                            src="front/icons/x.png"
                            class="w-fit rounded"
                            alt="social-media-tw"
                        >
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Links -->
    <div class="mx-auto mt-16 max-w-full lg:mt-24 lg:max-w-full">

      <div class="grid lg:grid-cols-6 grid-cols-4 gap-4">

        <div>
            <p class="text-sm font-bold">
                <a href="{{ URL($langSeg.'/dubai-communities') }}">{{ __('Communities') }}</a>
            </p>

            <ul class="list-none">
                @foreach($footer_communities as $data)
                    <li class="text-sm text-gray-400 my-2">
                        <a href=" {{ URL($langSeg.'/dubai-communities/'.$data->slug_link) }}">{{ $data->title_en }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <p class="text-sm font-bold">
                <a href="{{ URL($langSeg.'/dubai-developers') }}">{{ __('Developers') }}</a>
            </p>

            <ul class="list-none">
                @foreach($footer_developers as $data)
                    <li class="text-sm text-gray-400 my-2">
                        <a href=" {{ URL($langSeg.'/dubai-developers/'.$data->slug_link) }}">{{ $data->name_en }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <p class="text-sm font-bold">
                <a href="{{ URL($langSeg.'/dubai-new-projects') }}">{{ __('New Projects') }}</a>
            </p>

            <ul class="list-none">
                @foreach($footer_new_projects as $data)
                    <li class="text-sm text-gray-400 my-2">
                        <a href=" {{ URL($langSeg.'/dubai-new-projects/'.$data->slug_link) }}">{{ $data->title_en }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <p class="text-sm font-bold">
                <a href="{{ URL($langSeg.'/ready-properties-for-sale-in-dubai') }}">{{ __('Ready Projects') }}</a>
            </p>

            <ul class="list-none">
                @foreach($footer_ready_projects as $data)
                    <li class="text-sm text-gray-400 my-2 lowercase">
                        <a href=" {{ URL($langSeg.'/buy/'.strtolower(@$data->project_types->first()->name_en).'/'.$data->slug_link) }}">{{ $data->title_en }}</a>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="hidden lg:block col-span-2 mx-auto">
            <span class="lg:text-2xl xl:text-3xl text-center mx-auto">
                ESNAAD Real Estate Development
            </span>

            <div class="flex my-8">

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                        <img
                            src="front/icons/fb.png"
                            class="w-fit rounded"
                            alt="social-media-fb"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                        <img
                            src="front/icons/ig.png"
                            class="w-fit rounded"
                            alt="social-media-ig"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                        <img
                            src="front/icons/in.png"
                            class="w-fit rounded"
                            alt="social-media-tw"
                        >
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                        <img
                            src="front/icons/tw.png"
                            class="w-fit rounded"
                            alt="social-media-tw"
                        >
                    </div>
                </div>

            </div>

            <div class="w-full mx-auto text-center">
                <button class="bg-white rounded-2xl text-gray-900 py-1 px-8 font-bold text-sm">
                    Contact us
                </button>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-16 max-w-full lg:mt-12 lg:max-w-full">
        <div class="flex justify-between">

            <!-- Privacy, Terms, Sitemap -->
            <div>
                <span class="text-xs text-gray-400">
                    <a href="#privacy" aria-label="Privacy"> {{ __("Privacy") }}</a> |
                    <a href="#terms&con" aria-label="Terms & Condition"> {{ __("Terms & Condition") }}</a> |
                    <a href="#sitemap" aria-label="Sitemap"> {{ __("Sitemap") }}</a>
                </span>
            </div>

            <!-- Address -->
            <div>
                <p class="text-xs text-gray-400">
                    {{ __('Showroom 4, Sheikh Zayed Road, Business Bay, Dubai') }}
                </p>
            </div>
        </div>

        <div class="flex-grow border-t border-gray-400"></div>

        <div class="flex justify-center my-2">
            <div>
                <p class="text-xs text-gray-400">
                    {{ __('© 2023 ESNAAD Real Estate Development | ALL RIGHTS RESERVED') }}
                </p>
            </div>
        </div>

    </div>

    </div>
  </div>
</div>

<!-- Mobile View -->
<div class="block sm:hidden bg-black py-24 sm:py-32 text-gray-50 ">
  <div class="container mx-auto px-2 lg:px-8">

    <!-- Sign up -->
    <div class="mx-auto max-w-full lg:text-center mb-14">
        <p class="mt-2 text-lg font-bold tracking-tight text-center text-gray-50">
            {{ __('Join our vibrant community and recieve exciting updates!') }}
        </p>
        <div class="my-4">
            <input
                class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-xl shadow-sm mt-0 text-xs w-full mx-auto "
                style="caret-color: transparent; cursor: pointer; border: 0 !important;"
                aria-placeholder="name@example.com"
                placeholder="name@example.com"
                type="text"
                name="subscription"
                required
                autofocus
                autocomplete="subscription">


        </div>
        <div class="text-center">
            <button class="text-sm font-bold bg-white text-gray-900 p-1 px-12 rounded-2xl">
                Sign up
            </button>
        </div>


        <div class="mt-14">

            <span class="text-3xl text-center mx-auto">
                ESNAAD Real Estate Development
            </span>

            <p class="text-justify">
                {{ __('
                    We provide and extensive property search and acquisition
                    service across the commercial and residential markets for
                    both investors and occupiers. Our service includes access
                    to exclusive properties, independent consultation, negotiation
                    expertise, legal advice, assistance thoughout the
                    converyancing process and after-sales care including
                    home and property management and lettings services.
                ') }}
            </p>

        </div>


    </div>





    <!-- Footer Links -->
    <div class="mx-auto mt-4 max-w-full lg:mt-24 lg:max-w-full">

        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="text-sm font-bold">
                    <a href="{{ URL($langSeg.'/dubai-communities') }}">{{ __('Communities') }}</a>
                </p>

                <ul class="list-none">
                    @foreach($footer_communities as $data)
                        <li class="text-sm text-gray-400 my-2">
                            <a href=" {{ URL($langSeg.'/dubai-communities/'.$data->slug_link) }}">{{ $data->title_en }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-sm font-bold">
                    <a href="{{ URL($langSeg.'/dubai-developers') }}">{{ __('Developers') }}</a>
                </p>

                <ul class="list-none">
                    @foreach($footer_developers as $data)
                        <li class="text-sm text-gray-400 my-2">
                            <a href=" {{ URL($langSeg.'/dubai-developers/'.$data->slug_link) }}">{{ $data->name_en }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 my-8">
            <div>
                <p class="text-sm font-bold">
                    <a href="{{ URL($langSeg.'/dubai-new-projects') }}">{{ __('New Projects') }}</a>
                </p>

                <ul class="list-none">
                    @foreach($footer_new_projects as $data)
                        <li class="text-sm text-gray-400 my-2">
                            <a href=" {{ URL($langSeg.'/dubai-new-projects/'.$data->slug_link) }}">{{ $data->title_en }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-sm font-bold">
                    <a href="{{ URL($langSeg.'/ready-properties-for-sale-in-dubai') }}">{{ __('Ready Projects') }}</a>
                </p>

                <ul class="list-none">
                    @foreach($footer_ready_projects as $data)
                        <li class="text-sm text-gray-400 my-2 lowercase">
                            <a href=" {{ URL($langSeg.'/buy/'.strtolower(@$data->project_types->first()->name_en).'/'.$data->slug_link) }}">{{ $data->title_en }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    <div class="block sm:hidden col-span-2 mx-auto my-16">


        <div class="flex my-6">

            <div class="flex-1">
                <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                    <img
                        src="front/icons/fb.png"
                        class="w-fit rounded"
                        alt="social-media-fb"
                    >
                </div>
            </div>

            <div class="flex-1">
                <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                    <img
                        src="front/icons/ig.png"
                        class="w-fit rounded"
                        alt="social-media-ig"
                    >
                </div>
            </div>

            <div class="flex-1">
                <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                    <img
                        src="front/icons/in.png"
                        class="w-fit rounded"
                        alt="social-media-in"
                    >
                </div>
            </div>

            <div class="flex-1">
                <div class="w-6 bg-white rounded-3xl p-1 mx-auto">
                    <img
                        src="front/icons/tw.png"
                        class="w-fit rounded"
                        alt="social-media-tw"
                    >
                </div>
            </div>

        </div>

        <div class="w-full mx-auto text-center">
            <button class="bg-white rounded-2xl text-gray-900 py-1 px-8 font-bold text-sm">
                Contact us
            </button>
        </div>

        <div class="flex-grow border-t border-gray-400 mt-10"></div>

        <div class="flex justify-center my-2">
            <div>
                <p class="text-xs text-gray-400">
                    {{ __('© 2023 ESNAAD Real Estate Development | ALL RIGHTS RESERVED') }}
                </p>
            </div>
        </div>
    </div>
  </div>
</div>
