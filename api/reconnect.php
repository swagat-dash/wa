<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$team_ids = $team["ids"];
$instance_id = isset($_GET["instance_id"]) ? $_GET["instance_id"] : false;
if ($instance_id) {
    goto Ababca5f33;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
Ababca5f33:
$tb_whatsapp_sessions = $db->table("sp_whatsapp_sessions");
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (!empty($instance)) {
    goto E6aa10720e;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
E6aa10720e:
if (!($instance[0]["status"] == 0)) {
    goto e0d1f9f5ea;
}
tNUcvSZDvT(["status" => "error", "message" => "This instance ID has not been activated yet"]);
e0d1f9f5ea:
$result = tNUcvSZDvU(tNUcvSZDvP($db, "instance?instance_id=" . $instance_id . "&access_token=" . $team_ids));
tNUcvSZDvT(json_decode($result, 2));

