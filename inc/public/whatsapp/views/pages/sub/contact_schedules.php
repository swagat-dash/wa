<div class="wa-bulk-schedules container p-25">
	
	<h4 class="mb-4 d-flex">
		<div class="d-block d-lg-none mr-2">
			<a href="javascript:void(0);" class="user-chat-remove wa-back-submenu text-muted fs-16 p-2">
				<i class="ri-arrow-left-s-line"></i>
			</a>
		</div>
		<div>
			<?php _e('Schedules')?>
		</div>
			
	</h4>
	<?php if(!empty($schedules['result'])){?>
	<a style="visibility:hidden" class="wa-action-item wa-open-content no-overlay" data-result-content="wa-content" href="<?php _e( get_module_url("get/contact_schedules") )?>">Refresh</a>
	<div class="row">
	    <?php foreach ($schedules['result'] as $key => $row): ?>
	    
	    <?php if($row->parent != null) continue; ?>

	    <?php
	        switch ($row->status) {
	            case 0:
	                $color = "danger";
	                break;

	            case 1:
	                $color = "info";
	                break;
	            case 4:
	                $color = "warning";
	                break;
	            
	            default:
	                $color = "primary";
	                break;
	        }        

    	    if($row->status == 4){
    	        $countPhones = $row->count_sent[0]['rphones'];
    	        $cSent = $row->count_sent[0]['sent'];
    	        $cFail = $row->count_sent[0]['failed'];
    	        
    	    }else{
    	        $countPhones = 1;
    	        $cSent = $row->sent;
    	        $cFail = $row->failed;
    	    }
    	    
    	    $tName = $row->count_sent[0]['TemplateName'];
	                    	
    	    $timeDec= round((( get_data($row, 'max_delay')  * ($row->total_phone_number - $cSent - $cFail) )/60)/60,8);
    	                    	
    	    $toShowDate= gmdate('H:i:s', floor($timeDec * 3600)/ $countPhones);
	    ?>

	    <div class="col-lg-6 col-md-6 m-b-30 item">
	        
	        <div class="card border-<?php _e($color)?>">
	            <div class="card-header">
	                <h3 class="card-title">
	                    <?php _e( get_data($row, 'name') )?>
	                   <?php if($row->status != 4) : ?>
    	               
    	               <div class="small fs-12"><?php _e( get_data($row, 'account_name')." | ".get_data($row, 'account_username') )?></div>
    	               <?php else: ?>
    	               <div class="small fs-12"><?php _e(  sprintf('sending by %s phones',  $countPhones) )?></div>
    	               <?php endif ?>
	                    
	                    
	                </h3>

	                <div class="options">
	                	<?php if($row->status == 0){?>
	                		<a href="<?php _e( get_module_url("bulk_schedule_action/".$row->ids."/1") )?>" class="btn-wa-schedule-action btn-play text-info"><i class="ri-play-fill" title="<?php _e("Play")?>"></i></a>
	                	<?php }else if($row->status == 1){?>
	                		<a href="<?php _e( get_module_url("bulk_schedule_action/".$row->ids."/0") )?>" class="btn-wa-schedule-action btn-pause text-danger" ><i class="ri-pause-circle-line" title="<?php _e("Pause")?>"></i></a>
	                	<?php }else if($row->status == 4){?>
	                		<div class="text-success"><i class="ri-refresh-fill" title="<?php _e("Rotation Task")?>"></i></div>
	                	<?php }else{?>
		                	<div class="text-success"><i class="ri-check-double-line" title="<?php _e("Complete")?>"></i></div>
	                	<?php }?>
	                </div>
	            </div>
	            <div class="card-body wa-scroll h-150 no-update">
	                <div class="card-toolbar">
	                    <div class="dropdown">
	                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
	                            <i class="ft-more-vertical"></i>
	                        </button>
	                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-anim dropdown-menu-top-unround">
	                            <?php if($row->status != 4){?>
	                            <li>
	                                <a class="wa-action-item" data-result-content="wa-content" href="<?php _e( get_module_url('get/contact_create_campaign/'.$row->ids) )?>"><i class="far fa-edit"></i> <?php _e('Edit')?></a>
	                            </li>
	                            <?php }?>
	                            <li><a href="<?php _e( get_module_url('bulk_delete') )?>" data-trigger="hover" data-id="<?php _e( get_data($row, 'ids') )?>" class="actionItem" data-remove="item" data-confirm="<?php _e("Are you sure to delete this items?")?>"><i class="far fa-trash-alt"></i> <?php _e('Delete')?></a></li>
	                        </ul>
	                    </div>
	                </div>
	                <?php
	                switch ($row->cate) {
	                	case 2:
	                		_e( "<span class='text-success'>".__('[BUTTON TEMPLATE]: ').$tName."</span>", false);
	                		break;
	                	case 3:
	                		_e( "<span class='text-success'>".__('[LIST MESSAGE TEMPLATE]: ').$tName."</span>", false);
	                		break;
	                	
	                	default:
	                		_e( nl2br( get_data($row, 'data') ) , false);
	                		break;
	                }
	                ?>
	            </div>
	            <div class="card-footer">
	                <div class="row fs-12 wa-info bg-<?php _e($color)?>">

	                    <div class="col-5">
	                    	<div class="fs-10"><?php _e("Group")?></div>
	                    	<div><?php _e( get_data($row, 'group') )?> </div>
	                    </div>
	                    <div class="col-4 text-right">
	                    	<div class="fs-10"><?php _e("Next action")?></div>
	                    	<div><?php _e( datetime_show( get_data($row, 'time_post') ) )?></div>
	                    </div>
	                    <div class="col-3 text-right">
	                    	<div class="fs-10"><?php _e("Estimated time")?></div>
	                    	<div><?php _e( $toShowDate )?></div>
	                    </div>
	                    
	                </div>
                        <div class="row m-t-50">
	                    
	                    <?php 
	                    if($row->status == 4){
	                        $cSent = $row->count_sent[0]['sent'];
	                        $cFail = $row->count_sent[0]['failed'];
	                    }else{
	                        $cSent = $row->sent;
	                        $cFail = $row->failed;
	                    }
	                    $cPend = $row->total_phone_number - $cSent - $cFail;
	                    
	                    ?>
	                    
	                    <div class="col-4 text-center">
	                        <div class="number fw-6 fs-20 text-success"><?php _e( $cSent )?></div>
	                        <div class="text text-uppercase"><?php _e("Sent")?></div>
	                    </div>
	                    <div class="col-4 text-center">
	                        <div class="number fw-6 fs-20 text-info"><?php _e( $cPend )?></div>
	                        <div class="text text-uppercase"><?php _e("Pendding")?></div>
	                    </div>
	                    <div class="col-4 text-center">
	                        <div class="number fw-6 fs-20 text-danger"><?php _e( $cFail )?></div>
	                        <div class="text text-uppercase"><?php _e("Failed")?></div>
	                    </div>
	                    <?php if($cPend > 0): ?>
	                    <span class="task-info"></span>
	                    <?php endif ?>
	                </div>
	            </div>

	        </div>
	    </div>
	    <?php endforeach ?>
	</div>
	<?php }else{?>
	<div class="wrap-m h-100">
		<div class="empty">
			<div class="icon"></div>
			<a class="wa-action-item btn btn-info" data-result-content="wa-content" href="<?php _e( get_module_url('get/contact_create_campaign') )?>" data-call-after="">
	    		<i class="fas fa-plus"></i> <?php _e('Add new')?>
	    	</a>
		</div>
	</div>
	<?php }?>

	<nav class="m-t-30">
    <?php _e( $schedules['pagination'], false)?>
    </nav>
</div>

<script type="text/javascript">
	$(function(){
		$(".page-link").addClass("wa-action-item").attr('data-result-content', 'wa-content');
		
		clearInterval(window.autorefreshsch);
		
		if($('.task-info').length) {
    		window.autorefreshsch = setInterval(function() {
    		    $('.no-overlay').click();
    		}, 20000);
		}
	});
</script>