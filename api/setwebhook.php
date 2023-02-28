<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$team_ids = $team["ids"];
$instance_id = isset($_GET["instance_id"]) ? $_GET["instance_id"] : false;
$status = isset($_GET["enable"]) && $_GET["enable"] == "true" ? 1 : 0;
$webhook_url = isset($_GET["webhook_url"]) ? $_GET["webhook_url"] : false;
if ($instance_id) {
    goto a8211824e6;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
a8211824e6:
if (filter_var($webhook_url, FILTER_VALIDATE_URL)) {
    goto Fb2c3131f6;
}
tNUcvSZDvT(["status" => "error", "message" => "Webhook is not a valid URL"]);
Fb2c3131f6:
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (!empty($instance)) {
    goto edc5d3fba9;
}
tNUcvSZDvT(["status" => "error", "message" => "Instance ID Invalidated"]);
edc5d3fba9:
$webhook = $db->table("sp_whatsapp_webhook")->select("*")->where("instance_id", $instance_id)->where("team_id", $team_id)->get();
if (empty($webhook)) {
    $db->table("sp_whatsapp_webhook")->insert([["ids" => ids(), "instance_id" => $instance_id, "team_id" => $team_id, "webhook_url" => $webhook_url, "status" => $status]])->execute();
    goto d3d530fb09;
}
$db->table("sp_whatsapp_webhook")->update()->set("webhook_url", $webhook_url)->set("status", $status)->where("instance_id", $instance_id)->where("team_id", $team_id)->execute();
d3d530fb09:
tNUcvSZDvT(["status" => "success", "message" => "Webhook URI Saved"]);

