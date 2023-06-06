<?php
$pg = 3;
require "includes/connect.php";
include "includes/functions.php";
$destqry = "SELECT * FROM destination ORDER BY position ASC";

if(isset($_GET['destination'])){
  $searchdest = $_GET['destination'];
  $destqry = "SELECT * FROM destination ORDER BY CASE WHEN location LIKE '%$searchdest%' THEN 0 ELSE 1 END, location; ";
}
$destres = $conn->query($destqry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMT5R9P');</script>
<!-- End Google Tag Manager -->
<title>Affordable Destinations - Snapshot Tours and Safaris Kenya, Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Snapshot Tours and Safaris, Travel experiences, best travel experiences, Passionate travelers, Breathtaking adventures, Cultural encounters, Tailor-made itineraries, Adrenaline junkie, Tranquil moments, Natural wonders, World-class hospitality, thrilling adventures, indelible mark in your memories, incredible experiences, travel experts, Masai Mara, sinking Lake Amboseli, Maasai Heritage">
<meta name="description" content="Explore the world's most intriguing destinations with Snapshot Tours and Safaris. Since we are also passionate explorers, we are committed and dedicated to curating long-term memories by creating memorable travel journeys that immerse you in the essence of each unique destination. ">


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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMT5R9P"
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

<section class="ftco-section ftco-no-pb ftco-no-pt d-none d-lg-block" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="search-wrap-1 ftco-animate p-4">
<form action="destinations.php#destinations_o" class="search-property-1">
<div class="row">
<div class="col-lg-5 align-items-end">
<div class="form-group">
<label for="#">Destination</label>
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="destination" id="" class="form-control">
<option class="text-dark" value="Maasai Mara">Maasai Mara National Park, Kenya</option>
<option class="text-dark" value="Serengeti">Serengeti National Park, Tanzania</option>
<option class="text-dark" value="Tsavo">Tsavo National Park, Kenya</option>
<option class="text-dark" value="Amboseli">Amboseli National Park, Kenya</option>
<option class="text-dark" value="Samburu">Samburu National Park, Kenya</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-lg-4 align-items-end">
<div class="form-group">
<label for="#">Date of Travel</label>
<div class="form-field">
<div class="icon"><span class="ion-ios-calendar"></span></div>
<input type="text" class="form-control checkin_date" placeholder="Date of Travel">
</div>
</div>
</div>
<div class="col-lg-3 align-self-end">
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

<section class="ftco-section" id="destinations_o">
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

</div>
</div>
 </div>
</div>
</section>

<?php 
include "includes/footer.php";
include "includes/scripts.php";
if(isset($_GET['dot']) && $_GET['dot'] != ""){
  $dot = $_GET['dot'];
?>

<script>
  const dotfields = document.querySelectorAll('input[name="dateT"]');
  const defaultdotValue = <?php echo $dot;?>;

  dotfields.forEach(function(input) {
    input.value = defaultdotValue;
  });


</script>

<?php } ?>
</body>

</html>