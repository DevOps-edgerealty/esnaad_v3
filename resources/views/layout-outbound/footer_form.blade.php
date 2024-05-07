@notmobile
    <div class="block py-24 sm:py-12 bg-footer_form" id="footer_form" style="visibility:hidden">
        <div class="container mx-auto px-2 lg:px-8">

            <div class="row mb-5">
                <h3 class="text-4xl font-base">
                    Lorem ipsum dolor sit amet,
                </h3>
                <p>
                    Lorem ipsum dolor sit amet,
                </p>
            </div>

            <div class="row">
                <div class="grid xl:grid-cols-3 grid-cols-2 gap-2 xl:gap-4 text-dark ">
                    <div class="border-b border-gray-500">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="text" placeholder="Jane Doe" name="name" aria-label="Full name" autocomplete="off">
                    </div>

                    {{-- <div class="grid grid-cols-3 gap-4">
                        <div class="relative border-b border-gray-500">
                            <select class="block bg-transparent appearance-none w-full border-0 text-gray-700 pt-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" id="grid-state" name="country_code" aria-label="Country_code" autocomplete="off">
                            <option value="">Country</option>
                            </select>
                        </div>
                        <div class="col-span-2 border-b border-gray-500">
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Contact" name="phone" aria-label="Contact" autocomplete="off">
                        </div>
                    </div> --}}

                    <div class="border-b border-gray-500">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="email" placeholder="Email" name="email" aria-label="Email">
                    </div>

                    <div class="">
                        <button class=" w-full text-sm text-white hover:text-black px-2 py-2 bg-black hover:bg-transparent border border-black hover:border-black rounded-0" type="button">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endnotmobile

@mobile
    <div class="block py-24 sm:py-12 bg-footer_form" id="footer_form" style="visibility:hidden">
        <div class="container mx-auto px-2 lg:px-8">

            <div class="row mb-5">
                <h3 class="text-3xl font-base">
                    Lorem ipsum dolor sit amet,
                </h3>
                <p>
                    Lorem ipsum dolor sit amet,
                </p>
            </div>

            <div class="row">
                <div class="grid grid-cols-1 gap-2 xl:gap-4 text-dark ">
                    <div class="border-b border-gray-500 my-2">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="text" placeholder="Jane Doe" name="name" aria-label="Full name">
                    </div>

                    <div class="grid grid-cols-3 gap-4 my-2">
                        <div class="relative border-b border-gray-500">
                            <select class="block bg-transparent appearance-none w-full border-0 text-gray-700 pt-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" id="grid-state" name="country_code">
                            <option value="">Country</option>
                            </select>
                        </div>
                        <div class="col-span-2 border-b border-gray-500">
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Contact" name="phone" aria-label="Email">
                        </div>
                    </div>

                    <div class="border-b border-gray-500 my-2">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="email" placeholder="Email" name="email" aria-label="Email">
                    </div>

                    <div class=" my-2">
                        <button class=" w-full text-sm text-white hover:text-black px-2 py-2 bg-black hover:bg-transparent border border-black hover:border-black rounded-0" type="button">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endmobile