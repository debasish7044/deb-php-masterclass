<?php

 if(isset($_GET['username'])){
   echo "Username: {$_GET['username']} <br>";
   echo "Lastname: {$_GET['lastname']}";
 }
  
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   echo "Email: {$_POST['email']} <br>";
   echo "Password: {$_POST['password']} <br>";
   echo "Address: {$_POST['address']} <br>";
   echo "Address2: {$_POST['address2']} <br>";
   echo "City: {$_POST['city']} <br>";
   echo "State: {$_POST['state']} <br>";
   echo "Zip: {$_POST['zip']} <br>";
 }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>
<body>
  <div class="container">
  <form action="" method="POST" class="mt-5">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name='email' placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name='address' placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name="state" class="form-control">
        <option selected>Choose...</option>
        <option value="west-bengal" >West Bengal</option>
        <option value="bihar" >Bihar</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name='zip'>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</body>
</html>

