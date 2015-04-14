<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";

$product_id = filter_input(INPUT_POST, 'product_id');
$submit = filter_input(INPUT_POST,'submit');
//$price = filter_input(INPUT_POST,'price');

$product = R::load('product', $product_id);
$name = $product->name;
//echo $name;
$category_id = $product->category_id;
$category = R::load('category', $product->category_id);
echo $product->description;

$descrip_dir = "setup/descriptions";

if(!is_null($submit)){
    $product->name = $name;
    $product->category_id = $category_id;
    $product->price = number_format(trim(filter_input(INPUT_POST, 'price'),2));
    $product->description = filter_input(INPUT_POST, 'description');
    $product->image = trim(filter_input(INPUT_POST, 'image'));
    
    if(!is_numeric($product->price) || $product->price<=0){
        $session->message = "Enter a valid price";
    }
    else {
        R::store($product);
        $session->message = "You successfully modified this product";   
    }
}

$message = $session->message;
unset($session->message);
$data = [
  'product' => $product,
  'description' => $product->description,  
  'category_name' =>$category->name, 
  'message' => $message,  
];

$smarty->assign($data);
$smarty->display("modifyProduct.tpl");