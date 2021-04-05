<?php 


class TotalPrice extends Car {
   
  public $price = 1000;

  public function __construct($price,$qty)
  {
    $this->price = $price;
    $totalPrice =  $price * $qty;
    echo "<h2>Your total price is {$totalPrice}</h2>";
  }

}