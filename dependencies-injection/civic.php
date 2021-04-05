<?php

  
 class Civic extends Car {
    
    protected $brand = 'civic';

    public function __construct($brand,$color,$price)
    {
      $this->brand = $brand;
      $this->color= $color;
      $this->price = $price;
     
      $this->statement();
    }

    public function calculatedPrice($qty,TotalPrice $TotalPrice){
        return $TotalPrice->calculatePrice($this->brand,$qty);
    }

    


    public static function offer(){
      echo 'if you buy 2 civic car you will get 10% discount one total price';
    }


 }