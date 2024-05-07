
<?php 
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
?>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ modelOpen: true }" id="newsletter-popup-modal" class="hidden">
    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block p-8 my-45 overflow-hidden text-left transition-all transform bg-black rounded-lg shadow-xl  w-1/2"
            >
                <div id="newsletter-ty-section" style="display: none;">
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex felx-col items-start w-full gap-2 pb-2 pl-7">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                                <defs>
                                    <image  width="48" height="48" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAQMAAABtzGvEAAAAAXNSR0IB2cksfwAAAANQTFRF////p8QbyAAAAA1JREFUeJxjYBgF1AQAAVAAAevmKMkAAAAASUVORK5CYII="/>
                                </defs>
                                <style>
                                    .s0 { fill: #ffffff } 
                                </style>
                                <use id="Background" style="display: none" href="#img1" x="0" y="0"/>
                                <g id="Layer">
                                    <path id="Layer" fill-rule="evenodd" class="s0" d="m1 10.5c0-3 2.5-5.5 5.5-5.5h35.2c3 0 5.5 2.5 5.5 5.5v26.3c0 3-2.5 5.5-5.5 5.5h-35.2c-3 0-5.5-2.5-5.5-5.5zm9.5-0.3l13.6 10.1 14.1-10.1zm31.5 26.7v-22.8l-17.9 12.8-17.8-13.2v23.2q0 0.1 0.2 0.1h35.4q0.1 0 0.1-0.1z"/>
                                </g>
                            </svg>
                            <span class="text-white text-xl font-bold">
                                Mail
                            </span>
                        </div>
                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>

                    <div class=" items-start w-full">
                        <div class=" p-7">
                                    
                            <div class="flex w-full gap-4 pt-4 pb-2">
                                <span class="text-white text-4xl font-bold text-center mx-auto">
                                    YOU'RE A MEMBER!
                                </span>
                            </div>
        
                            <div class="flex felx-col items-start w-full gap-4 mt-10">
                                <span class="text-white text-xl font-bold text-center mx-auto leading-8">
                                    Thank you for joining us!<br>
                                    Check your inbox for confirmation on your subscription.
                                </span>
                            </div>
                        </div>                            
                    </div>
                </div>


                
                <div id="newsletter-form-section">
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex felx-col items-start w-full gap-2 pb-2 pl-7">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                                <defs>
                                    <image  width="48" height="48" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAQMAAABtzGvEAAAAAXNSR0IB2cksfwAAAANQTFRF////p8QbyAAAAA1JREFUeJxjYBgF1AQAAVAAAevmKMkAAAAASUVORK5CYII="/>
                                </defs>
                                <style>
                                    .s0 { fill: #ffffff } 
                                </style>
                                <use id="Background" style="display: none" href="#img1" x="0" y="0"/>
                                <g id="Layer">
                                    <path id="Layer" fill-rule="evenodd" class="s0" d="m1 10.5c0-3 2.5-5.5 5.5-5.5h35.2c3 0 5.5 2.5 5.5 5.5v26.3c0 3-2.5 5.5-5.5 5.5h-35.2c-3 0-5.5-2.5-5.5-5.5zm9.5-0.3l13.6 10.1 14.1-10.1zm31.5 26.7v-22.8l-17.9 12.8-17.8-13.2v23.2q0 0.1 0.2 0.1h35.4q0.1 0 0.1-0.1z"/>
                                </g>
                            </svg>
                            <span class="text-white text-xl font-bold">
                                Mail
                            </span>
                        </div>
                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700" id="newsletter-popup-modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>

                    <div class=" items-start w-full" id="form_ready">
                        <div class="grid grid-cols-2 gap-4 ">
                            <div class=" p-7">
                                        
                                <div class="flex felx-col items-start w-full gap-4 pt-4 pb-2">
                                    <span class="text-white text-4xl font-bold">
                                        Unlock <br>Exclusive Insights
                                    </span>
                                </div>
            
                                <div class="flex felx-col items-start w-full gap-4">
                                    <span class="text-white text-xl font-bold">
                                        Stay informed, stay ahead: Join our 20,000+ for weekly updates & insider news
                                    </span>
                                </div>
                            </div>

                            <div>
                                <div class="p-7 my-auto flex flex-col items-middle bg-white rounded-lg">
                                    <form id="subscriptionFormPopup" class="my-auto flex flex-col items-start w-full" method="post" action="en/project-detail-inquiry">
                                        @csrf
                                        <div class=" w-full" style="max-height: 40vh;">
                    
                                            <input type="hidden" name="ip_address" value="{{$ip_address}}">
                                            <input type="hidden" id="url" name="url" value="{{$actual_link}}">
                    
                                            <div class="mb-6">
                                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="{{__('frontend.formFullName')}}"  required>
                                            </div>
                    
                                            <div class="mb-6">
                                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="{{__('frontend.formEmail')}}" required>
                                            </div>
                    
                                            <div>
                                                <button type="submit" id="submitPopupButton" class=" w-full text-lg uppercase text-white hover:text-black px-2 py-2 bg-black hover:bg-transparent border border-black hover:border-black rounded-0">
                                                    {{__('frontend.footerFormSubscribe')}}
                                                </button>
                                                <button type="submit" id="submitPopupVerifying" hidden disabled  id="submitButton"  class="bg-transparent w-full text-sm text-black px-2 py-2 border border-black rounded-0">
                                                    <div id="loading"></div>
                                                    Verifying
                                                </button>
                                            </div>
                                        </div>                
                                    </form>
                                </div>
                                <div class="mt-4">
                                    <button type="button"  @click="modelOpen = false" class="w-[100%] hover:text-white text-gray-500 font-base py-2 text-base rounded-0" id="newsletter-popup-modal-notInterested">
                                        {{ __('frontend.popupNotInterested') }}
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

<script src="{{ asset('js/popup/Zmymn335HXL2Vpz5.min.js')}}"></script>

<script>
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }


    function closeNewsletterPopup() {
        $('#newsletter-popup-modal-close').on('click', function(e){
            setCookie("_GJiIH16wT6TgFJv_temp", true, 1);
            document.getElementById('newsletter-popup-modal').classList.remove('hidden');
            document.getElementById('newsletter-popup-modal').dataset.modelOpen = false;
        });
    }

    function popupNotInterestedNewsletterPopup() {
        $('#newsletter-popup-modal-notInterested').on('click', function(e){
            setCookie("_GJiIH16wT6TgFJv_temp", true, 1);
            document.getElementById('newsletter-popup-modal').classList.remove('hidden');
            document.getElementById('newsletter-popup-modal').dataset.modelOpen = false;
        });
    }


    
    // Function to show the modal after a 10-second delay
    function showDelayedModal() {
        if (!getCookie('_GJiIH16wT6TgFJv')) {
            if (!getCookie('_GJiIH16wT6TgFJv_temp')) {
                setTimeout(function() {
                    document.getElementById('newsletter-popup-modal').classList.remove('hidden');
                    document.getElementById('newsletter-popup-modal').dataset.modelOpen = true;
                }, 5000);
            }            
        }
        
    }
    
    // Call the function when the document is ready
    document.addEventListener("DOMContentLoaded", showDelayedModal);
    document.addEventListener("DOMContentLoaded", closeNewsletterPopup);
    document.addEventListener("DOMContentLoaded", popupNotInterestedNewsletterPopup);
</script>