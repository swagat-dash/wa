"use strict";
function whatsapp_profiles(){
    var self = this;
    var reload;

    this.init = function(){
    	self.get_qrcode();
    	$(".wa-qr-code .wa-reload a").click();
    };

    this.reload = function(){
    	reload = setInterval(function(){
			$(".wa-qr-code .wa-reload").show();
		}, 30000);
    };

    this.get_qrcode = function(){
    	$(document).on("click", ".wa-qr-code .wa-reload a", function(){
			var d = new Date();
  			var n = d.getTime();
  			clearInterval(reload);
  			self.reload();
            self.check_login();
		});
    }

    this.check_login = function(instance_id){
    	$.ajax({
		    url: this.path() + "check_login/" + INSTANCE_ID,
		    type: 'GET',
		    dataType: "json",
			success: function(result){
				console.log(result);
				if(result.status == "success"){
					location.assign( PATH + "whatsapp" );
				}else{
					setTimeout( function(){
                        self.check_login();
                    } , 2000);
				}
	  		},
	  		error: function(result){
		    	console.log(result);
	  		}
		});
    };

    this.path = function(){
        return PATH+'whatsapp_profiles/';
    };
}

whatsapp_profiles= new whatsapp_profiles();
$(function(){
    whatsapp_profiles.init();
});
