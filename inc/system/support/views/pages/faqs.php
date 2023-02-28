<div class="p-25">

    <?php if(get_data($admininfo, 'role') == 1){ ?>
        <form class="actionForm actionTicketFrom" action="<?php _e( get_module_url( 'create/'.segment(4) ) )?>" data-redirect="<?php _e( get_module_url() )?>/faqs">
            <div class="card rounded">
                <div class="card-body rounded">
                        <div class="newTicketForm">
                            <div class="form-group">
                                <label for="title"><?php _e('Title / Question')?></label>
                                <input type="text" class="form-control" id="title" name="title" value="">
                            </div>
                            <div class="form-group">
                                <label for="content"><?php _e('Reply')?></label>
                                <textarea class="form-control h-400" name="new_faq" id="new_faq" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> <?php _e('Create')?></button>
                        </div>
                </div>
            </div>
        </form>

        <br>
    <?php } ?>
    <div class="accordion accordion-toggle-arrow" id="accordionExample4">

    <?php  foreach ($faqs as $row):  ?>
        <div class="card">
            <div class="card-header" id="heading-<?php _e(get_data($row, 'id'))?>">
                <div class="card-title collapsed" data-toggle="collapse" data-target="#accordion-<?php _e(get_data($row, 'id'))?>" aria-expanded="false" aria-controls="accordion-0">
                    <i class="fas fa-chevron-right"></i> <?php _e(get_data($row, 'title'))?></div>
            </div>
            <div id="accordion-<?php _e(get_data($row, 'id'))?>" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample4" style="">
                <div class="card-body">
                    <?php _e( htmlspecialchars_decode(get_data($row, 'text'), ENT_QUOTES) , false)?>
                </div>
                <?php if(get_data($admininfo, 'role') == 1){ ?>
                <div class="card-footer">
                    <a href="<?php _e( get_module_url('index/delete_faq/'.get_data($row, 'id')))?>" class="btn btn-danger actionItem" data-redirect="<?php _e( get_module_url("faqs") )?>"><i class="fas fa-trash-alt"></i> <?php _e('Delete')?></a>
                </div>
                <?php } ?>    
            </div>
        </div>
    <?php endforeach ?>
    
    </div>
</div>

<script type="text/javascript">
$(function(){
  Core.CKEditor("new_faq");
});
</script>