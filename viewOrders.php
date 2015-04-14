<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";
require_once "include/helper.php";

$user_id = $session->user->id;
$user = R::load('user', $user_id);

$date = date_create();

$order_info = R::findAll('order', "user_id = $user_id order by created_at desc");

$data = [
  'order_info' => $order_info, 
  'helper' => new Helper(),  
];

$smarty->assign($data);
$smarty->display("viewOrders.tpl");