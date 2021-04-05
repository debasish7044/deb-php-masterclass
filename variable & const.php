<?php

$name="debasish";
$age = 18;
$profession = 'Web Developer';
$specialized = 'Mern Stack & Laravel';

define("Status", 'PHP');


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
  <?php echo "<h1 class='text-center'> Hi my name is {$name} </h1>" ?>
  <?php echo "<h2 class='text-center'> I am {$age} years old </h2>" ?>
  <?php echo "<div class='text-center'> My profession is " . $profession . ' with One years of experience </div>' ?>
  <?php echo "<p class='font-italic text-center'> I am specialized in " . $specialized . ' with One years of experience </p>' ?>
  <?php echo "<p class='font-italic text-center'> Currently i am learning " . Status .' .</p>' ?>
  
</body>
</html>