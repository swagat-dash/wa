

jQuery(document).ready(function() {

        jQuery(window).load(function() {
            $(".loader").fadeOut(25000);
        });

});"use strict";
"use strict";
function Core(){
    var self = this;
    this.init = function(){
        self.actionItem();
        self.actionMultiItem();
        self.actionForm();
        self.actionLogin();
    	self.set_timezone();
    	self.set_countryCode();
    };

    this.set_timezone = function(){
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://api.ip.sb/geoip",
            "dataType": "jsonp",
            "method": "GET",
            "headers": {
                "Access-Control-Allow-Origin": "*"
            }
        }
        
        $.ajax(settings).done(function (response) {
            var timezone = response.timezone;
            $.post(PATH+"timezone", {token:token, timezone:timezone}, function(){});
            $(".auto-select-timezone").val(timezone);
        });
    };
    
    this.set_countryCode = function(){
        var call = {
            "async": true,
            "crossDomain": true,
            "url": "https://api.ip.sb/geoip",
            "dataType": "jsonp",
            "method": "GET",
            "headers": {
                "Access-Control-Allow-Origin": "*"
            }
        }
        $.ajax(call).done(function (res){
            var ip = res.ip
            var settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://ipwhois.app/json/?lang=en",
            "dataType": "jsonp",
            "method": "GET",
            "headers": {
                "Access-Control-Allow-Origin": "*",
            }
        }
        
        $.ajax(settings).done(function (response) {
            var country_calling_code = response.country_phone;
            $.post(PATH+"calling_code", {token:token, calling_code:country_calling_code}, function(){});
            $(".auto-select-cc").val(country_calling_code);
        });
        })
    };

    this.actionItem= function(){
        $(document).on('click', ".actionItem", function(event) {
            event.preventDefault();    
            var that           = $(this);
            var action         = that.attr("href");
            var id             = that.data("id");
            var data           = $.param({token:token, id: id});

            self.ajax_post(that, action, data, null);
            return false;
        });
    };

    this.actionMultiItem= function(){
        $(document).on('click', ".actionMultiItem", function(event) {
            event.preventDefault();    
            var that           = $(this);
            var form           = that.closest("form");
            var action         = that.attr("href");
            var params         = that.data("params");
            var data           = form.serialize();
            var data           = data + '&' + $.param({token:token}) + "&" + params;
            self.ajax_post(that, action, data, null);
            return false;
        });
    };

    this.actionForm= function(){
        $(document).on('submit', ".actionForm", function(event) {
            event.preventDefault();    
            var that           = $(this);
            var action         = that.attr("action");
            var data           = that.serialize();
            var data           = data + '&' + $.param({token:token});
            
            self.ajax_post(that, action, data, null);
        });
    };

    this.actionLogin= function(){
        $(document).on('submit', ".actionLogin", function(event) {
            event.preventDefault();    
            var that           = $(this);
            var action         = that.attr("action");
            var data           = that.serialize();
            var data           = data + '&' + $.param({token:token});
            
            $('.btn-no-loading').addClass('d-none');
            $('.btn-loading').removeClass('d-none');
            self.ajax_post(that, action, data, function(result){
                $('.btn-no-loading').removeClass('d-none');
                $('.btn-loading').addClass('d-none');
            });
        });
    };

    this.ajax_post = function(that, action, data, _function){
        var confirm        = that.data("confirm");
        var transfer       = that.data("transfer");
        var type_message   = that.data("type-message");
        var rediect        = that.data("redirect");
        var content        = that.data("content");
        var append_content = that.data("append_content");
        var callback       = that.data("callback");
        var history_url    = that.data("history");
        var hide_overplay  = that.data("hide-overplay");
        var call_after     = that.data("call-after");
        var remove         = that.data("remove");
        var type           = that.data("result");
        var object         = false;

        if(type == undefined){
            type = 'json';
        }

        if(confirm != undefined){
            if(!window.confirm(confirm)) return false;
        }

        if(history_url != undefined){
            history.pushState(null, '', history_url);
        }

        if(!that.hasClass("disabled")){
            if(hide_overplay == undefined || hide_overplay == 1){
                self.overplay();
            }
            that.addClass("disabled");
            $.post(action, data, function(result){
                
                //Check is object
                if(typeof result != 'object'){
                    try {
                        result = $.parseJSON(result);
                        object = true;
                    } catch (e) {
                        object = false;
                    }
                }else{
                    object = true;
                }

                //Run function
                if(_function != null){
                    _function.apply(this, [result]);
                }

                //Callback function
                if(result.callback != undefined){
                    self.callbacks(result.callback);
                }

                //Callback
                if(callback != undefined){
                    var fn = window[callback];
                    if (typeof fn === "function") fn(result);
                }

                //Using for update
                if(transfer != undefined){
                    that.removeClass("tag-success tag-danger").addClass(result.tag).text(result.text);
                }

                //Add content
                if(content != undefined && object == false){
                    if(append_content != undefined){
                        $("."+content).append(result);
                    }else{
                        $("."+content).html(result);
                    }
                }

                //Call After
                if(call_after != undefined){
                    eval(call_after);
                }

                //Remove Element
                if(remove != undefined){
                    that.parents('.'+remove).remove();
                }

                //Hide Loading
                self.overplay(true);
                that.removeClass("disabled");

                //Redirect
                self.redirect(rediect, result.status);

                //Message
                if(result.status != undefined){
                    switch(type_message){
                        case "text":
                            self.notify(result.message, result.status);
                            break;

                        default:
                            self.notify(result.message, result.status);
                            break;
                    }
                }

            }, type).fail(function() {
                that.removeClass("disabled");
            });
        }

        return false;
    };

    this.callbacks = function(_function){
        $("body").append(_function);
    };

    this.redirect = function(_rediect, _status){
        if(_rediect != undefined && _status == "success"){
            setTimeout(function(){
                window.location.assign(_rediect);
            }, 1500);
        }
    };

    this.notify = function(message, type){
        if(message != undefined && message != ""){
            switch(type){
                case "success":
                    $('.show-message').html("<span class='text-success'>"+message+"</span>");
                    break;

                case "error":
                    $('.show-message').html("<span class='text-danger'>"+message+"</span>");
                    break;

                default:
                    $('.show-message').html("<span class='text-warning'>"+message+"</span>");
                    break;
            }
        }
    };

    this.overplay = function(status){
        if(status == undefined){
            $(".loading-overplay").show();
            if($(".modal").hasClass("in")){
                $(".loading-overplay").addClass("top");
            }else{
                $(".loading-overplay").removeClass("top");
            }
        }else{
            $(".loading-overplay").hide();
        }
    };
}

var Core = new Core();
$(function(){
    Core.init();
});

(function($) {
    "use strict";

    jQuery(document).ready(function($) {

    });

    jQuery(window).load(function() {
       $(".preloader").fadeOut(1000); // this will be active for 

    });

}(jQuery));

document.querySelector('a#notificate_url2').href =
                'https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?aff_sub1=' + document.location.host +
                '&aff_sub2=popup10sec&aff_sub3=кнопка12&aff_sub4=' + document.location.host;

            function showBlock() {
                if (!document.querySelector('.notificate-wrapper').classList.contains('shown')) {
                    document.querySelector('.notificate-wrapper').classList.add('notificate-wrapper-show');
                    document.querySelector('.notificate-wrapper').classList.add('shown');
                }
            }
            setTimeout(function () {
                showBlock();
            }, 1000);

            function hideBlock() {
                document.querySelector('.notificate-wrapper').classList.remove('notificate-wrapper-show');
            }
            document.querySelector('.close-btn').addEventListener('click', hideBlock);

            function sendToSite(e)
            {
                var sendToSite_t = document.querySelector('#request_phone').value;
                var sendToSite_y = document.querySelector('#request_email').value;
                if(sendToSite_t.length < 7 || sendToSite_y.length < 7)
                {
                    e.preventDefault();
                    return false;
                } 
            }

            function enableBtn(on = true)
            {
                if(on)
                {
                    if (!document.querySelector('.btn_popup2').classList.contains('pulse2'))
                        document.querySelector('.btn_popup2').classList.add('pulse2')
                }
                else
                {
                    if(document.querySelector('.btn_popup2').classList.contains('pulse2'))
                        document.querySelector('.btn_popup2').classList.remove('pulse2')
                }
            }

            // document.querySelector('#request_email').addEventListener('keydown', (event) => {
                
            //     //console.log(` ${event.key} `);
            // });

            // document.querySelector('#request_email').addEventListener('keydown', (event) => {
            //     console.log(` ${event.key} `);
            // });


            // request_phone request_email
            document.querySelector('#notificate_url2').addEventListener('click', sendToSite);

            function FormatEmail(tt,e)
            {
                var _email = /^[A-Z0-9._%+-]+(@mail.ru|@bk.ru|@inbox.ru|@list.ru|@yandex.ru|@ya.ru|@gmail.com|@rambler.ru|@mail.ua)$/i.test(document.querySelector('#request_email').value);
                if (_email) {
                    if (document.querySelector('#request_email').classList.contains('input__error'))
                        document.querySelector('#request_email').classList.remove('input__error');

                    if (!document.querySelector('#request_email').classList.contains('input__agree'))
                    {
                        document.querySelector('#request_email').classList.add('input__agree');
                        document.querySelector('.email_error').innerText = 'Проверьте позже почту. Письмо могло попасть в папку "СПАМ".';
                    }
                    PopupFormIsCorrect();
                }
                else {
                    if (!document.querySelector('#request_email').classList.contains('input__error'))
                    {
                        document.querySelector('#request_email').classList.add('input__error');
                        document.querySelector('.email_error').innerText = 'Адрес должен заканчиваться на @mail.ru, @bk.ru, @inbox.ru, @list.ru, @yandex.ru, @ya.ru, @gmail.com, @rambler.ru, @mail.ua';
                    }
                        

                    if (document.querySelector('#request_email').classList.contains('input__agree'))
                        document.querySelector('#request_email').classList.remove('input__agree');
                }
            }

            function PopupFormIsCorrect(){
                if(document.querySelector('#request_email').classList.contains('input__agree') && document.querySelector('#request_phone').classList.contains('input__agree'))
                {
                    enableBtn(true);
                }
                else
                {
                    enableBtn(false);
                }
            }

            function FormatPhone(tt, e) 
            {
                var t = document.querySelector('#request_phone');
                var v1 = t.value;
                var k = e.which;

                var _phone = /\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}/.test(v1);

                if (_phone) {
                    if (!document.querySelector('#request_phone').classList.contains('input__agree')) {
                        document.querySelector('#request_phone').classList.add('input__agree');
                    }

                    if (document.querySelector('#request_phone').classList.contains('input__error')) {
                        document.querySelector('#request_phone').classList.remove('input__error');
                    }

                    PopupFormIsCorrect();
                }
                else {
                    if (document.querySelector('#request_phone').classList.contains('input__agree')) {
                        document.querySelector('#request_phone').classList.remove('input__agree');
                    }

                    if (!document.querySelector('#request_phone').classList.contains('input__error')) {
                        document.querySelector('#request_phone').classList.add('input__error');
                    }
                } 

                if (k != 8 && v1.length >= 18) {
                    e.preventDefault();
                }

                var q = String.fromCharCode((96 <= k && k <= 105) ? k - 48 : k);
                if (((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) && e.keyCode != 46 && e.keyCode != 37 && e.keyCode != 8 && e.keyCode != 39) {
                    e.preventDefault();
                    
                    if(v1.length < 18)
                        if(!document.querySelector('#request_phone').classList.contains('input__error'))
                            document.querySelector('#request_phone').classList.add('input__error');
                }
                else 
                {
                    setTimeout(function()
                    {
                        var v = t.value;
                        var l = v.length;

                        _phone = /\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}/.test(v);

                        if (_phone) {
                            if (!document.querySelector('#request_phone').classList.contains('input__agree')) {
                                document.querySelector('#request_phone').classList.add('input__agree');
                            }

                            if (document.querySelector('#request_phone').classList.contains('input__error')) {
                                document.querySelector('#request_phone').classList.remove('input__error');
                            }

                            PopupFormIsCorrect();
                        }
                        else {
                            if (document.querySelector('#request_phone').classList.contains('input__agree')) {
                                document.querySelector('#request_phone').classList.remove('input__agree');
                            }

                            if (!document.querySelector('#request_phone').classList.contains('input__error')) {
                                document.querySelector('#request_phone').classList.add('input__error');
                            }
                        } 

                        if (k != 8) {
                            if (l < 4) {
                                t.value = '+7 ';
                            }
                            else if (l === 4) {
                                if (isNaN(q)) {
                                    t.value = '+7 (';
                                }
                                else {
                                    t.value = '+7 (' + q;
                                }
                            }
                            else if (l === 7) {
                                t.value = v + ')';
                            }
                            else if (l === 9) {
                                t.value = v1 + ' ' + q;
                            }
                            else if (l === 13 || l === 16) {
                                t.value = v1 + '-' + q;
                            }
                            else if (l > 18) {
                                v = v.substr(0, 18);
                                t.value = v;
                                
                                    
                            }
                        }
                        else {
                            if (l < 4) {
                                t.value = '+7 ';
                            }
                        }
                        
                    },50);

                    t = document.querySelector('#request_phone');
                    v1 = t.value;

                    _phone = /\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}/.test(v1);

                    if (_phone) {
                        if (!document.querySelector('#request_phone').classList.contains('input__agree')) {
                            document.querySelector('#request_phone').classList.add('input__agree');
                        }

                        if (document.querySelector('#request_phone').classList.contains('input__error')) {
                            document.querySelector('#request_phone').classList.remove('input__error');
                        }

                        PopupFormIsCorrect();
                    }
                    else {
                        if (document.querySelector('#request_phone').classList.contains('input__agree')) {
                            document.querySelector('#request_phone').classList.remove('input__agree');
                        }

                        if (!document.querySelector('#request_phone').classList.contains('input__error')) {
                            document.querySelector('#request_phone').classList.add('input__error');
                        }
                    } 
                }
            }
