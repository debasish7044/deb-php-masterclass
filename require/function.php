

<?php

require('variable.php');

function declareName($name){
    global $yourName;
    echo "<h1>$yourName $name</h1>";
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
   <?php declareName($name); ?>
</body>
</html>