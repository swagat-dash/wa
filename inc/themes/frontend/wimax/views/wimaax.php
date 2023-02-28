<script type="text/javascript">var token = '<?php _e( $this->security->get_csrf_hash() )?>',
            PATH  = '<?php _e(PATH)?>',
            BASE  = '<?php _e(BASE)?>';
            
            function edValueKeyPress() {

                var edValue = document.getElementById("phone");
                var s = edValue.value;
                var count  = s.toString().length;
                if(count>5){
                    $( ".otp_section" ).show(999);
                }
                
               var country_code =  document.getElementById('code').value;
               //console.log(country_code);
                var lblValue = document.getElementById("otp");
                //lblValue.innerText = "OTP SENT PLEASE CHECK YOUR WHATSAPP ";
            }
            function sendotp() {
                var otp = Math.floor(100000 + Math.random() * 900000);
                var message = 'Your otp code is'+otp+' ';
                var phone = document.getElementById("phone").value;
                var country_code =  document.getElementById('code').value
                if(!country_code){

                     var phone_error = document.getElementById("phone_error");
                        phone_error.innerText = "please choose country ";
                }
                else{

                var phone_number_raw = country_code+phone;
                phone_number = phone_number_raw.replace(/\D/g,"");
                // console.log(phone_number);
                //var phone_number = '923338774213';
                var elementExists = document.getElementById('otp_strorage');
                if(elementExists){
                    document.getElementById("otp_strorage").value = otp;
                    //console.log(otp);
                }
                else{

                    $('.otp_section').append('<input type="text" id="otp_strorage" style="display: none;" name="opt_code" value="WhatsAi.in"/>');
                    //console.log('new');
                    //console.log(phone_number);
                }

                theUrl= '<?php _e(PATH)?>api/send.php?number='+phone_number+'&type=text&message=<?php _e( get_option('otpmessages'))?> *'+otp+'*&instance_id=<?php _e( get_option('apiinstance', '633EDB5B935FC') )?>&access_token=<?php _e( get_option('apitoken', 'e9e72818f56b9b56bd2a5ffa0606dec5') )?>';
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
                xmlHttp.send( null );
                var resp =  xmlHttp.responseText;
                console.log(resp);
                var lblValue = document.getElementById("otpc");
                document.getElementById("otpc").disabled = true;
                lblValue.innerText = 'OTP SENT';
                 }
            }
            function otp_code_verfication() {
                var otp_value = document.getElementById("otp_code_input");
                var otp_code_input = otp_value.value;
                var count  = otp_code_input.toString().length;
                if(count>5){
                    var code_generated = document.getElementById("otp_strorage").value;
                    console.log(code_generated);
                    if(code_generated==otp_code_input){

                        var lblValue = document.getElementById("verify_response");
                        var elementExists = document.getElementById('success');
                        var warning = document.getElementById('warning');
                        if(elementExists){ }
                        else{

                             if(warning){

                                warning.remove();
                             }
                            $('#verify_response').append('<i class="fa fa-check green-color" id"success" style="color: #00c700;"></i>');
                            $('.otp_section').append('<input type="text" id="otp_verified" style="display: none;" name="opt_verified" value="1"/>');
                        }
                        document.getElementById("otp_code_input").disabled = true;
                        /*lblValue.innerText = "code matched";*/
                    }
                    else{
                        var elementExists = document.getElementById('warning');
                        if(elementExists){ }
                        else{
                        $('#verify_response').append('<i class="fa fa-warning" style="color: #f30b00;" id="warning"></i>');
                        }
                        var lblValue = document.getElementById("verify_response");
                        //lblValue.innerText = "otp code miss matched";
                    }
                }
                
               /*var country_code =  document.getElementById('code').value
               console.log(country_code);*/
                
            } </script>