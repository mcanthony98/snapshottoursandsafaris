<?php
$pg = 6;
require "../includes/connect.php";
include "includes/functions.php";
$destqry = "SELECT * FROM destination ORDER BY position ASC";
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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RM45DWF1DC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RM45DWF1DC');
</script>
<body>
<?php include "includes/navbar.php";?>



<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/banner2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
<h1 class="mb-3 bread">Gallery</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">Our Gallery</h2>
<p></p>
</div>
</div>
<div class="row">
<div class="col-12 ftco-animate">

<script type="text/javascript" src="https://www.juicer.io/embed/snapshot_tours_and_safaris/embed-code.js?per=15000" async defer></script>

</div>

</div>
<div class="row mt-5">
<div class="col text-center">
<div class="block-27">
<ul>
<li><a href="#">&lt;</a></li>
<li class="active"><span>1</span></li>
<li><a href="#">&gt;</a></li>
</ul>
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