<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$team_ids = $team["ids"];
$instance_id = isset($_GET["instance_id"]) ? $_GET["instance_id"] : false;
$type = isset($_GET["type"]) ? $_GET["type"] : false;
$message = isset($_GET["message"]) ? $_GET["message"] : false;
$filename = isset($_GET["filename"]) ? $_GET["filename"] : false;
$media_url = isset($_GET["media_url"]) ? $_GET["media_url"] : false;
$group_id = isset($_GET["group_id"]) ? $_GET["group_id"] : false;
if ($instance_id) {
    goto F51be5656e;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
F51be5656e:
$tb_whatsapp_sessions = $db->table("sp_whatsapp_sessions");
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (!empty($instance)) {
    goto dc4df88c41;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
dc4df88c41:
if (!($instance[0]["status"] == 0)) {
    goto ba0fabb8e4;
}
tNUcvSZDvT(["status" => "error", "message" => "This instance ID has not been activated yet"]);
ba0fabb8e4:
$account = $db->table("sp_account_manager")->select("*")->where("token", $instance_id)->where("team_id", $team_id)->get();
if (!empty($account)) {
    goto e0e899b1f3;
}
tNUcvSZDvT(["status" => "error", "message" => "Account does not exist"]);
e0e899b1f3:
if (!($account[0]["status"] == 0)) {
    goto db471519f3;
}
tNUcvSZDvT(["status" => "error", "message" => "Relogin required"]);
db471519f3:
switch ($type) {
    case "text":
        $response = tNUcvSZDvI(tNUcvSZDvP($db, "send_message?type=chat&instance_id=" . $instance_id . "&access_token=" . $team_ids), ["body" => $message, "chat_id" => $group_id]);
        goto e3774bd338;
    case "media":
        $response = tNUcvSZDvI(tNUcvSZDvP($db, "send_message?type=media&instance_id=" . $instance_id . "&access_token=" . $team_ids), ["body" => $media_url, "chat_id" => $group_id, "caption" => $message, "filename" => $filename]);
        goto e3774bd338;
    default:
        tNUcvSZDvT(["status" => "error", "message" => "Message type not supported"]);
        goto e3774bd338;
}
e3774bd338:
tNUcvSZDvT(json_decode($response));

