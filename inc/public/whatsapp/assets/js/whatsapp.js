"use strict";
function WhatsappJs(){
    var self= this;
    var tmp_chat = [];
    var INSTANCE_ID = undefined;
    var ACCESS_TOKEN = undefined;
    var realtime = [];
    var change_battery = [];
    var change_state = [];
    var update_chat = [];
    
    this.init= function(){
        self.fix();
        self.sidebar();
        self.scroll();
        self.inbox();
        self.auto_responder();
        self.bulk_schedule();
        self.list_message();
    }

    this.update_scroll = function(){
        setTimeout(function(){
            $(".wa-scroll").getNiceScroll().resize();
        }, 300);

        setInterval(function(){
            $(".wa-scroll").getNiceScroll().resize();
        }, 3000);
    }

    this.scroll = function(){
        $(".wa-scroll").niceScroll({cursorcolor:"#dddbd1"});

        $(document).on("click", ".wa-reset-scrolll", function(){
            $(".wa-scroll").getNiceScroll().resize();
        });  
    }

    this.editor = function(){
        if($('.input-message').length > 0){
            if( $(".wa-editor .emojionearea").length == 0 ){
                var el = $(".input-message").emojioneArea({
                    hideSource: true,
                    useSprite: false,
                    pickerPosition    : "top",
                    filtersPosition   : "top",
                });

                setTimeout(function(){
                    $(".emojionearea-editor").niceScroll({cursorcolor:"#ddd"});
                }, 1000);

                $(".input-message").data("emojioneArea").on("keyup", function(editor, event) {
                    if (event.keyCode == 13) {
                        if(event.shiftKey){
                            event.stopPropagation();
                        } else {
                            self.send_message();
                        }
                    }
                });
            }
        }
    }

    this.import_contact = function(ids){
        var url = PATH + "whatsapp/do_import_contact/"+ids;
        $("#import_whatsapp_contact").fileupload({
            url: url,
            dataType: 'json',
            formData: { token: token },
            done: function (e, data) {
                if(data.result.status == "success"){
                    Core.notify(data.result.message, data.result.status);
                    $('#wa-contact-group-import-modal').modal('hide');
                    self.reload_contact_group();
                }else{
                    Core.overplay("hide");
                    Core.notify(data.result.message, data.result.status);
                }
            },
            progressall: function (e, data) {
                Core.overplay();
            }
        }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
    };

    this.download = function(base64, mimetype, filename){
        var a = document.createElement("a"); //Create <a>
        a.href = "data:"+mimetype+";base64," + base64; //Image Base64 Goes here
        a.download = filename; //File name Here
        a.click();
    }

    this.sidebar = function(){

        var window_width = $(window).width();
        if(window_width < 992){
            var wa_w_window = $(window).width();
            var wa_w_actions = $(".wa-actions").width();
            var wa_w_settings = $(".wa-settings").width();
            $(".wa-account-wrapper").width(wa_w_window - wa_w_settings - wa_w_actions);
        }else{
            $(".wa-account-wrapper").attr("style", "");
        }

        $(window).resize(function(){
            if(window_width < 992){
                var wa_w_window = $(window).width();
                var wa_w_actions = $(".wa-actions").width();
                var wa_w_settings = $(".wa-settings").width();

                $(".wa-account-wrapper").width(wa_w_window - wa_w_settings - wa_w_actions);
            }else{
                $(".wa-account-wrapper").attr("style", "");
            }
        });

    }

    this.tagsinput = function(el){
        $("."+el).tagsinput("items", {
          trimValue: true
        });
    }

    this.fix = function(){
        $("#wa-accounts").getNiceScroll().resize();
        $("#wa-pages").getNiceScroll().resize();

        $(window).resize(function(){
            var wa_w_window = $(window).width();
            var wa_w_actions = $(".wa-actions").width();
            var wa_w_settings = $(".wa-settings").width();

            $(".wa-account-wrapper").width(wa_w_window - wa_w_settings - wa_w_actions);
        });
    }

    this.list_message = function(){
        $(document).on("click", ".btn-wa-add-section", function(){
            var option = $(".wa-lm-data-section").html();
            var count_msg_item = $(".wa-list-message .wa-lm-item").length;
            option = option.replace(/{count}/g, count_msg_item);
            //self.emojioneArea(".btn_msg_display_text_"+count_msg_item);
            $(".btn-wa-add-section").before(option);
            $(".wa-lm-empty").remove();
        });

        $(document).on("click", ".btn-wa-add-list-option", function(){
            var that = $(this);
            var section_count = $(this).parents(".wa-lm-item").attr("data-count");
            var option = $(".wa-lm-data-option").html();
            option = option.replace(/{count}/g, section_count - 0);
            $(this).parents(".wa-lm-item").find(".wa-lm-list-option").append(option);
            $(".wa-lm-empty").remove();
        });

        $(document).on("click", ".btn-wa-add-option", function(){
            var option = $(".wa-lm-data-option").html();
            var count_msg_item = $(".wa-list-message .btn-msg-item").length;
            option = option.replace(/{count}/g, count_msg_item);
            self.emojioneArea(".btn_msg_display_text_"+count_msg_item);
            $(".wa-lm-list-option").append(option);
            $(".wa-lm-empty").remove();

            if( count_msg_item >= 2 ){
                $(".btn-msg-add").hide();
            }else{
                $(".btn-msg-add").show();
            }
        });

        $(document).on("click", ".wa-lm-list-message-remove", function(){
            $(this).parents("li").remove();

            if( $(".wa-list-message .btn-msg-item").length >= 3 ){
                $(".btn-msg-add").hide();
            }else{
                $(".btn-msg-add").show();
            }
            return false;
        });

        $(document).on("click", '.radio-tab', function(){
            $(this).siblings().removeClass("text-primary");
            $(this)
            .addClass("text-primary")
            .find("input[type='radio']").prop('checked',true);
        });

    }

    this.emojioneArea = function(el){
        //Emoji texterea
        if($(el).length > 0){
            $(el).emojioneArea({
                hideSource: true,
                useSprite: false,
                pickerPosition    : "bottom",
                filtersPosition   : "top",
            });

            setTimeout(function(){
                $(".emojionearea-editor").niceScroll({cursorcolor:"#ddd"});
            }, 1000);
        }
    };

    this.inbox = function(){

        /*
        * RUN INSTANCE
        */
        $(document).on("click", ".wa-accounts .nav-item a", function(){
            var that = $(this);
            var instance_id = that.data("instance-id");
            var access_token = that.data("access-token");

            INSTANCE_ID = instance_id;
            ACCESS_TOKEN = access_token;

            Core.overplay();
            $.get( self.path() + "get/menu?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN, function( data ) {
                var data = $.parseJSON(data);
                if(data.status == "success"){
                    $(".wa-info .avatar").attr( "src", data.data.avatar );
                    $(".wa-info .name").html( data.data.id + ' - ' + INSTANCE_ID);
                    $(".wa-info").removeClass("d-none");
                    $(".whatsapp .subheader-main").hide();

                    $(".wa-pages").html(data.content);
                    $(".wa-account-wrapper").addClass("active");
                    $(".wa-back-account").addClass("active");
                    $('[data-toggle="tooltip"]').tooltip();
                    self.update_scroll();
                }else{
                    if(data.relogin != undefined && data.relogin){
                        $(".wa-accounts a[data-instance-id='"+INSTANCE_ID+"']").parents(".nav-item").remove();
                    }
                    Core.notify(data.message, "error");
                }
                Core.overplay("hide");
            }).done(function() {})
            .fail(function() {})
            .always(function() {});
        });
        /*
        * END RUN INSTANCE
        */

        $(document).on("click", ".wa-action-item", function(){
            var that = $(this);
            var page = $(this).attr("href");
            var redirect = $(this).data("redirect");
            var el_submenu = $(this).data("result-submenu");
            var el_content = $(this).data("result-content");
            var call_after = $(this).data("call-after");
            var remove = $(this).data("remove");
            var confirm = $(this).data("confirm");

            if(confirm != undefined){
                if(!window.confirm(confirm)) return false;
            }

            if(page != "#" && page !="javascript:void(0);"){
                Core.overplay();
                if(page.search("\\?") == -1){
                    var enpoint = page+"?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
                }else{
                    var enpoint = page+"&instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
                }

                if(redirect != undefined){
                    Core.overplay("hide");
                    window.location.assign(enpoint);
                    return false;
                }

                $.get( enpoint, function( data ) {

                    $(".wa-action-item").parents("li.wa-submenu-item").removeClass("active");
                    that.parents("li.wa-submenu-item").addClass("active");
                    
                    if(data != "" && data){
                        var data = $.parseJSON(data);
                        if(data.status == "success"){
                            $("."+el_submenu).html(data.submenu);
                            $("."+el_content).html(data.content);
    
                            if( that.hasClass("wa-open-content") ){
                                $(".wa-content").addClass("active");
                            }else{
                                $(".wa-content").removeClass("active");
                            }
    
                            if( $(".wa-body").length > 0 ){
                                self.call_load_more_messages();
                                $('.wa-body.wa-scroll').scrollTop( $('.wa-body.wa-scroll').get(0).scrollHeight, -1 );
                            }
    
                            if( data.logout != undefined ){
                                $(".wa-accounts .nav-link[data-instance-id='"+INSTANCE_ID+"']").parents(".nav-item").remove();
                            }

                            //Call After
                            if(call_after != undefined){
                                eval(call_after);
                            }

                            //Remove Element
                            if(remove != undefined){
                                that.parents('.'+remove).remove();
                            }
    
                            self.scroll();
                            self.editor();
                            Core.emojioneArea();
                            Caption.append();
                            Core.date();
                            File_Manager.uploadFile("#upload_media");
                            File_Manager.GoogleDrive();
                            File_Manager.uploadFromUrl();
                            self.tagsinput("tagsinput");
                            $('[data-toggle="tooltip"]').tooltip();
                            self.caption();
                        }else{
                            if(data.relogin != undefined && data.relogin){
                                window.location.reload();
                            }
                            Core.notify(data.message, "error");
                        }
                    }
                    Core.overplay("hide");
                });
            }
            return false;
        });

        $(document).on("click", ".wa-remove", function(){
            var el_remove = $(this).data("remove");
            $(this).parents("."+el_remove).remove();
        });

        $(document).on("click", ".wa-btn-send-message", function(){
            self.send_message();
        });

        $(document).on("click", ".wa-back-submenu", function(){
            $(".wa-content").removeClass("active");
        });

        $(document).on("click", ".wa-btn-open-content", function(){
            $(".wa-content").addClass("active");
        });

        $(document).on("click", ".wa-btn-open-content", function(){
            $(".wa-content").addClass("active");
        });

        $(document).on("click", ".wa-back-account", function(){
            $(".wa-account-wrapper").removeClass("active");
            $(".wa-back-account").removeClass("active");
            self.update_scroll();
            $(".wa-info").addClass("d-none");
            $(".whatsapp .subheader-main").show();
        }); 

        $(document).on("change", "input[name='chatbot_status']", function(){
            var data = $.param({token:token, instance_id: INSTANCE_ID, access_token: ACCESS_TOKEN });
            Core.overplay();
            $.post(self.path()+"whatsapp/chatbot_status", data, function(result){
                Core.overplay("hide");
            });
        }); 

        $(document).on("click", ".wa-get-file", function(){
            var _that = $(this);
            var page = _that.attr("href");
            var data = $.param({token:token, instance_id: INSTANCE_ID, access_token: ACCESS_TOKEN });

            if(page.search("\\?") == -1){
                var enpoint = page+"?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
            }else{
                var enpoint = page+"&instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
            }

            Core.overplay();
            $.post(enpoint, data, function(result){
                if(result.status == "success"){
                    if(result.type == "media"){
                        _that.parents(".box-img").html(result.content);
                    }else{
                        window.location.assign(enpoint);
                    }
                }else{
                    Core.notify(result.message, "error");
                }
                Core.overplay("hide");
            }, 'json');

            return false;
        }); 
    }

    this.send_message = function(){
        var chat_id = $(".user-chat").attr("data-chat-id");
        var endpoint = $(".user-chat").attr("data-endpoint");
        var type = 1;

        if(endpoint.search("\\?") == -1){
            endpoint = endpoint+"?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
        }else{
            endpoint = endpoint+"&instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
        }

        var message = $(".input-message").data("emojioneArea").getText();
        var data = $.param({body : message, chat_id: chat_id, token: token, type: type});
        $(".input-message").data("emojioneArea").setText('');
        Core.overplay();
        $.post( endpoint, data, function(result) {
            if(result.status == "success"){
                if(
                    tmp_chat.indexOf( result.message_id ) === -1 &&
                    $(".wa-item[data-id='"+result.message_id+"']").length == 0
                ){
                    tmp_chat.push(  result.message_id );
                    $(".wa-body").append(result.content);
                }
            }else{
                Core.notify(result.message, "error");
            }
            setTimeout(function(){
                $('.wa-body.wa-scroll').scrollTop( $('.wa-body.wa-scroll').get(0).scrollHeight, -1 );
                self.scroll();
            },100);

            Core.overplay("hide");
        }, 'json')
        .done(function() {})
        .fail(function() {})
        .always(function() {});
    }

    this.search_contact = function(except){
            var ms = $('#ms1').magicSuggest({
                placeholder: Core.l("Select contact"),
                allowFreeEntries: true,
                selectionPosition: 'bottom',
                selectionStacked: true,
                name: 'except',
            });
            ms.setValue(except);
    }

    this.auto_responder = function(){
        var old_text = "";
        var old_media = "";
        setInterval(function(){ 
            if( $(".autoresponder").length > 0 ){
                var d_none = true;
                var media = $(".autoresponder .file-manager input").val();
                if( (media != undefined && media != old_media) || (media != undefined && $(".autoresponder_preview .item-autoresponder-preview .img").html() == "")){
                    old_media = media;
                    var media = $(".autoresponder .file-manager input").val();
                    $(".autoresponder_preview .item-autoresponder-preview .img").html("<img src='"+media+"'>");
                    var d_none = false;
                }

                var el = $("textarea[name=caption]").emojioneArea();

                setTimeout(function(){
                    var text = el[0].emojioneArea.getText();
                    text = self.nl2br(text); 
                    if( (text != old_text) || $(".autoresponder_preview .item-autoresponder-preview .text").html() == ""){
                        old_text = text; 
                        $(".autoresponder_preview .item-autoresponder-preview .text").html(text);
                        var d_none = false;
                    }
                }, 1000);

                if(d_none){
                    $(".item-autoresponder-preview").removeClass("d-none");
                }else{
                    $(".item-autoresponder-preview").addClass("d-none");
                }
            }
            $(".conversation-wrap.wa-scroll").getNiceScroll().resize();
        }, 3000);
    }

    this.bulk_schedule = function(){
        $(document).on("click", ".action-contact-group-import", function(){
            var that = $(this);
            var action = that.attr("href");

            $(".wa-contact-group-import-modal").remove();

            Core.ajax_post(that, action, { token: token }, function(result){
                $("body").append(result.content);
                $('#wa-contact-group-import-modal').modal('show');
                self.phone_numbers();
                setTimeout(function(){
                    self.scroll();
                }, 500);
            });

            return false;
        });

        $(document).on("click", ".wa-bulk-schedules .item .options a", function(){
            event.preventDefault();    
            var that           = $(this);
            var action         = that.attr("href");
            var id             = undefined;
            var data           = $.param({token:token, id: id});

            Core.ajax_post(that, action, data, function(result){
                if(result.status == "success"){
                    that.parents(".options").html(result.content);
                }
            });
            return false;
        });
    }

    this.reload_chat = function(page){
        if(page != "#" && page !="javascript:void(0);"){
            if(page.search("\\?") == -1){
                var enpoint = page+"?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
            }else{
                var enpoint = page+"&instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
            }

            $.get( enpoint, function( data ) {
                if(data != "" && data){
                    var data = $.parseJSON(data);
                    if(data.status == "success"){
                        setTimeout(function(){
                            $(".wa-submenu-data").html(data.submenu);
                            self.scroll();
                            $('[data-toggle="tooltip"]').tooltip();
                        }, 1000);
                    }else{
                        Core.notify(data.message, "error");
                    }
                }
            });
        }
        return false;
    }

    this.reload_contact_group = function(){
        $(".wa-contact-group-menu").trigger("click");
        $('#wa-contact-group-import-modal').modal('hide');
    }

    this.reload_bulk_create = function(){
        $(".wa-contact-group-create a").trigger("click");
    }

    this.reload_bulk_schedules = function(result){
        if(result.status == "success"){
            $(".wa-contact-group-shedule a").trigger("click");
        }
    }

    this.reload_chatbot = function(result){
        if(result.status == "success"){
            $(".menu-item-chatbot").trigger("click");
        }
    }

    this.reload_list_template = function(result){
        if(result.status == "success"){
            $(".menu-item-list-template").trigger("click");
        }
    }

    this.reload_button_template = function(result){
        if(result.status == "success"){
            $(".menu-item-button-template").trigger("click");
        }
    }
    
    this.phone_numbers = function(){
        self.call_load_more_phone_numbers();
        self.ajax_load_phone_numbers(0);
    };

    this.call_load_more_phone_numbers = function(){
        var that = $('.ajax-load-log[data-load-type="scroll"]');
        var scrollDiv = that.data('scroll');
        if ( that.length > 0 )
        {
            $(scrollDiv).bind('scroll',function(){
                var _scrollPadding = 80;
                var _scrollTop = $(scrollDiv).scrollTop();
                var _divHeight = $(scrollDiv).height();
                var _scrollHeight = $(scrollDiv).get(0).scrollHeight;

                $(window).trigger('resize'); 
                if( _scrollTop + _divHeight + _scrollPadding >= _scrollHeight) {
                    self.ajax_load_phone_numbers();
                }

            });
        }
    };

    this.ajax_load_phone_numbers = function(page){
        var that = $('.ajax-load-log');
        var type = that.attr('data-type');
        var ids = that.data('id');

        if(type == undefined){
            var type = "";
        }else{
            var type = '/' + type
        }
        
        if(page != undefined){
            that.attr('data-page', 0);
            that.attr('data-loading', 0);
        }

        if ( that.length > 0 )
        {
            var action = PATH + 'whatsapp/ajax_load_contact_group/' + ids + type;
            var type = that.data('type');
            var page = parseInt(that.attr('data-page'));
            var loading = that.attr('data-loading');
            var data = { token: token, page: page };
            var scrollDiv = that.data('scroll');

            if ( loading == undefined || loading == 0 )
            {
                that.attr('data-loading', 1);

                $.ajax({
                    url: action,
                    type: 'POST',
                    dataType: 'html',
                    data: data
                }).done(function(result) {
                    if ( page == 0 )
                    {
                        that.html( result );
                    }
                    else
                    {
                        that.append( result );
                    }

                    if(result != ''){
                        that.attr('data-loading', 0);
                    } 

                    that.attr( 'data-page', page + 1);
                    
                    $(".nicescroll").getNiceScroll().resize();
                });
            }
        }
    };

    this.call_load_more_messages = function(){
        var that = $('.wa-body.wa-scroll');
        var scrollDiv = that;

        if ( that.length > 0 )
        {
            $(scrollDiv).bind('scroll',function(){

                var _scrollPadding = 80;
                var _scrollTop = $(scrollDiv).scrollTop();
                var _divHeight = $(scrollDiv).height();
                var _scrollHeight = $(scrollDiv).get(0).scrollHeight;

                $(window).trigger('resize'); 
                if( _scrollTop == 0 ) {
                    self.ajax_load_messages();
                }

            });
        }
    };

    this.ajax_load_messages = function(page){
        var that = $('.user-chat');
        var list = $(".wa-body.wa-scroll");
        var page = that.data("load-more-url");

        if(page == ""){
            return "";
        }

        if(page.search("\\?") == -1){
            var enpoint = page+"?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
        }else{
            var enpoint = page+"&instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN;
        }

        if ( that.length > 0 )
        {
            var type = that.data('type');
            var loading = that.attr('data-loading');
            var data = { token: token };
            var scrollDiv = that.data('scroll');

            if(loading == undefined){
                that.attr('data-loading', 0);
            }

            if ( loading == undefined || loading == 0 )
            {
                that.attr('data-loading', 1);

                $.ajax({
                    url: enpoint,
                    type: 'POST',
                    dataType: 'json',
                    data: data
                }).done(function(result) {
                    list.prepend( result.content );
                    that.attr('data-loading', 0);
                    $(".wa-body.wa-scroll").getNiceScroll().resize();
                });
            }
        }
    };

    this.load = function(page){
        $.get( self.path() + "get/"+page+"?instance_id="+INSTANCE_ID+"&access_token="+ACCESS_TOKEN, function( data ) {
            $(".wa-pages").html(data);
            $(".wa-account-wrapper").addClass("active");
            $(".wa-back-account").addClass("active");
            Core.overplay("hide");
        });
    }

    this.ajax = function(url, callback){
        $.ajax({
            type: "GET",
            url: url,
            dataType:"json",
            success: function(res){
                if(callback != null){
                    callback.apply(this, [res]);
                }
            },
            error: function(res) {
                if(callback != null){
                    callback.apply(this, [{ "status": "error", "message": "" }]);
                }
            }
        });
    }

    this.caption = function(){
        //Review content
        if($(".post-message").length > 0){
            $(".post-message").data("emojioneArea").on("keyup", function(editor) {
                var data = editor.html();
                editor.parents(".caption").find('.count-word span').html( data.length );
                if(data != ""){
                    $(".post-preview .caption").html(data);
                }else{
                    $(".post-preview .caption").html('<div class="line-no-text"></div><div class="line-no-text"></div><div class="line-no-text w50"></div>');
                }
            });

            $(".post-message").data("emojioneArea").on("change", function(editor) {
                var data = editor.html();
                editor.parents(".caption").find('.count-word span').html( data.length );
                if(data != ""){
                    $(".post-preview .caption").html(data);
                }else{
                    $(".post-preview .caption").html('<div class="line-no-text"></div><div class="line-no-text"></div><div class="line-no-text w50"></div>');
                }
            });

            $(".post-message").data("emojioneArea").on("emojibtn.click", function(editor) {
                var data = $(".emojionearea-editor").html();
                editor.parents(".caption").find('.count-word span').html( data.length );
                if(data != ""){
                    $(".post-preview .caption").html(data);
                }else{
                    $(".post-preview .caption").html('<div class="line-no-text"></div><div class="line-no-text"></div><div class="line-no-text w50"></div>');
                }
            });
        }
    }

    this.nl2br = function(str, is_xhtml) {
        if (typeof str === 'undefined' || str === null) {
            return '';
        }
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }

    this.path = function(){
        return PATH+'whatsapp/';
    };
}

WhatsappJs= new WhatsappJs();
$(function(){
    WhatsappJs.init();
});

jQuery.loadScript = function (url, callback) {
    jQuery.ajax({
        url: url,
        dataType: 'script',
        success: callback,
        async: true
    });
}