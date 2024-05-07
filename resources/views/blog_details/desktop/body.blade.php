<div class="">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class=" md:container mx-auto md:px-4 my-8 ">

            <div class="text-gray-800 text-justify font-light my-8">
                {!!html_entity_decode($properties->description_en, ENT_COMPAT, 'UTF-8')!!}
            </div>

            <div class="w-48 mx-auto">
                <p class="mx-auto text-center">
                    Share
                </p>
                <div class="flex my-8 w-full text-justify my-auto inline-block align-middle">

                    <div class="flex-1">
                        <div class="w-8 bg-white rounded-3xl p-1">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}">
                                <img
                                    src="{{ asset('front/icons/fb.png') }}"
                                    class="w-fit rounded"
                                    alt="social-media-fb"
                                >
                                </a>
                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="w-8 bg-white rounded-3xl p-1">
                            <a href="whatsapp://send?text={{ urlencode(Request::fullUrl()) }}" data-action="share/whatsapp/share" target="_blank">
                                <img
                                    src="{{ asset('front/icons/wa.png') }}"
                                    class="w-fit rounded"
                                    alt="social-media-ig"
                                >
                            </a>
                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="w-8 bg-white rounded-3xl p-1">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}">
                                <img
                                    src="{{ asset('front/icons/tw.png') }}"
                                    class="w-fit rounded"
                                    alt="social-media-tw"
                                >
                            </a>
                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="w-8 bg-white rounded-3xl p-1">
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source={{ urlencode(Request::fullUrl()) }}">
                                <img
                                    src="{{ asset('front/icons/in.png') }}"
                                    class="w-fit rounded"
                                    alt="social-media-in"
                                >
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
