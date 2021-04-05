<?php

require('honda.php');
require('civic.php');
require('totalPrice.php');


 if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
          if(isset($_POST['brand'])){
          
          if($_POST['brand'] == 'null'){
            echo "<div class='alert alert-danger'>brand is required</div>";
          }
                          
          }
     }

// $civic = new Honda('civic','red', 25000);

// echo $honda->calculatedPrice(2,new TotalPrice);
// echo $civic->calculatedPrice(3,new TotalPrice);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <h2 class="text-center">Car Bazar</h2>
  <div class="container mt-5">
   <form action="index.php" method="POST">
      <div class="form-group">
        <label for="exampleFormControlSelect1">How Many cars Do you want?</label>
          <select class="form-control" name='qty' required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
      </div>

    <select class="form-control" name="brand">
        <option value='null'>Select brand</option>
        <option value="honda">Honda</option>
        <option value="civic">Civic</option>
    </select>

    <div class="form-check form-check-inline mt-2">
        <input class="form-check-input" type="radio" name="color" value="red" required>
        <label class="form-check-label" for="inlineRadio1">red</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="blue" required>
        <label class="form-check-label" for="inlineRadio2">blue</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="green" required>
        <label class="form-check-label" for="inlineRadio2">green</label>
    </div>
       <button type="submit" class="btn btn-primary d-block mt-3 mb-3">order</button>
       
   </form>


   <?php
     
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
           if(isset($_POST['brand'])){
            
            if($_POST['brand'] == 'honda'){
              $honda = new Honda($_POST['brand'],$_POST['color'], 1000);
              echo $honda->calculatedPrice($_POST['qty'],new TotalPrice);

            }elseif ($_POST['brand'] == 'civic'){
              $civic = new Civic($_POST['brand'],$_POST['color'], 2000);
              echo $civic->calculatedPrice($_POST['qty'],new TotalPrice);
            }
                           
           }
     }

   ?>

  </div>
</body>
</html>