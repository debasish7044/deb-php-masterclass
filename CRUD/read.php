<?php

  require('database.php');

?>
<?php

  require('include/header.php'); 
  require('include/nav.php');
  


  if($_GET['show'] == 'all'){

    try {
    $statement = $pdo->prepare('SELECT * FROM users');
    $statement->execute();
    echo "<h2 class='text-center mt-3 mb-5'>All Users</h2>";
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
 
    

  } catch (PDOException $e) {
     echo "<h4>".$e->getMessage()."</h4>";
    }
  }

  if($_GET['show'] == 'one' && isset($_GET['id'])){
    $id = $_GET['id'];

    try {
      $statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
      $statement->execute(["id" => $id]);
      $results = $statement->fetchAll(PDO::FETCH_OBJ);
      $name = ucfirst($results[0]->first_name);
    
      echo "<h2 class='text-center  mt-3'>{$name}</h2>";

 
    } catch (PDOException $e) {
      echo "<h4>".$e->getMessage()."</h4>";
    }
  }

?>
 
 <div class="container">
     <table class="table table-bordered text-center ">
       <?php  echo isset($_GET['id']) ? "<a href='read.php?show=all' class='btn btn-light  mb-5'> Go Back </a>" : '' ?>
  <thead>
    <tr>
      <th scope="col">Sl.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($results as $id => $user): ?>
      <tr>
        <th scope="row"><?php echo $id + 1 ?></th>
        <td><?php echo ucfirst($user->first_name) ?></td>      
        <td><?php echo ucfirst($user->last_name) ?></td>      
        <td><?php echo $user->age ?></td>     
       <td>
        <a href="read.php?show=one&id=<?php echo $user->id ?>" class="btn btn-info">View</a>
        <a href="update.php?id=<?php echo $user->id ?>" class="btn btn-primary">Edit</a>
        <a href="delete.php?id=<?php echo $user->id ?>" onclick="confirm()" class="btn btn-danger">Delete</a>
      </td> 
    </tr>   
    <?php endforeach; ?>
  </tbody>
</table>

 </div>
<?php

  require('include/footer.php');

?>