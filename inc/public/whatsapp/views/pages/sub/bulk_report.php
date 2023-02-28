
<div class="campaign-reports p-25 w-100">

    
    <div class="wrap-analytics" id="wrap-analytics">

            <div class="box-analytics">
                <div class="box-head">
        			<h3 class="text-info title"><?php echo _e('Instructions') ?></h3>
        			<div class="description"><?php _e('download_instructions') ?></div>
        		</div>
        		
            </div>
    
    </div>
    
    <div class="fluid-container ">
        <div class="row justify-content-center align-items-center">
            <form action="/whatsapp/get_report" class="col" method="post">
                <input name="phone" value="<?php echo _e($phone) ?>" hidden>
                <div class="form-row">
                    <div class="col">
                        <label for="initial_input"><?php _e('Initial') ?></label>
                        <input id="initial_input" type="date" name="initial" class="form-control" placeholder="<?php _e('Initial') ?>" value="<?php echo date('Y-m-d', strtotime('first day of this month')) ?>">
                    </div>
                    <div class="col">
                        <label for="final_input"><?php _e('Final') ?></label>
                        <input id="final_input" type="date" name="final" class="form-control" placeholder="<?php _e('Final') ?>" value="<?php echo date('Y-m-d', strtotime('last day of this month')) ?>">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col">
                        <button class="btn btn-primary w-100"><?php _e('Download Report') ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>