
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
    $(document).ready(function () {           

        var career_verifiying = sessionStorage.getItem('career_verifiying');
        var career_form_verification_code;

        if(career_verifiying) {
            /** SWAP THE CONTENTS*/
            var verificationView = document.getElementById("career-registration-form");
            verificationView.classList.add("hidden");

            var formView = document.getElementById("verification");
            formView.classList.remove("hidden");
        }

        /** GENERATE CODE*/
            career_form_verification_code = Math.floor(100000 + Math.random() * 9000);

            /** ENCRYPT CODE */
            console.log(career_form_verification_code);

        $('#formViewSubmit').on('click', function(e){

            e.preventDefault();

            if( document.getElementById("applicant_name").value == "" ) {
                document.getElementById("applicant_name").focus() ;
                document.getElementById("requiredNotice").classList.remove("hidden") ;
                return false;
            }
            if( document.getElementById("applicant_email").value == "" ) {
                document.getElementById("applicant_email").focus() ;
                document.getElementById("requiredNotice").classList.remove("hidden") ;
                return false;
            }

            if( document.getElementById("applicant_phone").value == "" ) {
                document.getElementById("applicant_phone").focus() ;
                document.getElementById("requiredNotice").classList.remove("hidden") ;
                return false;
            }
            if( document.getElementById("applicant_languages").value == "" ) {
                document.getElementById("applicant_languages").focus() ;
                document.getElementById("requiredNotice").classList.remove("hidden") ;
                return false;
            }
            if( document.getElementById("applicant_job").value == "" ) {
                document.getElementById("applicant_job").focus() ;
                document.getElementById("requiredNotice").classList.remove("hidden") ;
                return false;
            }


            
            /** SET A COOKIE*/
            setCookie("_NrJFRxtB1984WVogY2Ci", career_form_verification_code, 1);

            /** ASSIGN CODE TO INPUT*/
            document.getElementById('4srMa62q63awVETd4mo9').value = career_form_verification_code;

            var verificationView = document.getElementById("career-registration-form");
            verificationView.classList.add("hidden");

            var formView = document.getElementById("verification");
            formView.classList.remove("hidden");

            /** GET FORM DATA*/
            var formData = new FormData($('#formView')[0]);

            $.ajax({
                type:'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Access-Control-Allow-Origin': 'https://esnaad.com/career-registration-post-v1'
                },
                url:"/career-registration-post-v1",
                data: formData,
                processData: false,
                contentType: false,
                success:function(data) 
                {
                    setCookie("_i7gEG1tj42frZ6ezVqdy", "true", 1);

                    if($.isEmptyObject(data.error)){
                        
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });  

        $('#verificationFormSubmit').on('click', function(e){

            e.preventDefault();

            document.getElementById("verificationFormSubmit").disabled = true;
            document.getElementById("verificationFormSubmit").style.background='#fff';
            document.getElementById("verificationFormSubmit").style.color='#000';

            /** GENERATE CODE*/
            var career_form_verification_code_cookies = getCookie('_NrJFRxtB1984WVogY2Ci');

            /** SET A COOKIE*/
            setCookie("_NrJFRxtB1984WVogY2Ci", career_form_verification_code, 1);

            /** ASSIGN CODE TO INPUT*/
            var career_form_verification_code_user = document.getElementById('applicant_code').value;

            if(career_form_verification_code_user == career_form_verification_code_cookies) {

                /** GET FORM DATA*/
                var formData = new FormData($('#formView')[0]);

                $.ajax({
                    type:'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Access-Control-Allow-Origin': 'https://esnaad.com/career-registration-post-v2'
                    },
                    url:"/career-registration-post-v2",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success:function(data) 
                    {
                        if($.isEmptyObject(data.error)){
                            /** SWAP THE CONTENTS*/
                            var verificationView2 = document.getElementById("verification");
                            verificationView2.classList.add("hidden");
                            var thankyouView = document.getElementById("thankyou");
                            thankyouView.classList.remove("hidden");
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
                
                
            } else {
                document.getElementById("verificationFormSubmit").disabled = false;
                document.getElementById("verificationFormSubmit").style.background='#000';
                document.getElementById("verificationFormSubmit").style.color='#fff';
            }

            
        });          
    });
