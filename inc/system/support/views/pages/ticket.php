<?php
//print_r($messages); $messages = (object)$messages;
if(!empty($result)){?>
    <div class="ticket-main">
        <div class="m-b-20">
            <div class="title fs-20 fw-5 text-dark"><span class="text-info"><i class="fas fa-caret-right"></i> #<?php _e(get_data($result, 'id'))?></span> <?php _e(get_data($result, 'title'))?></div>
            <div class="desc fs-12">
                <?php _e('Date created:')?> <?php _e(datetime_show(get_data($result, 'created')))?> 
                <?php if(get_data($admininfo, 'role') == 1){ ?>
                    <br><span class="text-info"><?php _e(get_data($userinfo, 'email'))?></span>
                <?php } ?> 
            </div>

            <div class="btn-group btn-group-sm m-t-10 float-left" role="group">
            <?php if(get_data($admininfo, 'role') == 1){ if(get_data($result, 'notify') == 0){ ?>
                <a href="<?php _e( get_module_url('index/notify/' . get_data($result, 'id')))?>" class="btn btn-secondary actionItem" data-redirect=""><i class="fas fa-bell"></i> <?php _e('Enable Notifications')?></a>
            <?php } else { ?>
                <a href="<?php _e( get_module_url('index/notify/' . get_data($result, 'id')))?>" class="btn btn-warning actionItem" data-redirect=""><i class="fas fa-bell-slash"></i> <?php _e('Disable Notifications')?></a>
            <?php }} ?>
            </div>
  
            <div class="btn-group btn-group-sm m-t-10 float-right" role="group">
            <?php if(get_data($admininfo, 'role') == 1){ ?>
                <a href="<?php _e( get_module_url('index/delete/' . get_data($result, 'id')))?>" class="btn btn-danger actionItem" data-redirect="<?php _e( get_module_url('index/'))?>"><i class="fas fa-trash-alt"></i> <?php _e('Delete')?></a>
           <?php } ?>  
            <?php if(get_data($result, 'status') == 1){ ?>
                <a href="<?php _e( get_module_url('index/status/' . get_data($result, 'id')))?>" class="btn btn-dark actionItem" data-redirect=""><i class="fas fa-check-circle"></i> <?php _e('Mark solved')?></a>
            <?php } else { ?>
                <a href="<?php _e( get_module_url('index/status/' . get_data($result, 'id')))?>" class="btn btn-success actionItem" data-redirect=""><i class="fas fa-door-open"></i> <?php _e('Re-open')?></a>
            <?php } ?>    
            </div>
            <div class="clearfix"></div>
        </div>
            
        <?php  foreach ($messages as $row): 
            $username = get_full_name(get_data($row, 'account_id')); ?>
        <div class="widget">
            <div class="widget-box">
                <div class="widget-list">
                    <div class="widget-item widget-item-3" data-pid="0">
                        <div class="icon">
                            <img class="p-4" src="https://ui-avatars.com/api/?name=<?php _e($username)?>&amp;background=<?php _e(get_option('support_back_color_icon', '3CDE90'))?>&amp;color=<?php _e(get_option('support_text_color_icon', 'FFFFFF'))?>&amp;font-size=0.5&amp;rounded=false">
                        </div>
                        <div class="content content-2">
                            <div class="title fw-5 p-t-0 text-dark"><?php _e($username)?></div>
                            <div class="desc">
                                <span><?php _e(time_elapsed_string(get_data($row, 'created')))?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p><?php _e( htmlspecialchars_decode(get_data($row, 'text'), ENT_QUOTES) , false)?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>

        <?php if(get_data($result, 'status') == 1){ ?>
            <form class="actionForm" action="<?php _e( get_module_url( 'reply/'.segment(4) ) )?>" data-call-after="Support.reply('<?php _e( get_module_url( 'index/ticket/'.segment(4) ) )?>');">
                <div class="action-reply" data-result="html" data-content="column-two"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="reply_ticket" name="reply_ticket"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> <?php _e('Submit')?></button>
                        </div>
                </div>
            </form>
        <?php } ?>
    </div>

    <script type="text/javascript">
        $(function(){
            Core.CKEditor("reply_ticket");
        });
    </script>
<?php } else { ?>
    <div class="wrap-m h-100">
        <div class="empty" style="width: 300px !important;">
            <div class="icon"></div>
            <div class="btn-group" role="group">
            <?php if(get_option('support_faqs', 1)){?>
                <a 
                    class="btn btn-success"
                    href="<?php _e( get_module_url('faqs') )?>"
                ><i class="fas fa-book"></i> <?php _e('FAQs')?></a>
            <?php } ?>
                <a 
                    class="actionItem btn btn-info"
                    data-result="html" 
                    data-content="column-two" 
                    href="<?php _e( get_module_url('index/new') )?>"
                    data-history="<?php _e( get_module_url('index/new') )?>"
                    data-call-after="Core.CKEditor();"
                ><i class="fas fa-pencil-alt"></i> <?php _e('New Ticket')?></a>
            </div>
        </div>
    </div>
<?php } ?>