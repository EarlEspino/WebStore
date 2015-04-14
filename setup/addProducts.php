<?php
chdir(__DIR__);
require_once "../include/db.php";

echo "\n------------- ", DBProps::which, "\n\n";

echo "\n--------- categories\n\n";

foreach ([
'video-audio',
'copy-scan',
'storage',
'voice',
'computer',
'network',
'calculator',
'camera',
'accessory',
'printer',
] as $name) {
  $category = R::dispense('category');
  $category->name = $name;
  R::store($category);
}

echo "\n--------- products\n\n";

$products_file = "products.txt";
$descriptions_dir = "descriptions";
if (!file_exists($products_file)) {
  die("missing file $products_file\n");
}
if (!is_dir($descriptions_dir)) {
  die("missing directory $descriptions_dir\n");
}

define("MAX_PRODUCTS", INF);

$products = file($products_file);

R::begin();  // begin transaction

// populate by obtaining title and randomizing binding and quantity
$num = 0;
foreach($products as $str) {
  $info = trim($str);
  if (empty($info)) {
    continue;
  }
  if (substr($info,0,1) == "#") {
    continue;
  }
  if (++$num > MAX_PRODUCTS) {
    break;
  }
  list($category_name,$name,$price,$file) = array_map('trim', explode("|", $info));

  try {
    $category = R::findOne('category', 'name=?', [$category_name]);
    if (is_null($category)) {
      throw new Exception("missing category: $category_name");
    }
    $product = R::dispense('product');
    $product->name = $name;
    $product->category_id = $category->id;
    $product->price = $price;
    $product->image = "$file.jpg";
    $descrip_file = "$descriptions_dir/$file.html";
    if (file_exists($descrip_file)) {
      $product->description = file_get_contents($descrip_file);
    }
    $id = R::store($product);
    echo "\n#$id: $name | $category->name | $price | $file\n";
  }
  catch(Exception $ex) {  // accidental duplicate title
    echo $ex->getMessage(), "\n"; 
  }
}

R::commit(); // commit transaction

