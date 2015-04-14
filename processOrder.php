<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";
require_once "include/helper.php";


$order_id = filter_input(INPUT_POST,'order_id');
$remove_sure = filter_input(INPUT_POST,'remove_sure');


if($order_id==0){
    $session->message = "order does not exist";
}

if($remove_sure==="yes"){
    $order = R::load('order', $order_id);
    R::trash($order);
    $orderproduct = R::findAll('orderproduct',"order_id=?",[$order_id]);
    
    
    R::trashAll($orderproduct);
    header("location: viewAllOrders.php ");
    exit();
}

$session->message = "Processing an order means deleting it. Are you sure?";
$session->remove_sure = "yes";
header("location: orderDetails.php?order_id=$order_id ");