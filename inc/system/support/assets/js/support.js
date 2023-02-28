"use strict";
function Support(){
    var self= this;
    this.init= function(){
        self.option();
        
        $(document).on("click", ".support-manager .widget-item a", function(){
            $(this).find("fas.fa-circle-notch.fa-spin").remove();
        });
    };

    this.option = function(){
        $(document).on("change", ".support .actionTicketFrom .select_product", function(){
            var renew = $(this).children("option:selected").data("renew");
            if(renew == ""){
                $(".support .popup_renew a").attr("href", "javascript:void(0);");
                $(".support .popup_renew").addClass("d-none");
                $(".support .newTicketForm").removeClass("d-none");
            }else if(renew == undefined){
                $(".support .popup_renew").addClass("d-none");
                $(".support .newTicketForm").addClass("d-none");
            }else{
                $(".support .popup_renew a").attr("href", renew);
                $(".support .popup_renew").removeClass("d-none");
                $(".support .newTicketForm").addClass("d-none");

            }
            console.log(renew);
        });
    };

    this.reply = function(url){
        var that = $(".action-reply");
        var data = $.param({token:token});
        Core.ajax_post(that, url, data, function(result){
            setTimeout(function(){
                Core.CKEditor();
            }, 500);
        });
    };
}

var Support = new Support();
$(function(){
    Support.init();
});