<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";

$cart_info = [];
$total = 0;
$valid = isset($session->user);

if(!is_null($session->cart)){    
    foreach($session->cart as $product_id => $quantity) {
        $product = R::load('product', $product_id);
        $cart_info[] = (object) [
            'id' => $product_id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
        ];
        $total += ($product->price)*($quantity);
    }
    //$user = R::load('user', $session->user->id);
    
}



$message = $session->message;
unset($session->message);
$data = [
  'cart_info' => $cart_info,
  'total' => $total, 
  'message' => $message,
  'valid' => $valid,  
];
$smarty->assign($data);
$smarty->display("cart.tpl");

