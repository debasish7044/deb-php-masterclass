<?php

session_start();

$_SESSION['amazon_key'] = 'Amazon Product';

// session_unset();

// session_destroy();

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
       if(isset($_SESSION['amazon_key'])){
         echo $_SESSION['amazon_key'];
       }else{
         echo 'No session found';
       }

     ?>
</body>
</html>