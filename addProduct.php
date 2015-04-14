<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";

$categories_db = R::findAll('category', "order by name");
//$categories[0] = "-- ALL --";
foreach($categories_db as $category) {
  $categories[$category->id] = $category->name;
}

$category_id = filter_input(INPUT_POST, 'category_id');
$name = filter_input(INPUT_POST,'name');
$price = filter_input(INPUT_POST,'price');
$description = filter_input(INPUT_POST,'description');
$image = filter_input(INPUT_POST, 'image');
$submit = filter_input(INPUT_POST,'submit');



if(!is_null($submit)){
    if(strlen($name)<3){
        $session->message = "Name must have at least 3 characters; ";
        //header("location: .");
    }
    if(!is_numeric($price||is_null($price))){
        $session->message .= "Price must be numeric; ";
        //header("location: .");
    }
    
    $product = R::dispense('product');
    $product->name = $name;
    $product->price = $price;
    $product->category_id = $category_id;
    if(!is_null($description)){$product->description = $description;}
    if(!is_null($image)){$product->image = $image;}
    $product_id = R::store($product);
    header("location: productInfo.php?product_id=$product_id");
}
$message = $session->message;
unset($session->message);
$data = [
    'categories' => $categories,
    'id' => $category_id,
    'message' => $message,
];

$smarty->assign($data);
$smarty->display("addProduct.tpl");

