<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";
require_once "include/helper.php";

$order_info = R::findAll('order', "order by created_at");


$data = [
  'order_info' => $order_info, 
  
  'helper' => new Helper(), 
];

$smarty->assign($data);
$smarty->display("viewAllOrders.tpl");
