<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$team_ids = $team["ids"];
$instance_id = isset($_GET["instance_id"]) ? $_GET["instance_id"] : false;
if ($instance_id) {
    goto C93e48f99b;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
C93e48f99b:
$tb_whatsapp_sessions = $db->table("sp_whatsapp_sessions");
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (!empty($instance)) {
    goto a7fa1b4611;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
a7fa1b4611:
if (!($instance[0]["status"] == 1)) {
    goto dbc8df5fce;
}
tNUcvSZDvT(["status" => "error", "message" => "This Instance ID has been used"]);
dbc8df5fce:
$result = tNUcvSZDvU(tNUcvSZDvP($db, "get_qrcode?instance_id=" . $instance_id . "&access_token=" . $team_ids));
$result_check = json_decode($result, 2);
if (is_array($result_check)) {
    tNUcvSZDvT($result_check);
    goto Fe78ad1f9d;
}
header("Content-type: image/png");
echo $result;
Fe78ad1f9d:

