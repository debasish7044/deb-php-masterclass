<?php

$players = [
  [
    "name"  => 'virat',
    "score" => 75,
    "strikeRate" => 7
  ],
  [
    "name"  => 'rohit',
    "score" => 50,
    "strikeRate" => 5
  ],
  [
    "name"  => 'ishan',
    "score" => 25,
    "strikeRate" => 2
  ],
  [
    "name"  => 'Dhoni',
    "score" => 85,
    "strikeRate" => 8
  ],
]

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
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Score</th>
      <th scope="col">Strike Rate</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($players as $player): ?>
      <th scope="row">1</th>
        <td><?php echo $player["name"] ?></td>
        <td><?php echo $player["score"]?></td>
        <td><?php echo $player["strikeRate"] ?></td>
      </tr>
      <?php endforeach; ?>
    
  </tbody>
</table>
</body>
</html>




