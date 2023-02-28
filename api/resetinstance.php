<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$team_ids = $team["ids"];
$instance_id = isset($_GET["instance_id"]) ? $_GET["instance_id"] : false;
if ($instance_id) {
    goto Df776e500f;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
Df776e500f:
$account_manager = $db->table("sp_account_manager")->select()->where("token", $instance_id)->where("team_id", $team_id)->get();
if (!empty($account_manager)) {
    goto aab4236717;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
aab4236717:
$result = tNUcvSZDvU(tNUcvSZDvP($db, "logout?instance_id=" . $instance_id . "&access_token=" . $team_ids));
$db->table("sp_whatsapp_schedules")->delete()->where("account_id", $account_manager[0]["id"])->execute();
$db->table("sp_account_manager")->delete()->where("id", $account_manager[0]["id"])->execute();
$db->table("sp_whatsapp_autoresponder")->delete()->where("instance_id", $instance_id)->where("team_id", $team_id)->execute();
$db->table("sp_whatsapp_chatbot")->delete()->where("instance_id", $instance_id)->where("team_id", $team_id)->execute();
$db->table("sp_whatsapp_sessions")->delete()->where("instance_id", $instance_id)->where("team_id", $team_id)->execute();
$db->table("sp_whatsapp_webhook")->delete()->where("instance_id", $instance_id)->where("team_id", $team_id)->execute();
tNUcvSZDvT(["status" => "success", "message" => "Reset Instance ID was successful"]);

