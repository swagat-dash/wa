<?php 
$team_id = _t("id");
$team_ids = _t("ids");

$wa_message_sent_today = 0;
$wa_bulk_total_count = 0;
$wa_bulk_sent_count = 0;
$wa_bulk_failed_count = 0;
$wa_autoresponder_count = 0;
$wa_chatbot_count = 0;

$stats = $this->main_model->get("*", "sp_whatsapp_stats", "team_id = '".$team_ids."'");

if( !empty($stats) ){
	$wa_message_sent_today = (int)$stats->wa_message_sent_today;
	$wa_bulk_total_count = (int)$stats->wa_bulk_total_count;
	$wa_bulk_sent_count = (int)$stats->wa_bulk_sent_count;
	$wa_bulk_failed_count = (int)$stats->wa_bulk_failed_count;
	$wa_autoresponder_count = (int)$stats->wa_autoresponder_count;
	$wa_chatbot_count = (int)$stats->wa_chatbot_count;
}

$bulks = $this->main_model->fetch("*", "sp_whatsapp_schedules", "team_id = '".$team_id."'");
$bulk_data = [];
$bulk_total = 0;
$bulk_sent = 0;
$bulk_failed = 0;
$this->db->select("a.*, b.id as account_id, b.name as account_name, b.username as account_username");
$this->db->from("sp_whatsapp_schedules as a");
$this->db->join("sp_account_manager as b", "a.account_id = b.id");
$this->db->where("a.team_id = '{$team_id}'");
$this->db->order_by("b.id", "ASC");
$this->db->group_by("a.id");
$bulk_query = $this->db->get();
if($bulk_query){
	$bulks = $bulk_query->result();

	foreach ($bulks as $key => $value) {

		$sent = (int)$value->sent;
		if(isset($bulk_data[$value->account_id]) ){
			$sent = $bulk_data[$value->account_id]['sent'] + $sent;
		}

		$failed = (int)$value->failed;
		if(isset($bulk_data[$value->account_id]) ){
			$failed = $bulk_data[$value->account_id]['failed'] + $failed;
		}

		$bulk_data[$value->account_id] = [
			"account_name" => $value->account_name, 
			"account_username" => $value->account_username, 
			"sent" => $sent,
			"failed" => $failed
		];

		$bulk_total += (int)$value->sent + (int)$value->failed;
		$bulk_sent += (int)$value->sent;
		$bulk_failed += (int)$value->failed;
	}
}

$bulk_data = json_decode( json_encode($bulk_data) );

$autoresponders = false;
$this->db->select("a.*, b.id as account_id, b.name as account_name, b.username as account_username");
$this->db->from("sp_whatsapp_autoresponder as a");
$this->db->join("sp_account_manager as b", "a.instance_id = b.token");
$this->db->where("a.team_id = '{$team_id}'");
$this->db->order_by("b.id", "ASC");
$autoresponder_query = $this->db->get();
if($autoresponder_query){
	$autoresponders = $autoresponder_query->result();
}

$chatbots = false;
$this->db->select("a.*, b.id as account_id, b.name as account_name, b.username as account_username");
$this->db->from("sp_whatsapp_chatbot as a");
$this->db->join("sp_account_manager as b", "a.instance_id = b.token");
$this->db->where("a.team_id = '{$team_id}'");
$this->db->order_by("b.id", "ASC");
$chatbot_query = $this->db->get();
if($chatbot_query){
	$chatbots = $chatbot_query->result();
}
?>
<div class="m-auto" style="max-width: 1024px;">
	<div class="row">
		<div class="col-md-12 m-b-25">
			<div class="p-25 bg-solid-info rounded">
	            <div class="wrap-m">
	                <div>
	                    <h3 class="success w-100"><?php _e( sprintf( "%s of %s", $wa_message_sent_today, _p("whatsapp_message_per_day") ) )?></h3>
	                    <div><?php _e('Messages/month')?></div>
	                </div>
	                <div class="wrap-c">
	                    <i class="fas fa-paper-plane float-right text-info fs-45"></i>
	                </div>
	            </div>
	        </div>
		</div>
	</div>

	<?php if( _p("whatsapp_bulk") ){?>
	<div class="row">
		<div class="col-md-12"><h5 class="m-t-50 m-b-20 text-success"><?php _e("Bulk messaging")?></h5></div>
		<div class="col-md-4 m-b-25">
			<div class="p-25 bg-solid-success rounded">
	            <div class="wrap-m">
	                <div>
	                    <h3 class="primary"><?php _e( $wa_bulk_total_count )?></h3>
	                    <span><?php _e('Total')?></span>
	                </div>
	                <div class="wrap-c">
	                    <i class="fas fa-calendar-check float-right text-success fs-45"></i>
	                </div>
	            </div>
	        </div>
		</div>
		<div class="col-md-4 m-b-25">
			<div class="p-25 bg-solid-info rounded">
	            <div class="wrap-m">
	                <div>
	                    <h3 class="success w-100"><?php _e( $wa_bulk_sent_count )?></h3>
	                    <div><?php _e('Sent')?></div>
	                </div>
	                <div class="wrap-c">
	                    <i class="fas fa-paper-plane float-right text-info fs-45"></i>
	                </div>
	            </div>
	        </div>
		</div>
		<div class="col-md-4 m-b-25">
			<div class="p-25 bg-solid-warning rounded">
	            <div class="wrap-m">
	                <div>
	                    <h3 class="danger"><?php _e( $wa_bulk_failed_count )?></h3>
	                    <span><?php _e('Failed')?></span>
	                </div>
	                <div class="wrap-c">
	                    <i class="fas fa-exclamation-triangle float-right text-warning fs-45"></i>
	                </div>
	            </div>
	        </div>
		</div>
		<?php if(!empty($bulk_data)){?>
		<div class="col-md-12">
			<table class="table">
			  	<thead class="thead-dark">
			   		<tr>
			      		<th scope="col"><?php _e("Whatsapp account")?></th>
			      		<th scope="col"><?php _e("Sent")?></th>
			      		<th scope="col"><?php _e("Failed")?></th>
			    	</tr>
			  	</thead>
			  	<tbody>
			  		<?php foreach ($bulk_data as $key => $value): ?>
			    	<tr>
			      		<td><?php _e( $value->account_name . " (".$value->account_username.")" )?></td>
			      		<td><?php _e( $value->sent )?></td>
			      		<td><?php _e( $value->failed )?></td>
			    	</tr>
			    	<?php endforeach ?>
			  	</tbody>
			</table>
		</div>	
		<?php }?>
	</div>
	<?php }?>

	<?php if( _p("whatsapp_autoresponder") ){?>
	<div class="row">
		<div class="col-md-12"><h5 class="m-t-50 m-b-20 text-success"><?php _e("Autoresponder")?></h5></div>
		<div class="col-md-12 m-b-25">
			<div class="p-25 bg-solid-info rounded">
	            <div class="wrap-m">
	                <div>
	                    <h3 class="success w-100"><?php _e( $wa_autoresponder_count )?></h3>
	                    <div><?php _e('Sent')?></div>
	                </div>
	                <div class="wrap-c">
	                    <i class="fas fa-paper-plane float-right text-info fs-45"></i>
	                </div>
	            </div>
	        </div>
		</div>
		<?php if( !empty($autoresponders) ){?>
		<div class="col-md-12">
			<table class="table">
			  	<thead class="thead-dark">
			    	<tr>
			      		<th scope="col"><?php _e("Whatsapp account")?></th>
			      		<th scope="col"><?php _e("Sent")?></th>
			    	</tr>
			  	</thead>
			  	<tbody>
			  		<?php foreach ($autoresponders as $key => $value): ?>
				    <tr>
				      	<td><?php _e( $value->account_name . " (".$value->account_username.")" )?></td>
				      	<td><?php _e( (int)$value->sent )?></td>
				    </tr>
			  		<?php endforeach ?>
			  	</tbody>
			</table>
		</div>	
		<?php }?>
	</div>
	<?php }?>

	<?php if( _p("whatsapp_chatbot") ){?>
	<div class="row">
		<div class="col-md-12"><h5 class="m-t-50 m-b-20 text-success"><?php _e("Chatbot")?></h5></div>
		<div class="col-md-12 m-b-25">
			<div class="p-25 bg-solid-info rounded">
	            <div class="wrap-m">
	                <div>
	                    <h3 class="success w-100"><?php _e( $wa_chatbot_count )?></h3>
	                    <div><?php _e('Sent')?></div>
	                </div>
	                <div class="wrap-c">
	                    <i class="fas fa-paper-plane float-right text-info fs-45"></i>
	                </div>
	            </div>
	        </div>
		</div>

		<?php if( !empty($chatbots) ){?>
		<div class="col-md-12">
			<table class="table">
			  	<thead class="thead-dark">
			    	<tr>
			      		<th scope="col"><?php _e("Chatbot item")?></th>
			      		<th scope="col"><?php _e("Sent")?></th>
			    	</tr>
			  	</thead>
			  	<tbody>
			  		<?php 
			  		$account_id = 0;
			  		$account_tmp = 0;
			  		$total = 0;
			  		foreach ($chatbots as $key => $value){ 
			  		?>
			  			<?php 
			  			if($key == 0){
			  				$account_id = $value->account_id;
			  			?>
			  			<tr>
					      	<td colspan="2" class="text-success fw-6 text-uppercase"><?php _e( $value->account_name . " (".$value->account_username.")" )?></td>
					    </tr>
			  			<?php }?>

					    

					    <?php if ($account_id != $value->account_id){
					    	$account_id = $value->account_id;
					    ?>
					    	<tr class="text-danger bg-light">
						      	<td class="fw-6 text-uppercase"><?php _e( "Total" )?></td>
						      	<td class="fw-6"><?php _e( (int)$total )?></td>
						    </tr>
						    <tr>
						      	<td colspan="2" class="text-success fw-6 text-uppercase"><?php _e( $value->account_name . " (".$value->account_username.")" )?></td>
						    </tr>
						    <tr>
						      	<td><?php _e( $value->name )?></td>
						      	<td><?php _e( (int)$value->sent )?></td>
						    </tr>
					    <?php $total = 0; }else{ ?>
							<tr>
						      	<td><?php _e( $value->name )?></td>
						      	<td><?php _e( (int)$value->sent )?></td>
						    </tr>
						<?php }?>

						<?php if ($key == count($chatbots) - 1): $total += (int)$value->sent; ?>
							<tr class="text-danger bg-light">
						      	<td class="fw-6 text-uppercase"><?php _e( "Total" )?></td>
						      	<td class="fw-6"><?php _e( (int)$total )?></td>
						    </tr>
						<?php endif ?>
			  		<?php
			  			$total += (int)$value->sent;
			  		} 
			  		?>
			  	</tbody>
			</table>
		</div>	
		<?php }?>
	</div>
	<?php }?>
</div>