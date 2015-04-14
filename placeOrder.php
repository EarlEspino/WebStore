<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";

$order = R::dispense('order');
$order->user_id = $session->user->id;
$order->created_at = time();
$order_id = R::store($order);

foreach($session->cart as $product_id => $quantity) {
    $product = R::load('product', $product_id);
    $order_product = R::dispense('orderproduct');
    $order_product->order_id = $order_id;
    $order_product->product_id = $product_id;
    $order_product->quantity = $quantity;
    $order_product->price = $product->price;
    $order_product_id = R::store($order_product);
}
$session->message = "Your order has been placed. Thank you!";
unset($session->cart);
header("location: cart.php");
