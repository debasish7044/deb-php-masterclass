
<?php 


   class Car {
     
     public static $carCollection = ['civic', 'honda'];
     protected $door = 4;

     public function statement(){
    
      echo "This car is in {$this->brand} brand. It has {$this->color} color & 
      {$this->door} doors.The price of this car is {$this->price}
      <br>";

    }
   
   }

















