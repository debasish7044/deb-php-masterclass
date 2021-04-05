<?php



class Car {

 
  public function __construct($name,$color,$doors,$price,$count = 1)
  {
    $this->name = $name;
    $this->color = $color;
    $this->doors = $doors;
    $this->price = $price;
    $this->count = $count;

    $this->statement();
   
    if($count > 1){
       $this->calculatePrice();
    }
  }

  public function statement(){
     echo  "{$this->name} car has {$this->color} color with {$this->doors} doors & The price of this car is {$this->price} <br>";
  }

  public function calculatePrice(){
      $totalPrice = $this->price * $this->count;
      echo "your total price is {$totalPrice}";
  }


}
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
    $count = $_POST['count'];
    $honda =  new Car('honda','red',4,250000,$count);
 }else {
    $count = 1;
    $honda = new Car('honda','red',4,250000,$count);
 }



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  
  <form action="" method="POST">
   <input type="number" name='count' placeholder="How many cars" >
   <input type="submit" value="submit">
  </form>


</body>
</html>