<?php



// variable to store the current time in seconds + dayInSeconds
$currentDayInSeconds = time() + (86400 * 30); 

$debProduct_key = 'laptop';
$debProduct = "Macbook_pro";

setcookie($debProduct_key, $debProduct, $currentDayInSeconds, '/');

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
   <?php
     if($_COOKIE['laptop']){
       echo $_COOKIE['laptop'];
     }else{
        echo "sorry there is no cookie";
     }
   ?>
</body>
</html>
