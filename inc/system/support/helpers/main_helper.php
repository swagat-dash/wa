<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(!function_exists("send_mail_ticket")){
	function send_mail_ticket($type, $uid, $new_ticket, $idticket, $emailreceptor){
		include __DIR__.'/../libraries/vendor/autoload.php';
		$CI = &get_instance();

		switch ($type) {
			case 'create':
				$subject = get_option('email_support_create_subject', '#{id_ticket} New Tiket! {full_name} it needs your help.');
				$content = get_option('email_support_create_content', '<p><strong>Hello {full_name} has created a new ticket in {website_name}.</strong></p> <blockquote> <p>{text_ticket}</p> </blockquote> <p>Enter now in the Support Center to see your ticket and respond to it.<br /> <a href="{support_link}">{support_link}</a></p>');
				break;
			case 'reply':
				$subject = get_option('email_support_reply_subject', '#{id_ticket} {full_name} has answered the ticket!');
				$content = get_option('email_support_reply_content', '<p><strong>Hello, {full_name} has answered the ticket!</strong></p> <blockquote> <p>{text_ticket}</p> </blockquote> <p>Enter now in the Support Center to see your ticket and respond to it.<br /> <a href="{support_link}">{support_link}</a></p>');
				break;
		}

		$variables = [
            "{full_name}" => get_full_name_ids($uid),
            "{email}" => get_email_ids($uid),
            "{website_name}" => get_option('website_title', 'Stackposts - Social Marketing Tool'),
			"{website_link}" => get_url(),
			"{support_link}" => get_url()."support/index/ticket/".$idticket,
			"{text_ticket}" => $new_ticket,
			"{id_ticket}" => $idticket,
        ];

        $subject =  str_replace(
                        array_keys($variables), 
                        array_values($variables), 
                        $subject
                    );

       	$content =  str_replace(
                        array_keys($variables), 
                        array_values($variables), 
                        $content
                    );

		try {
			$mail = new PHPMailer(true);
			$mail->CharSet = 'UTF-8';

			if(get_option("email_protocal", 1) == 2){
			    //Server settings
				$mail->SMTPDebug = SMTP::DEBUG_OFF;
				//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			    $mail->isSMTP();
			    $mail->Host       = get_option('email_smtp_server', '');
			    $mail->SMTPAuth   = true; 
			    $mail->Username   = get_option('email_smtp_username', '');
			    $mail->Password   = get_option('email_smtp_password', '');
				//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				$mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
					)
				); 
			    $mail->Port       = get_option('email_smtp_port', '');
			}

		    //Recipients
		    $mail->setFrom(get_option('email_from', 'example@gmail.com'), get_option('email_name', 'Stackposts'));
		    $mail->addAddress($emailreceptor, get_full_name($uid));
		    $mail->addReplyTo(get_option('email_from', 'example@gmail.com'), get_option('email_name', 'Stackposts'));

		    // Content
		    $mail->isHTML(true); 
		    $mail->Subject = $subject;
		    $mail->Body    = $content;
		    $mail->AltBody = strip_tags($content);

		    $mail->send();

	    	return [
		    	"status" => "success",
		    	"message" => __("Success")
		    ];
		} catch (Exception $e) {
		    return [
		    	"status" => "error",
		    	"message" => __("Message could not be sent. Mailer Error: {$mail->ErrorInfo}")
		    ];
		}
	}
}

if(!function_exists("get_full_name_ids")){
	function get_full_name_ids($uid){
		$CI = &get_instance();
		$result = $CI->main_model->get("*", "sp_users", "ids = '".$uid."'");
		return $result->fullname;
	}
}

if(!function_exists("get_email_ids")){
	function get_email_ids($uid){
		$CI = &get_instance();
		$result = $CI->main_model->get("*", "sp_users", "ids = '".$uid."'");
		return $result->email;
	}
}

if(!function_exists("access_ticket")){
	function access_ticket($ticketid){
		$CI = &get_instance();
		$uid = _u("ids");
		$admininfo = $CI->main_model->get("*", "sp_users", "ids = '".$uid."'");
		if($admininfo->role == 0){
			$result = $CI->main_model->get("*", "sp_tickets", "id = '".$ticketid."'");
			if($result->user != $uid){
				return false;
			}
		}
		return true;
	}
}