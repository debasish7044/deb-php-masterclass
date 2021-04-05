<?php


$data = array("red","green","blue");

echo "Array has " . sizeof($data) . " elements <br>";

$data2 = array("name" => "debasish", "age" => 32);


 $mergeData = array_merge($data,$data2);
 print_r($mergeData);

 array_flip($data2);
 print_r($data2);

 print_r(array_values($data2)) ." <br>";
 print_r(array_keys($data2)) ." <br>";

 $data3 = ["bulbul",'sonali','remove'];


 array_pop($data3);
 print_r($data3);

 array_push($data3,"join");
 print_r($data3);

 array_shift($data3);
 print_r($data3);

 array_unshift($data3,"join");
 print_r($data3);

 sort($data3);
 print_r($data3);



$data = array("blue" => "#0000cc", "black"
=> "#000000");

echo "Found " . array_search("#0000cc",$data) . "<br>";
echo "Today color is " . array_rand($data). "<br>";


?>