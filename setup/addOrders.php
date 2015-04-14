<?php
chdir(__DIR__);

require_once "../include/db.php";

echo "\n------------- ", DBProps::which, "\n\n";

define("SECONDS_PER_DAY", 3600 * 24);

$now = time();

R::begin();

$alice = R::findOne('user','name=?',array("alice"));
$john = R::findOne('user','name=?',array("john"));
$bill = R::findOne('user','name=?',array("bill"));
$dave = R::findOne('user','name=?',array("dave"));

$product1 = R::load('product', 1);
$product3 = R::load('product',3);
$product5 = R::load('product', 5);
$product6 = R::load('product', 6);
$product13 = R::load('product', 13);
$product15 = R::load('product', 15);
$product22 = R::load('product', 22);
$product26 = R::load('product', 26);
$product31 = R::load('product', 31);

$user = $alice;
$order = R::dispense('order');
$order->user_id = $user->id;
$order->created_at = $now - 7 * SECONDS_PER_DAY;
$order->link('orderproduct', 
        array('quantity' => 2,'price'=>$product1->price))->product = $product1;
$order->link('orderproduct', 
        array('quantity' => 3,'price'=>$product5->price))->product = $product5;
$id = R::store($order);
echo "#$id: $user->name\n";

$user = $alice;
$order = R::dispense('order');
$order->user_id = $user->id;
$order->created_at = $now - 6 * SECONDS_PER_DAY;
$order->link('orderproduct', 
        array('quantity' => 3,'price'=>$product13->price))->product = $product13;
$order->link('orderproduct', 
        array('quantity' => 1,'price'=>$product22->price))->product = $product22;
$id = R::store($order);
echo "#$id: $user->name\n";

$user = $bill;
$order = R::dispense('order');
$order->user_id = $user->id;
$order->created_at = $now - 5 * SECONDS_PER_DAY;
$order->link('orderproduct', 
        array('quantity' => 1,'price'=>$product22->price))->product = $product22;
$order->link('orderproduct', 
        array('quantity' => 2,'price'=>$product26->price))->product = $product26;
$id = R::store($order);
echo "#$id: $user->name\n";

$user = $alice;
$order = R::dispense('order');
$order->user_id = $user->id;
$order->created_at = $now - 5 * SECONDS_PER_DAY;
$order->link('orderproduct', 
        array('quantity' => 4,'price'=>$product3->price))->product = $product3;
$order->link('orderproduct', 
        array('quantity' => 1,'price'=>$product31->price))->product = $product31;
$id = R::store($order);
echo "#$id: $user->name\n";

$user = $bill;
$order = R::dispense('order');
$order->user_id = $user->id;
$order->created_at = $now - 3 * SECONDS_PER_DAY;
$order->link('orderproduct', 
        array('quantity' => 1,'price'=>$product1->price))->product = $product1;
$order->link('orderproduct', 
        array('quantity' => 3,'price'=>$product3->price))->product = $product3;
$order->link('orderproduct', 
        array('quantity' => 1,'price'=>$product5->price))->product = $product5;
$order->link('orderproduct', 
        array('quantity' => 2,'price'=>$product6->price))->product = $product6;
$id = R::store($order);
echo "#$id: $user->name\n";

$user = $dave;
$order = R::dispense('order');
$order->user_id = $user->id;
$order->created_at = $now - 2 * SECONDS_PER_DAY;
$order->link('orderproduct', 
        array('quantity' => 3,'price'=>$product22->price))->product = $product22;
$order->link('orderproduct', 
        array('quantity' => 1,'price'=>$product31->price))->product = $product31;
$id = R::store($order);
echo "#$id: $user->name\n";

R::commit();
