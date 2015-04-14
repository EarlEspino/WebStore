<?php
require_once "include/smarty.php";
require_once "include/session.php";

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

if (isset($session->valid)) {
  header("location: .");
  exit();
}

$username = $session->username;
$message = $session->message;
unset($session->message);
unset($session->username);
$data = [
    'message' => $message,
    'username' => $username,
];
$smarty->assign($data);
$smarty->display("login.tpl");
