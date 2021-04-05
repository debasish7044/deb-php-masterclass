<?php

class Products {
   public $firstProduct = 't-shirt';
   private $uniqueProduct = 'laptop';
   

   public function __construct()
   {
     echo "this is a {$this->firstProduct} and this is {$this->uniqueProduct} <br>";
   }

   protected function sell(){
     echo "this is on sell";
   }
}

class Fruit extends Products {
   
   public $fruit1;

   public function statement($fruit1){
       echo "{$fruit1} ";
       $this->sell();
   }
}


$first =   new Products;

$first->firstProduct = 'Book';

echo $first->firstProduct . "<br>";

$firstFruit = new Fruit;

$firstFruit->statement('Apple');


?>