<?php
require "../includes/connect.php";
include "includes/functions.php";
$destqry = "SELECT * FROM snapshot_blog ORDER BY blog_id DESC";
$destres = $conn->query($destqry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Snapshot Tours and Safaris - Explore Unlimited!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include "includes/stylesheets.php";?>
</head>
<body>
<?php include "includes/navbar.php";?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<h1 class="mb-3 bread">Our Stories</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section bg-light">
<div class="container">
<div class="row d-flex">

<?php while($row = $destres->fetch_assoc()){?>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="blog-single.php?blog=<?php echo $row['blog_id'];?>" class="block-20" style="background-image: url('images/image_1.jpg');">
</a>
<div class="text mt-3 float-right d-block">
<div class="d-flex align-items-center pt-2 mb-4 topp">
<div class="one">
<span class="day"><?php echo date('d', strtotime($row['date_created']));?></span>
</div>
<div class="two">
<span class="yr"><?php echo date('Y', strtotime($row['date_created']));?></span>
<span class="mos"><?php echo date('F', strtotime($row['date_created']));?></span>
</div>
</div>
<h3 class="heading"><a href="blog-single.php?blog=<?php echo $row['blog_id'];?>"><?php echo $row['title'];?></a></h3>
<p><?php echo $row['subheading'];?></p>
</div>
</div>
</div>
<?php } ?>

</div>
<div class="row mt-5">
<div class="col text-center">
<div class="block-27">
<ul>
<li><a href="#">&lt;</a></li>
<li class="active"><span>1</span></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&gt;</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-subscribe" style="background-image: url(images/bg_1.jpg);">
<div class="overlay">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-10 text-wrap text-center heading-section ftco-animate">
<h2>Subcribe to our Newsletter</h2>
<div class="row d-flex justify-content-center mt-4 mb-4">
<div class="col-md-10">
<form action="#" class="subscribe-form">
<div class="form-group d-flex">
<input type="text" class="form-control" placeholder="Enter email address">
<input type="submit" value="Subscribe" class="submit px-3">
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<?php 
include "includes/footer.php";
include "includes/scripts.php";
?>

</body>

</html>