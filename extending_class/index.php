<?php

require_once('brand.php');
require_once('totalPrice.php');


  $honda = "Give us information which brand car do you want?";


 if($_SERVER['REQUEST_METHOD'] == 'POST') {

   new TotalPrice(1000,$_POST['qty']);
   new Brand($_POST['qty'],$_POST['color'], 4, 1000);
     $honda="Lets get it";
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
 <?php echo $honda ?>
  <form action="" method="POST">
    <input type="number" name='qty' placeholder="How many cars" >
    <input type="text" name='brand' placeholder="Which brand card do you want?" >
    <input type="text" name='color' placeholder="Which color car do you want?" >
    <input type="submit" value="submit">
   </form>
</body>
</html>
