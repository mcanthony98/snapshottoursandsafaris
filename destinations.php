<?php
$pg = 3;
require "includes/connect.php";
include "includes/functions.php";
$destqry = "SELECT * FROM destination ORDER BY position ASC";
$destres = $conn->query($destqry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Affordable Destinations - Snapshot Tours and Safaris Kenya, Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPT4TS2');</script>
<!-- End Google Tag Manager -->

<?php include "includes/stylesheets.php";?>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '175143165180633');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=175143165180633&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPT4TS2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include "includes/navbar.php";?>



<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/banner2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
<h1 class="mb-3 bread">Places to Travel</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Destination <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="search-wrap-1 ftco-animate p-4">
<form action="#" class="search-property-1">
<div class="row">
<div class="col-lg align-items-end">
<div class="form-group">
<label for="#">Destination</label>
<div class="form-field">
<div class="icon"><span class="ion-ios-search"></span></div>
<input type="text" class="form-control" placeholder="Search place">
</div>
</div>
</div>
 <div class="col-lg align-items-end">
<div class="form-group">
<label for="#">Check-in date</label>
<div class="form-field">
<div class="icon"><span class="ion-ios-calendar"></span></div>
<input type="text" class="form-control checkin_date" placeholder="Check In Date">
</div>
</div>
</div>
<div class="col-lg align-items-end">
<div class="form-group">
<label for="#">Check-out date</label>
<div class="form-field">
<div class="icon"><span class="ion-ios-calendar"></span></div>
<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
</div>
</div>
</div>
<div class="col-lg align-items-end">
<div class="form-group">
<label for="#">Price Limit</label>
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="" id="" class="form-control">
<option value="">$100</option>
<option value="">$150</option>
<option value="">$200</option>
<option value="">$250</option>
<option value="">$300</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-lg align-self-end">
<div class="form-group">
<div class="form-field">
<input type="submit" value="Search" class="form-control btn btn-primary">
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">Best Place to Travel</h2>
<p></p>
</div>
</div>
<div class="row">
<?php 
while($destrow = $destres->fetch_assoc()){
?>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="project">
<a class="destination-single" id="<?php echo $destrow["destination_id"];?>" type="button" data-toggle="modal" data-target="#specificdest">
<div class="img">
<img src="files/<?php echo $destrow['image'];?>" class="img-fluid" alt="<?php echo $destrow['location'];?>">
</div>
<div class="text">
<h4 class="price">$<?php echo $destrow['price'];?></h4>
<span><?php echo $destrow['days'] . " Days " . $destrow['nights'] . " Nights ";?></span>
<h3><?php echo $destrow["location"];?></a></h3>
<div class="star d-flex clearfix">
<div class="mr-auto float-left">
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
</div>
<div class="float-right">
<span class="rate"><a class="destination-single" >(<?php echo randomRates();?>)</a></span>
</div>
</div>
</div>
<a href="files/<?php echo $destrow['image'];?>" class="icon d-flex justify-content-center align-items-center">
<span class="icon-expand"></span>
</a>
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