<div class="container">
	<div class="row p-t-25 p-b-25">
		<div class="col-12">

			<div class="alert alert-solid-success p-20 m-b-30" role="alert">
				<?php _e("Your Access Token:")?> <strong><?php _e( _s("team_id") )?></strong>
			</div>			

			<h5 class="border-bottom m-b-30 p-b-20 text-dark text-uppercase"><?php _e("Instance Api")?></h5>
			<h6 class="border-bottom m-b-30 p-b-20 p-t-20" id="create-instance"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Create Instance")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/createinstance.php?access_token="._s("team_id") ) )?>
				</code>
			</div>

			<div class="text">
				<?php _e("Create a new Instance ID")?>
			</div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="get-qr-code"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Get QR Code")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/getqrcode.php?instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text"><?php _e("Display QR code to login to Whatsapp web. You can get the results returned via Webhook")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="set-receving-webhook"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Set Receving Webhook")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/setwebhook.php?webhook_url=https://webhook.site/1b25464d6833784f96eef4xxxxxxxxxx&enable=true&instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text"><?php _e("Get all return values from Whatsapp. Like connection status, Incoming message, Outgoing message, Disconnected, Change Battery,...")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
			  		<tr>
				      	<td class="fw-6">webhook_url</td>
				      	<td>https://webhook.site/1b25464d6833784f96eef4xxxxxxxxxx</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">enable</td>
				      	<td>true</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="reboot-instance"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Reboot Instance")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/reboot.php?instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text">
				<?php _e("Logout Whatsapp web and do a fresh scan")?>
			</div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="reset-instance"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Reset Instance")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/resetinstance.php?instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text">
				<?php _e("This will logout Whatsapp web, Change Instance ID, Delete all old instance data")?>
			</div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="reconnect"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Reconnect")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/reconnect.php?instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text">
				<?php _e("Re-initiate connection from app to Whatsapp web when lost connection")?>
			</div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>
		</div>
	</div>

	<div class="row p-t-25 p-b-25">
		<div class="col-12">
			<h5 class="border-bottom m-b-30 p-b-20 text-dark text-uppercase"><?php _e("Send Direct Message Api")?></h5>
			<h6 class="border-bottom m-b-30 p-b-20 p-t-20" id="send-text"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Send Text")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
			  		<?php _e( get_url("api/send.php?number=84933313xxx&type=text&message=test%20message&instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text"><?php _e("Send a text message to a phone number through the app")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">number</td>
				      	<td>84933313xxx</td>
				    </tr>
			  		<tr>
				      	<td class="fw-6">type</td>
				      	<td>text</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">message</td>
				      	<td>test message</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>
			
			<h6 class="border-bottom m-b-30 p-b-20 p-t-20" id="send-template"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Send Template")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
				    <?php _e( get_url("api/send.php?number=84933313xxx&type=template&message=templateName&instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>
			<div class="text"><?php _e("Send a List/Button Template to a phone number through the app")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">number</td>
				      	<td>84933313xxx</td>
				    </tr>
			  		<tr>
				      	<td class="fw-6">type</td>
				      	<td>template</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">message</td>
				      	<td>Template Name</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>
			
			

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="send-media"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Send Media & File")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/send.php?number=84933313xxx&type=media&message=test%20message&media_url=https://i.pravatar.cc&filename=file_test.jpg&instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text"><?php _e("Send a media or file with message to a phone number through the app")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
			  		<tr>
				      	<td class="fw-6">number</td>
				      	<td>84933313xxx</td>
				    </tr>
			  		<tr>
				      	<td class="fw-6">type</td>
				      	<td>media</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">message</td>
				      	<td>test message</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">media_url</td>
				      	<td>https://i.pravatar.cc</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">filename <span class="text-danger small">(<?php _e("Just use for send document")?>)</span></td>
				      	<td>file_test.pdf</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>
		</div>
	</div>

	<div class="row p-t-25 p-b-25">
		<div class="col-12">
			<h5 class="border-bottom m-b-30 p-b-20 text-dark text-uppercase"><?php _e("Group Api")?></h5>
			<h6 class="border-bottom m-b-30 p-b-20 p-t-20" id="send-text-message-group"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Send Text Message Group")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/sendgroupmsg.php?group_id=84987694574-1618740914@g.us&type=text&message=test%20message&instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text"><?php _e("Send a text message to a group through the app")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
				    <tr>
				      	<td class="fw-6">group_id</td>
				      	<td>84987694574-1618740914@g.us</td>
				    </tr>
			  		<tr>
				      	<td class="fw-6">type</td>
				      	<td>text</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">message</td>
				      	<td>test message</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>

			<h6 class="border-bottom m-b-30 p-b-20 m-t-40 p-t-20" id="send-media-message-group"><span class="text-success fw-6 m-r-5"><?php _e("POST")?></span> <?php _e("Send Media & File Message Group")?></h6>
			<div class="alert alert-dark" role="alert">
				<code class="text-white fs-12">
					<?php _e( get_url("api/sendgroupmsg.php?group_id=84987694574-1618740914@g.us&type=media&message=test%20message&media_url=https://i.pravatar.cc&filename=file_test.jpg&instance_id=609ACF283XXXX&access_token="._s("team_id")) )?>
				</code>
			</div>

			<div class="text"><?php _e("Send a media or file with message to a group through the app")?></div>

			<div class="text-uppercase fs-16 border-bottom m-b-15 p-b-10 m-t-30"><?php _e("Params")?></div>

			<table class="table table-striped table-borderless">
			  	<tbody>
			  		<tr>
				      	<td class="fw-6">group_id</td>
				      	<td>84987694574-1618740914@g.us</td>
				    </tr>
			  		<tr>
				      	<td class="fw-6">type</td>
				      	<td>media</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">message</td>
				      	<td>test message</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">media_url</td>
				      	<td>https://i.pravatar.cc</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">filename <span class="text-danger small">(<?php _e("Just use for send document")?>)</span></td>
				      	<td>file_test.pdf</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">instance_id</td>
				      	<td>609ACF283XXXX</td>
				    </tr>
				    <tr>
				      	<td class="fw-6">access_token</td>
				      	<td><?php _e( _s("team_id") )?></td>
				    </tr>
			  	</tbody>
			</table>
		</div>
	</div>
</div>

