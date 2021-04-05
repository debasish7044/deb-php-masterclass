<?php

 
  require('database.php'); 

   

  $errors = [];

  if( $_SERVER['REQUEST_METHOD'] == 'GET' &&  isset($_GET['id']) ){
  
    $id = $_GET['id'];

    try {
    $statement = $pdo->prepare('DELETE FROM users WHERE id = :id');
    $statement->execute(['id' => $id]); 
    header("location:read.php?show=all");
 
      }catch (PDOException $e) {
        echo "<h4>". $e->getMessage() ."</h4>";
      }
  
  }else {
    header("location:index.php");
  }



