<section class="">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-800 md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                The property your are looking for is not listed as yet on our website, don't worry we are in the process of listing new properties.
            </p>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    In the meantime, you can inquire our in-house team for the availability of the property you are looking for.
            </p>
        </div>
        <div>
            <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8">
                <h2 class="text-2xl font-bold">
                    Request an Inquiry
                </h2>
                <form class="mt-8 space-y-6" method="post" action="{{ URL('en/property-request-inquiry') }}">
                    @csrf
                    <input type="hidden" id="country_code" name="country_code">
                    <input type="hidden" id="url" name="url" value="{{Request::url()}}">

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium ">Your Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Jonna Jingtong" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium ">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@domain.com" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium">Your phone</label>
                        <input type="tel" name="phone" id="phone" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>

                    <div>
                        <label for="msg" class="block mb-2 text-sm font-medium ">Your Message</label>
                        <textarea name="msg" rows="3" id="msg" placeholder="Hi, I want to inquire about an apartment in Downtown within the budget of 3M for 2bhk" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>Hi, I want to inquire about an apartment in Downtown within the budget of *** Million for ** bhk
                        </textarea>
                    </div>
                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-whatsapp rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto">
                        Register Your Interest
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
