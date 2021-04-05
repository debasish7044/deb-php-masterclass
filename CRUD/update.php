<?php

  require('database.php');

?>
<?php

  require('include/header.php'); 
  require('include/nav.php');

    $id = $_GET["id"] ?? null;
   
   
   
    if(!$id){
      header('Location: index.php');
      exit;
    }

    if(isset($_GET['id'])){
    $id = $_GET['id'];


    try {
      $statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
      $statement->execute(["id" => $id]);
      $results = $statement->fetchAll(PDO::FETCH_OBJ);

     

    } catch (PDOException $e) {
      echo "<h4>".$e->getMessage()."</h4>";
    }
  }




  if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id']) && $_POST['_method'] == 'PUT' ){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $id = $_GET['id'];

    
  if(empty($errors)){
    try {
      $statement = $pdo->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, age = :age WHERE id = :id');
      $statement->bindValue(':first_name', $first_name);
      $statement->bindValue(':last_name', $last_name);
      $statement->bindValue(':age', $age);
      $statement->bindValue(':id', $id);
      $statement->execute();
     header("location:read.php?show=all");

  }catch (PDOException $e) {
     echo "<h4>". $e->getMessage() ."</h4>";
  }
  }
  }

?>

 <div class="container">
         <h2 class="text-center mt-2">Update</h2>
  
      <form class="mt-3" action="" method="POST" enctype="multipart/form-data">
     
       <input type="hidden" name="_method" value="PUT">
        <?php  echo isset($_GET['id']) ? "<a href='read.php?show=all' class='btn btn-light  mb-3'> Go Back </a>" : '' ?>
        <div class="form-group mb-2 ">
          <label class="mb-1 mt-3" for="first_name">First Name</label>
          <input type="text" class="form-control" name="first_name" value="<?php echo $results[0]->first_name ?>" placeholder="Enter first name">
        </div>

        <div class="form-group mb-2">
          <label class="mb-1 mt-3" for="last_name">Last Name</label>
          <input type="text" class="form-control" name="last_name" value="<?php echo $results[0]->last_name ?>" placeholder="Enter last name">
        </div>

        <div class="form-group mb-2">
          <label class="mb-1 mt-3" for="age">Age</label>
          <input type="text" class="form-control" value="<?php echo $results[0]->age ?>" name="age" placeholder="Enter your age">
        </div> 
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

 </div>

<?php

  require('include/footer.php');

?>