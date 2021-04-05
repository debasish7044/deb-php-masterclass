<?php

require_once('car.php');

class Brand extends Car {
   
  public $brand = 'Honda';
  public $price = 1000;

  public function __construct($brand, $color,$door = 4,$price)
  {
    $this->brand = $brand;
    $this->color = $color;
    $this->door = $door;
    $this->price =$price;
      
    $this->statement();
  }

}