<?php


class Car {

  public $color = "red";
  public $door = 4;

  public function statement(){
    
    echo "<h3>This car is in {$this->brand} brand. It has {$this->color} color & 
    {$this->door} door.The price of this car is {$this->price}
    </h3>";

  }
}