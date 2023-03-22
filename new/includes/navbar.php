<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<img src="images/logo.png" class="img-fluid m-1" width="100px" height="50px"  href="index.php">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item <?php if($pg == 1){echo "active";}?>"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item <?php if($pg == 2){echo "active";}?>"><a href="about.php" class="nav-link">About</a></li>
<li class="nav-item dropdown <?php if($pg == 3){echo "active";}?>">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Tours &amp; Safaris</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="destinations.php">Our Destinations</a>
          <a class="dropdown-item" href="#">Book a Flight</a>
          <a class="dropdown-item" href="#">Get Transport</a>
        </div>
      </li>
<li class="nav-item <?php if($pg == 4){echo "active";}?>"><a href="team-building.php" class="nav-link">Team Building</a></li>
<li class="nav-item dropdown <?php if($pg == 5){echo "active";}?>">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Events</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Conference Booking</a>
          <a class="dropdown-item" href="#">Snapshot Events</a>
        </div>
      </li>
<li class="nav-item <?php if($pg == 6){echo "active";}?>"><a href="#" class="nav-link">Gallery</a></li>
<li class="nav-item <?php if($pg == 7){echo "active";}?>"><a href="blogs.php" class="nav-link">Blogs</a></li>
<li class="nav-item <?php if($pg == 8){echo "active";}?>"><a href="contact.php" class="nav-link">Contact</a></li>
<li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>
</ul>
</div>
</div>
</nav>
<!--
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
-->