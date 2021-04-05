<?php 

$age = 10;


if ($age <= 8 && $age >= 5  ){
   echo "<h1> You must be primary school student </h1> <br>";
}elseif ($age <= 16 && $age >= 9 ){
   echo "<h1> You must be High school student</h1> <br>";
}elseif( $age <= 25 && $age >= 17 ){
   echo "<h1> You must be college student </h1> <br>";
}elseif($age <= 4  || $age >= 26 ){
  echo "<h1> You must be a child or into a profession</h1> <br>";
}


$name = "";

switch($age){
  case  $name === "debasish":
    echo "<h1>Welcome Debasish</h1>";
    break;
  case $name === "sonali": 
    echo "<h1>Welcome Sonali</h1>";
    break;
  default: 
    echo "<h1> who are you i don't know you </h1>";

}


?>