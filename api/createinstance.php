<?php

require_once "functions/helper.php";
$db = tNUcvSZDvW();
$team = tNUcvSZDvO($db);
$team_id = $team["id"];
$permissions = json_decode($team["permissions"]);
$number_accounts = isset($permissions->number_accounts) ? $permissions->number_accounts : 0;
$accounts = $db->table("sp_account_manager")->select("*")->where("social_network", "whatsapp")->where("login_type", 2)->where("team_id", $team_id)->get();
if (!(count($accounts) >= $number_accounts)) {
    goto c2357597ba;
}
tNUcvSZDvT(["status" => "error", "message" => sprintf("You can only add up to %s Whatsapp accounts", $number_accounts)]);
c2357597ba:
$tb_whatsapp_sessions = $db->table("sp_whatsapp_sessions");
$instance = $db->table("sp_whatsapp_sessions")->select("*")->where("status", 0)->where("team_id", $team_id)->get();
if (empty($instance)) {
    $instance_id = tNUcvSZDvR();
    $result = $tb_whatsapp_sessions->insert([["ids" => ids(), "instance_id" => $instance_id, "team_id" => $team["id"], "data" => NULL, "status" => 0]])->execute();
    goto Aa037263e8;
}
$instance_id = $instance[0]["instance_id"];
Aa037263e8:
tNUcvSZDvT(["status" => "success", "message" => "Instance ID generated successfully", "instance_id" => $instance_id]);

