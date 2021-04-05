<?php 


$qty = 2;
$price = 10.52;

$totalPrice = $qty * $price;

echo abs(-1) . "<br>"; // prints 1 
echo abs(-145.89) . "<br>" ; // prints 145.89
echo abs(145.89) . "<br>";  // prints 145.89 

echo ceil(27.3). "<br>";
echo floor(27.8);

echo round(10.4); // prints 10 
echo round(10.5); // prints 11 
echo round(2.40964, 3); // prints 2.410 
echo round(567234.56, -3); // prints 567000 
echo round(567234.56, -4); // prints 570000 

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
   <?php echo "<h1>Total price is {$totalPrice}  </h1>"?>
</body>
</html>