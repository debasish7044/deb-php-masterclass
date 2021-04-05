
<?php

 require('car.php');
  
 class Honda extends Car {

    protected $brand = 'honda';
   
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


 }


