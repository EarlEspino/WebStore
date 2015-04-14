<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";
require_once "include/helper.php";

$order_id = filter_input(INPUT_GET,'order_id');
$total = 0;
$orderproduct_info = R::findAll('orderproduct', "order_id = $order_id");
$is_admin = isset($session->user) && $session->user->is_admin;


foreach ($orderproduct_info as $info){
    $total += ($info->price)*($info->quantity);  
}

$message = $session->message;
unset($session->message);

$remove_sure = $session->remove_sure;
unset($session->remove_sure);

$data = [
    'orderproduct_info' => $orderproduct_info,
    'order_id' => $order_id,
    'helper' => new Helper(),
    'total' => $total,
    'is_admin' => $is_admin,
    'remove_sure' => $remove_sure,
    'message' => $message,
];

$smarty->assign($data);
$smarty->display("orderDetails.tpl");
