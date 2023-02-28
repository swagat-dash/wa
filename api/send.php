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
$number = isset($_GET["number"]) ? $_GET["number"] : false;
if ($instance_id) {
    goto c04054b9f3;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
c04054b9f3:
$tb_whatsapp_sessions = $db->table("sp_whatsapp_sessions");
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (!empty($instance)) {
    goto c5a29a05b3;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
c5a29a05b3:
if (!($instance[0]["status"] == 0)) {
    goto F8aa90f5d7;
}
tNUcvSZDvT(["status" => "error", "message" => "This instance ID has not been activated yet"]);
F8aa90f5d7:
$account = $db->table("sp_account_manager")->select("*")->where("token", $instance_id)->where("team_id", $team_id)->get();
if (!empty($account)) {
    goto e5ac52b3d6;
}
tNUcvSZDvT(["status" => "error", "message" => "Account does not exist"]);
e5ac52b3d6:
if (!($account[0]["status"] == 0)) {
    goto c70cf319e9;
}
tNUcvSZDvT(["status" => "error", "message" => "Relogin required"]);
c70cf319e9:
switch ($type) {
    case "text":
        $response = tNUcvSZDvI(tNUcvSZDvP($db, "send_message?type=chat&instance_id=" . $instance_id . "&access_token=" . $team_ids), 
        ["body" => $message, "chat_id" => $number . "@c.us"]);
        goto cc3691c28c;
    case "template":
        $response = tNUcvSZDvI(tNUcvSZDvP($db, "send_message?type=template&instance_id=" . $instance_id . "&access_token=" . $team_ids), 
        ["body" => $message, "chat_id" => $number . "@c.us", "team_id" => $team_id]);
        goto cc3691c28c;
    case "json":
        
        // $json_data= $_POST;
        $json_data = file_get_contents('php://input');
        
        //echo $json_data;
        
        //tNUcvSZDvT($json_data);
        
        $response = tNUcvSZDvI(tNUcvSZDvP($db, "send_message?type=json&instance_id=" . $instance_id . "&access_token=" . $team_ids), 
        ["body" => $json_data, "chat_id" => $number . "@c.us", "team_id" => $team_id]);
        goto cc3691c28c;
    case "media":
        $response = tNUcvSZDvI(tNUcvSZDvP($db, "send_message?type=media&instance_id=" . $instance_id . "&access_token=" . $team_ids), ["body" => $media_url, "chat_id" => $number . "@c.us", "caption" => $message, "filename" => $filename]);
        goto cc3691c28c;
    default:
        tNUcvSZDvT(["status" => "error", "message" => "Message type not supported"]);
        goto cc3691c28c;
}
cc3691c28c:
tNUcvSZDvT(json_decode($response));

