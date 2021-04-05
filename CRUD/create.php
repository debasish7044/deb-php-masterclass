<?php

  require('database.php');

?>
<?php

  require('include/header.php'); 
  require('include/nav.php');
   

  $errors = [];

  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    if(!$first_name){
      $errors[] = 'First name is required';
    }
    if(!$last_name){
      $errors[] = 'Last last name is required';
    }
    if(!$age){
      $errors[] = 'Age is required';
    }

  
   
   
  if(empty($errors)){
    try {
    $statement = $pdo->prepare('INSERT INTO users (first_name,last_name,age) VALUES (:first_name,:last_name,:age)');
    $statement->execute(['first_name' => $first_name, 'last_name' => $last_name, 'age' => $age]); 
    header("location:read.php?show=all");
 
  }catch (PDOException $e) {
     echo "<h4>". $e->getMessage() ."</h4>";
  }
  }
  }

?>

 <div class="container">

   <?php  foreach($errors as $error): ?>
      <div class="alert alert-danger mt-2 p-1">
      <?php echo $error ?>
      </div>
   <?php endforeach; ?>
        
      <form class="mt-5" action="" method="POST">
      <h2 class="text-center mt-3">Create User</h2>
        <div class="form-group mb-2 ">
          <label class="mb-1 mt-3" for="first_name">First Name</label>
          <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
   
        </div>

        <div class="form-group mb-2">
          <label class="mb-1 mt-3" for="last_name">Last Name</label>
          <input type="text" class="form-control" name="last_name" placeholder="Enter last name">

        <div class="form-group mb-2">
          <label class="mb-1 mt-3" for="age">Age</label>
          <input type="text" class="form-control" name="age" placeholder="Enter your age">
        </div> 
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

 </div>

<?php

  require('include/footer.php');

?>