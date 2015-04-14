<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";

$product_id = filter_input(INPUT_GET, 'product_id');
$change = filter_input(INPUT_POST, 'change');
$quantityText = trim(filter_input(INPUT_POST, 'quantityText'));
$is_admin = isset($session->user) && $session->user->is_admin;

//echo ($quantityText);

if (!is_null($change)) {
    if(!is_numeric($quantityText)){
        $session->message = "Error: Enter a valid number";
        
    }
    
    else if($quantityText >= 1){
        unset($session->cart[$product_id]);
        $session->cart[$product_id] +=  $quantityText;
        header("location: cart.php");
    }
    elseif ((int)$quantityText === 0) {
        unset($session->cart[$product_id]);
        //header("location: .");
        header("location: cart.php");
    }
    else{//catch all errors
        
        
        $session->message = "ERROR";
        
        //;
    }
}
//else if(!is_numeric($quantityText)){
//    $message = "ERROR: ENTER A NUMBER";
//}
//else{
//    $message = $session->message;
//}

$product = R::load('product', $product_id);

$message = $session->message;
unset($session->message);

$data = [
  'product' => $product,
  'message' => $message,
  'is_admin' => $is_admin,  
];
$smarty->assign($data);
$smarty->display("productInfo.tpl");

