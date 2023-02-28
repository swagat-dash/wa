<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$team_ids = $team["ids"];
$instance_id = isset($_GET["instance_id"]) ? $_GET["instance_id"] : false;
if ($instance_id) {
    goto A79b469776;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
A79b469776:
$tb_whatsapp_sessions = $db->table("sp_whatsapp_sessions");
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (!empty($instance)) {
    goto Ea31ba9a2d;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
Ea31ba9a2d:
if (!($instance[0]["status"] == 0)) {
    goto b9af270f11;
}
tNUcvSZDvT(["status" => "error", "message" => "This instance ID has not been activated yet"]);
b9af270f11:
$result = tNUcvSZDvU(tNUcvSZDvP($db, "logout?instance_id=" . $instance_id . "&access_token=" . $team_ids));
$db->table("sp_whatsapp_sessions")->update()->set("status", 0)->where("status", 1)->where("instance_id", $instance_id)->execute();
tNUcvSZDvT(json_decode($result, 2));

