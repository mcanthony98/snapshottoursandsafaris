<?php 
$pg = 2;
require "../includes/connect.php";
include "includes/functions.php";
$catalogueqry = "SELECT * FROM catalogue ORDER BY catalogue_id DESC LIMIT 1";
$catalogueres = $conn->query($catalogueqry);
$cataloguerow = $catalogueres->fetch_assoc();
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
<h1 class="mb-3 bread">About Us</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
    <section class="ftco-counter img mt-4" id="section-counter">
    <div class="container">
    <div class="row d-flex">
    <div class="col-md-6 d-flex">
    <div class="img d-flex align-self-stretch" style="background-image:url(images/abouty.jpg);"></div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
    <div class="row justify-content-start pb-3">
    <div class="col-md-12 heading-section ftco-animate">
    <h2 class="mb-4">About Snapshot Tours and Safaris</h2>
    <p>We love Africa. It has a magic not found anywhere else on our planet. It is a dream destination and it is our home. Our passion is to inspire you to experience the best of East Africa.We specialise in crafting authentic, memorable and highly customised journeys to soul-enriching destinations in Kenya and Tanzania.Your dream, our expertise. Discover Africa with us.</p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="30">0</strong>
    <span>Amazing Deals</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="200">0</strong>
    <span>Sold Tours</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="2500">0</strong>
    <span>New Tours</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="40">0</strong>
    <span>Happy Customers</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>




<section class="ftco-section mt-0 bg-light">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<h2>What we Offer</h2>
</div>
</div>
<div class="row d-flex">
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="destinations.php" class="block-20" style="background-image: url('images/beach.jpg');">
</a>
<div class="text mt-3 float-right d-block text-center">
<h3 class="heading"><a href="destinations.php">Personal and Business Holidays</a></h3>
<p>We offer memorable Beach and Adventure Safaris for vacation and business.</p>
<a href="destinations.php" class="btn btn-primary">Learn more</a>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="team-building.php" class="block-20" style="background-image: url('images/tb.jpg');">
</a>
<div class="text mt-3 float-right d-block text-center">
<h3 class="heading"><a href="team-building.php">Team Building Activities</a></h3>
<p>Corporate outdoor events for organizations and teams.</p>
<a href="team-building.php" class="btn btn-primary">Learn more</a>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="transport.php" class="block-20" style="background-image: url('images/cruisers.jpg');">
</a>
<div class="text mt-3 float-right d-block text-center">
<h3 class="heading"><a href="destinations.php">Transport</a></h3>
<p>Hire  Land cruisers, Tours Vans, Tour buses. Driver included.</p>
<a href="transport.php" class="btn btn-primary">Learn more</a>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="flight.php" class="block-20" style="background-image: url('images/flight.jpg');">
</a>
<div class="text mt-3 float-right d-block text-center">
<h3 class="heading"><a href="#">Flight Booking</a></h3>
<p>We help you forget the hustle in booking your plane</p>
<a href="flight.php" class="btn btn-primary">Learn more</a>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="javascrpt:void()" class="block-20" style="background-image: url('images/conference3.jpg');">
</a>
<div class="text mt-3 float-right d-block text-center">
<h3 class="heading"><a href="destinations.php">Conference Booking</a></h3>
<p>We plan and organise indoor events and conferences</p>
<a href="javascrpt:void()" class="btn btn-primary">Learn more</a>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="javascrpt:void()" class="block-20" style="background-image: url('images/IMG_4882.JPG');">
</a>
<div class="text mt-3 float-right d-block text-center">
<h3 class="heading"><a href="#">Personalized Events</a></h3>
<p>We facilitate birthday parties, weddings and parties</p>
<a href="javascrpt:void()" class="btn btn-primary">Learn more</a>
</div>
</div>
</div>
<div class="col-md-12 mt-4 heading-section text-center ftco-animate">
<a class="btn border border-primary" target="_blank" href="files/<?php echo $cataloguerow['catalogue'];?>">Download our Catalogue</a>
</div>
</div>
</div>
</section>


<section class="ftco-section ftco-no-pb testimony-section" style="background-image: url(images/bg_1.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 class="mb-4">Happy Client Says</h2>
</div>
</div>
<div class="row ftco-animate">
<div class="col-md-12 testimonial">
<div class="carousel-testimony owl-carousel ftco-owl">
<div class="item">
<div class="testimony-wrap img" style="background-image: url(images/samnnpark.jpg);">
<div class="overlay"></div>
<div class="text">
<p class="mb-4">I had an incredible experience with your tour company at Nairobi National Park. The wildlife and scenery were breathtaking!</p>
<p class="name">Mukungi Kamunzyu</p>
<span class="position">Nairobi, Kenya</span>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap" style="background-image: url(images/traveller3.jpg);">
<div class="overlay"></div>
<div class="text">
<p class="mb-4">Thank you for an incredible experience at Tsavo National Park. The wildlife was amazing and the tour guides were knowledgeable and friendly.</p>
<p class="name">Charles Dean</p>
<span class="position">United Kingdom</span>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap" style="background-image: url(images/traveller4.jpg);">
<div class="overlay"></div>
<div class="text">
<p class="mb-4">Thanks for an incredible experience with my friends at Samburu. The game drives were unforgettable and the accommodations were top-notch.</p>
<p class="name">Mark Anthony</p>
<span class="position">Samburu National Reserve, Kenya</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="ftco-section services-section ftco-no-pb">
<div class="container">
<div class="row d-flex">
<div class="col-md-3 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-block">
<div class="icon"><span class="flaticon-yatch"></span></div>
<div class="media-body">
<h3 class="heading mb-3">Activities</h3>
<p>We have a range of activities including safaris, beach holidays and corporate training.</p>
</div>
</div>
</div>
<div class="col-md-3 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-block">
<div class="icon"><span class="flaticon-around"></span></div>
<div class="media-body">
<h3 class="heading mb-3">Travel Arrangements</h3>
<p>We offer customized itineraries to suit your travel plan and budget.</p>
</div>
</div>
</div>
<div class="col-md-3 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-block">
<div class="icon"><span class="flaticon-compass"></span></div>
<div class="media-body">
<h3 class="heading mb-3">Private Guide</h3>
<p>You get an experienced professional Tour Guide on all your safaris.</p>
</div>
</div>
</div>
<div class="col-md-3 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-block">
<div class="icon"><span class="flaticon-map-of-roads"></span></div>
<div class="media-body">
<h3 class="heading mb-3">Location Manager</h3>
<p>We handle everything. You just need to show up and enjoy.</p>
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