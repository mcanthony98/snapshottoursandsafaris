<?php
$pg = 8;
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
<div class="col-md-9 ftco-animate pb-5 text-center">
<h1 class="mb-3 bread">Contact Information</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pb contact-section">
<div class="container">
<div class="row d-flex contact-info">
<div class="col-md-3 d-flex">
<div class="align-self-stretch box p-4 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-map-signs"></span>
</div>
<h3 class="mb-4">Address</h3>
<p><a href="https://www.google.com/maps/place/Hotel+Lillies+Juja/@-1.0981562,37.0201615,17z/data=!3m1!4b1!4m9!3m8!1s0x182f4619d85a3dc9:0x2fd210b445a60840!5m2!4m1!1i2!8m2!3d-1.0981616!4d37.0223502!16s%2Fg%2F11c5x2svv_" target="_blank" >Office 4, Hotel Lillies, Juja, Nairobi, Kenya</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="align-self-stretch box p-4 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-phone2"></span>
</div>
<h3 class="mb-4">Contact Number</h3>
<p><a href="tel:+2547599123123">+254 7599 49546</a> <br> iMessage: <a href="#">+254 7135 85070</a> <br> Whatsapp: <a href="#">+254 7599 49546</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="align-self-stretch box p-4 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-paper-plane"></span>
</div>
<h3 class="mb-4">Email Address</h3>
<p><a href="mailto:info@snapshottoursandsafaris.com">info@snapshottoursandsafaris.com</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="align-self-stretch box p-4 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-globe"></span>
</div>
<h3 class="mb-4">Website</h3>
<p><a href="https://snapshottoursandsafaris.com">www.snapshottoursandsafaris.com</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section">
<div class="container">
<div class="row block-9">
<div class="col-md-6 order-md-last d-flex">
<form id="contForm" class="bg-light p-5 contact-form">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" name="contactEnquiry" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" name="sub" placeholder="Subject">
</div>
<div class="form-group">
<textarea id="" cols="30" rows="7" name="sms" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Message"  id="contbtn" class="btn btn-primary py-3 px-5">
</div>
<div class="form-group">
<p class="text-center" id="conttext"></p>
</div>
</form>
</div>
<div class="col-md-6 d-flex">
<div id="map" class="bg-white"></div>
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