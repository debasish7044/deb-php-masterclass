<?php

$str = " I'm a PHP String";
$blog = 'Your blog is excellent';

$string = [
    'You like to have a fun time',
		'You are a really nice person',
		'Would you like to have a cup of coffee?'   
];

$search = [
    'fun',
		'time',
		'person', 
		'coffee' 
  ];

$replace = [
    'excellent',
		'adventure',
		'individual',
		'joe' 
];

$search = str_replace($search, $replace, $string);

$trimit = 'junk awesome stuff junk';
$junk = 'junk';
$healthy = 'healthy';
$trimited = trim($trimit, $junk);


$awesome = "Super Awesome!";
echo strpos($awesome, "!");

$awesome = "Super Awesome!";
echo strpos($awesome, "m", 3) . '<br>';
// 11

$person = 'Angry people SHOUT!';
echo strtolower($person) . '<br>';
$person = 'Angry people SHOUT!';
echo strtoupper($person) . '<br>';

echo is_string('name') ; // true
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
     <?php echo  "Hi buddy, {$str} <br>" ?>
     <?php 
        echo "Your Blog is " . substr($blog, 12) . "<br>";
        echo  substr($blog, 0,12) . " Excellent <br>" ;
        echo strlen("Super Cali Fragilistics Expy Ali Docious") . "<br>";
        echo  "Healthy food" . $trimited;
      ?>
      <ul>
         <?php   foreach($search as $s): ?>
            <li><?php echo $s ?></li>
             <?php   endforeach; ?>
      </ul>
</body>
</html>