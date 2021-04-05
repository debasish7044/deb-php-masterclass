<?php


class Products {
  
   public static $products = [
      "laptop",
      "computer",
      "watch",
      "speaker",
      "router"
   ];
  
   public function __construct()
   {
     foreach(self::$products as $product){
      echo  "<ul>
           <li>{$product}</li>
        </ul>";
     }
   }

   public static function Welcome ($name){
     echo "Welcome {$name}";
   }
}

echo Products::Welcome("Debasish");

new Products;

