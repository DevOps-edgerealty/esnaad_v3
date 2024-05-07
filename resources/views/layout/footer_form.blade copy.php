<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<?php
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
?>

<style>

    #loading {
        display: inline-block;
        width: 12px;
        height: 12px;
        border: 1px solid rgba(0,0,0);
        border-radius: 50%;
        border-top-color: #000;
        animation: spin 1s ease-in-out infinite;
        -webkit-animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
    to { -webkit-transform: rotate(360deg); }
    }
    @-webkit-keyframes spin {
    to { -webkit-transform: rotate(360deg); }
    }
</style>

@notmobile
    <div class="block py-24 sm:py-12    " id="footer_form" style="visibility:hidden" style="background-color: #1c1c1c !important; color: #ccc !important">
        <div class="container mx-auto px-2 lg:px-8"  @if($langSeg == 'ar') dir="RTL" @endif>    
            <div class="row mb-5">
                <h2 class="text-4xl font-base">
                    {{__('frontend.footerFormH2')}}
                </h2>
                <p class="w-[75%]" id="submitIncomplete">
                    {{__('frontend.footerFormP1')}}
                </p>
                <p class="w-[75%] my-10" id="submitComplete">
                    {{__('frontend.footerFormP2')}}
                </p>
            </div>

            <div class="row">
                <form id="subscriptionForm" >
                {{-- <form action="http://httpbin.org/post" method="POST" id="demo-form"> --}}
                    <div class="grid xl:grid-cols-3 grid-cols-2 gap-2 xl:gap-4 text-dark ">

                        <input type="hidden" name="ip_address" value="{{$ip_address}}">
                    
                        <div class="border-b border-gray-500">
                            <input class="appearance-none bg-transparent border-none w-full  mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-white focus:ring-white" type="text" placeholder="{{__('frontend.formFullName')}}" name="name" aria-label="Full name" autocomplete="off" required>
                        </div>

                        <div class="border-b border-gray-500">
                            <input class="appearance-none bg-transparent border-none w-full  mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-white focus:ring-white" type="email" placeholder="{{__('frontend.formEmail')}}" name="email" aria-label="Email" required>
                        </div>

                        <div id="submitComplete">
                            <button type="button" id="submitButtonDone" class=" w-full text-sm text-white px-2 py-2 bg-transparent border border-gray-50 rounded-0">
                                {{__('frontend.footerFormSubmissionCompleted')}}
                            </button>
                            <button type="submit" id="submitButton" class="w-full text-sm text-white px-2 py-2 border border-white rounded-0">
                                {{__('frontend.footerFormSubscribe')}}
                            </button>
                            <button type="submit" id="submitVerifying" hidden disabled  id="submitButton"  class="bg-transparent w-full text-sm px-2 py-2 border border-white rounded-0">
                                <div id="loading"></div>
                                Verifying
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endnotmobile


@mobile
    <div class="block py-24 sm:py-12 bg-footer_form" id="footer_form" style="visibility:hidden">
        <div class="container mx-auto px-2 lg:px-8">

            <div class="row mb-5">
                <h2 class="text-4xl font-base">
                    {{__('frontend.footerFormH2')}}
                </h2>
                <p class="w-full" id="submitIncomplete">
                    {{__('frontend.footerFormP1')}}
                </p>
                <p class="w-full my-10" id="submitComplete">
                    {{__('frontend.footerFormP2')}}
                </p>
            </div>

            

            <div class="row">
                <form id="subscriptionFormMobile" >
                    <div class="grid grid-cols-1 gap-2 xl:gap-4 text-dark ">

                        <input type="hidden" name="ip_address" value="{{$ip_address}}">

                        <div class="border-b border-white my-2">
                            <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-white focus:ring-white" type="text" placeholder="{{__('frontend.formFullName')}}" name="name" aria-label="Full name" required>
                        </div>

                        <div class="border-b border-white my-2">
                            <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-white focus:ring-white" type="email" placeholder="{{__('frontend.formEmail')}}" name="email" aria-label="Email" required>
                        </div>

                        <div class=" my-2">
                            <button type="submit" id="submitButtonMobile" class=" w-full text-sm text-white px-2 py-2  border border-white rounded-0">
                                {{__('frontend.footerFormSubscribe')}}
                            </button>
                            <button type="button" id="submitButtonMobileDone" class=" w-full text-sm text-black text-white px-2 py-2  border border-white rounded-0">
                                {{__('frontend.footerFormSubmissionCompleted')}}
                            </button>
                            <button type="submit" id="submitVerifying" hidden disabled  id="submitButton"  class="bg-transparent w-full text-sm px-2 py-2 border border-white rounded-0">
                                <div id="loading"></div>
                                Verifying
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endmobile


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

<script>
    function setCookie(name, value, daysToExpire) {
        var expires = "";
        
        if (daysToExpire) {
            var date = new Date();
            date.setTime(date.getTime() + (daysToExpire * 5 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        
        document.cookie = name + "=" + value + expires + "; path=/";
    };

    // Function to get a specific cookie by name
    function getCookie(cookieName) {
        var name = cookieName + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var cookieArray = decodedCookie.split(';');

        for (var i = 0; i < cookieArray.length; i++) {
            var cookie = cookieArray[i].trim();
            if (cookie.indexOf(name) === 0) {
                return cookie.substring(name.length, cookie.length);
            }
        }

        return null; // Return null if the cookie is not found
    };
    if (getCookie('_ivqLdoulWNJqMw')) {
        $('#submitButtonDone').show();
        $('#submitButton').hide(); 
        $('#submitButtonMobileDone').show();
        $('#submitButtonMobile').hide();  

        $('#submitCompleteMobile').show();
        $('#submitIncompleteMobile').hide();

        $('#submitComplete').show();
        $('#submitIncomplete').hide();
        
        $('#subscriptionForm').hide();
        $('#subscriptionFormMobile').hide();
    } else {
        $('#submitButtonDone').hide();
        $('#submitButton').show();

        $('#submitButtonMobileDone').hide();
        $('#submitButtonMobile').show();

        $('#submitCompleteMobile').hide();
        $('#submitIncompleteMobile').show();

        $('#submitComplete').hide();
        $('#submitIncomplete').show();     

        $('#subscriptionForm').show();
        $('#subscriptionFormMobile').show();
    };

    // Check if the form has been submitted before
    // if (localStorage.getItem('subscriptionSubmitted')) {
    //     disableForm();
    // }
    
    $('#subscriptionForm').on('submit', function(e){
        e.preventDefault();

        grecaptcha.ready(function() {
          grecaptcha.execute('6Lemn6MpAAAAAESP2aVvYJ5dEukLgbC5Or_BG6tj', {action: 'submit'}).then(function(token) {
            document.getElementById("submitButton").disabled = true;
            document.getElementById('submitButton').style.display = 'none';
            document.getElementById('submitVerifying').style.display = 'inline-block';

            var formData = new FormData(document.getElementById("subscriptionForm"));

            console.log(formData);

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            //         'authkey': 'YOUR_SECRET_KEY',
            //     }
            // });

            // $.ajax({
            //     type:'POST',
            //     url: "{{ URL('en/subscription-form') }}",
            //     data: formData,
            //     processData: false,
            //     contentType: false,
            //     success:function(data)
            //     {
            //         if($.isEmptyObject(data.error)){
            //             setCookie("_ivqLdoulWNJqMw", true, 1);
            //             // modalClose('mymodalcentered');
            //             $('#submitComplete').show();
            //             $('#submitIncomplete').hide();
            //             $('#submitButtonDone').show();
            //             $('#submitButton').hide();  
            //             $('#subscriptionForm').hide();
            //             document.location.href = '/en/subscription/thanks';

            //         }else{
            //             printErrorMsg(data.error);
            //             alert(data.error);
            //         }
            //     }
            // });
          });
        });


        // grecaptcha.enterprise.ready(async () => {
        //     const token = await grecaptcha.enterprise.execute('6Lemn6MpAAAAAESP2aVvYJ5dEukLgbC5Or_BG6tj', {action: 'LOGIN'}).then(function(token) {
                
        //     });
        // });

        
    });
    





    $('#subscriptionFormMobile').on('submit', function(e){
        e.preventDefault();

        document.getElementById("submitButtonMobile").disabled = true;
        document.getElementById('submitButtonMobile').style.display = 'none';
        document.getElementById('submitVerifying').style.display = 'inline-block';

        var formData = new FormData(this);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'authkey': 'YOUR_SECRET_KEY',
            }
        });

        $.ajax({
            type:'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')},
            url: "{{ URL('en/subscription-form') }}",
            data: formData,
            processData: false,
            contentType: false,
            success:function(data)
            {
                if($.isEmptyObject(data.error)){
                    setCookie("_ivqLdoulWNJqMw", true, 1);
                    $('#submitButtonMobileDone').show();
                    $('#submitButtonMobile').hide();  
                    document.location.href = '/en/subscription/thanks';
                }else{
                    printErrorMsg(data.error);
                    alert(data.error);
                }
            }
        });

        disableFormMobile();

        // Store the submission status in local storage
        localStorage.setItem('subscriptionSubmitted', 'true');
    });

    function disableForm() {
        document.getElementById('submitButton').disabled = true;
    }

    function disableFormMobile() {
        document.getElementById('submitButtonMobile').disabled = true;
    }
</script>