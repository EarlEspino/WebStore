<?php

class Helper{
    public static function getUser($user_id){
        return R::findOne('user', "id=$user_id");
    }
    
    public static function getDate($timestamp){
        $format = "M j, Y H:i:s";
        return date($format,$timestamp);
    }
    
    public static function getProduct($product_id){
        return R::findOne('product', "id=$product_id");
    }
    
//    public static function getDescription($product){
//        
//                
//    }
}

