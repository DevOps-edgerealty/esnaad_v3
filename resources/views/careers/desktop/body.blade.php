<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto " id="career-registration-form">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <form id="formView">
            
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
                    
            <p class="text-center mb-4">
                {{__('frontend.careersP1')}}
            </p>

            <div id="status"></div>

            <input type="hidden" id="4srMa62q63awVETd4mo9" name="4srMa62q63awVETd4mo9">

            @include('careers.desktop.authorizedPerson')

            <button type="button" id="formViewSubmit"  class="w-full mt-8 bg-white hover:bg-transparent border hover:border-white text-black hover:text-white font-semibold p-3">Register Now</button>

        </form>

    </div>
</div>

<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto hidden " id="verification">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <!-- component -->
        <!-- component -->
        <div class="flex  items-center justify-center ">
            <div class="rounded-lg  px-16 py-14">
                {{-- <h3 class="my-2 text-center text-3xl font-semibold text-gray-700">Verification!</h3> --}}
                <p class="w-[100%] text-center font-normal text-gray-600">
                    <form id="verificationForm">
                        <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
                        <h3 class="text-2xl text-gray-900 font-semibold text-center">{{__('frontend.careersEnterVerification')}}</h3>
                        <table class="w-full">
                            <tbody>
                                <caption class="my-4">
                                    {{__('frontend.careersSentToEmail')}} <span id="email_placeholder"></span>
                                </caption>
                                <tr class="mx-auto text-center">
                                    <td class="mx-auto text-center"><input type="text" class="text-center mx-auto" name="applicant_code" id="applicant_code" placeholder="xxxx - xxxx - xxxx - xxxx" class=" w-full" ></td>
                                </tr>
                                <tr class="mx-auto text-center hidden">
                                    <td class="mx-auto text-center text-red-900"><small>{{__('frontend.careersVerificationFailed')}}</small></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button"  id="verificationFormSubmit" class="w-full mt-8 bg-white hover:bg-transparent border hover:border-white text-black hover:text-white font-semibold p-3">Verify</button>
                        {{-- <button type="button" id="ResendVerificationCode" class="w-full mt-4 text-white font-thin">Didn't get a code? <span class="font-bold">Click to resend</button> --}}
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto hidden" id="thankyou">
    <div class="md:w-[80%] xl:w-[80%] mx-auto my-8">
        <!-- component -->
        <!-- component -->
        <div class="my-16">
            <p class="w-[100%] text-center font-normal text-gray-600">
                <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i>{{__('frontend.careersVerify')}}</button>
                <h3 class="text-2xl font-semibold text-center">{{__('frontend.careersVerifyAgain')}}</h3>
                <table class="w-full">
                    <tbody>
                        <caption class="my-4">
                            {{__('frontend.careersSuccessMsg')}}
                        </caption>
                    </tbody>
                </table>                    
            </p>
        </div>
                

        <div>
            <h2 class="text-2xl my-4">{{__('frontend.careersSuccessMsgH')}}</h2>
            <h3 class="text-lg mb-2">{{__('frontend.careersSuccessMsgH1')}}</h3>
            <p class="text-base mb-4">{{__('frontend.careersSuccessMsgP1')}}</p>

            <h3 class="text-lg mb-">{{__('frontend.careersSuccessMsgH2')}}</h3>
            <p class="text-base mb-4">{{__('frontend.careersSuccessMsgP2')}}</p>

            <h3 class="text-lg mb-">{{__('frontend.careersSuccessMsgH3')}}</h3>
            <p class="text-base mb-4">{{__('frontend.careersSuccessMsgP3')}}</p>

            <h2 class="text-2xl my-2">{{__('frontend.careersSuccessMsgH4')}}</h2>
            <p class="text-base">{{__('frontend.careersSuccessMsgP4')}}
            </p>
        </div>
    </div>
</div>