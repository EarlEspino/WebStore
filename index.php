<?php
require_once "include/smarty.php";
require_once "include/db.php";
require_once "include/session.php";

$categories_db = R::findAll('category', "order by name");
$categories[0] = "-- ALL --";
foreach($categories_db as $category) {
  $categories[$category->id] = $category->name;
}

$orderField = filter_input(INPUT_GET, 'orderField');
$category_id = filter_input(INPUT_GET, 'category_id');
$doit = filter_input(INPUT_GET, 'doit');



if (is_null($orderField)) {
  $orderField = "name";
}
if(!is_null($doit)) {
    //echo $category_id;
    //echo R::loadMulti('product', $category_id);
    //$products = R::load('product', 7);
  $products = R::findAll('product', "category_id = $category_id order by name asc");  
    
}

else{
  $products = R::findAll('product', "order by $orderField asc");
}
 



$data = [
  'products' => $products,
  'categories' => $categories,
  'id' => $category_id,
  'name' => $category, 
];
$smarty->assign($data);
$smarty->display("index.tpl");

