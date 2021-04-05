 <?php 
   include('link.php');
 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo ($link == 'index.php') ? 'active' : '' ?>"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
           <a class="nav-link <?php echo ($link == 'service.php') ? 'active' : '' ?>"  href="service.php">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php echo ($link == 'about.php') ? 'active' : '' ?>""  href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php echo ($link == 'contact.php') ? 'active' : '' ?>""  href="contact.php">Contact</a>        </li>
      </ul>
    </div>
  </div>
</nav>

