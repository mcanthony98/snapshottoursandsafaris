<?php
$pg = 1;
require "../includes/connect.php";
include "includes/functions.php";
$destqry = "SELECT * FROM destination ORDER BY position ASC LIMIT 4";
$destres = $conn->query($destqry);

$catalogueqry = "SELECT * FROM catalogue ORDER BY catalogue_id DESC LIMIT 1";
$catalogueres = $conn->query($catalogueqry);
$cataloguerow = $catalogueres->fetch_assoc();


$blogsqry = "SELECT * FROM snapshot_blog ORDER BY blog_id DESC LIMIT 3";
$blogsres = $conn->query($blogsqry);
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

<div class="hero-wrap js-fullheight mySlides" id="caro1"  style="display:none; background-image: url('images/caro12.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
<div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome To Snapshot Tours and Safaris</h1>
<p class="mb-4" style="color:#f9c400;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore Unlimited!</p>
</div>
</div>
</div>
</div>

<div class="hero-wrap js-fullheight mySlides" id="caro2" style="display:none; background-image: url('images/caro8.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
<div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover Africa's wildlife on our safaris.</h1>
<p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel | Leisure | Experience | Discover</p>
</div>
</div>
</div>
</div>


<div class="hero-wrap js-fullheight mySlides" id="caro3" style="display:none; background-image: url('images/caro11.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
<div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Experience the adventure of a lifetime!</h1>
<p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel without going around in circles with Snapshot Tours and Safaris</p>
</div>
</div>
</div>
</div>


<section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="search-wrap-1 ftco-animate p-4">
<form action="destinations.php" class="search-property-1">
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
<select name="" id="" class="form-control ">
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
<p>Choose among our top destination and get the best experience with us.</p>
</div>
</div>
<div class="row">
<?php
while($destrow = $destres->fetch_assoc()){
?>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="project">
<div class="img">
<img src="files/<?php echo $destrow['image'];?>" class="img-fluid" alt="<?php echo $destrow['location'];?>">
</div>
<div class="text">
<h4 class="price">$<?php echo $destrow['price'];?></h4>
<span><?php echo $destrow['days'] . " Days " . $destrow['nights'] . " Nights ";?></span>
<h3><a class="destination-single" id="<?php echo $destrow["destination_id"];?>" type="button" data-toggle="modal" data-target="#specificdest"><?php echo $destrow["location"];?></a></h3>
<div class="star d-flex clearfix">
<div class="mr-auto float-left">
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
<span class="ion-ios-star"></span>
</div>
<div class="float-right">
<span class="rate"><a href="#">(<?php echo randomRates();?>)</a></span>
</div>
</div>
</div>
<a href="files/<?php echo $destrow['image'];?>" class="icon d-flex justify-content-center align-items-center">
<span class="icon-expand"></span>
</a>
</div>
</div>
<?php } ?>

<div class="col-md-12 heading-section text-center ftco-animate">
<a class="btn border border-primary" href="destinations.php">See more Destinations</a>
<a class="btn btn-primary" type="button" data-toggle="modal" data-target="#bookcustom">Plan Your Trip Now</a>
</div>
</div>
</div>
</section>



<section class="ftco-counter img" id="section-counter">
    <div class="container">
    <div class="row d-flex">
    <div class="col-md-6 d-flex">
    <div class="img d-flex align-self-stretch" style="background-image:url(images/about_2.jpg);"></div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
    <div class="row justify-content-start pb-3">
    <div class="col-md-12 heading-section ftco-animate">
    <h2 class="mb-4">About Snapshot Tours and Safaris</h2>
    <p>Welcome to <span style="color:#f9c400;">Snapshot Tours and Safaris</span>, where we aim to bring you the best travel experiences from around the world. We are a team of passionate travelers who believe that exploring new destinations, experiencing different cultures, and creating unforgettable memories are some of life's most rewarding experiences. <br>
    
    Our mission is to provide you with an exceptional travel experience that is tailored to your unique preferences and interests. Whether you are seeking adventure, relaxation, culture, or cuisine, we have the expertise and resources to design a customized itinerary that meets your specific needs. <br/>
    
    Thank you for choosing us as your travel partner. We look forward to helping you create memories that will last a lifetime.</p>
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



<section class="ftco-section ftco-no-pb testimony-section" style="background-image: url(images/bg_1.jpg);" id="testimonies">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 class="mb-4">Happy Clients Say</h2>
</div>
</div>
<div class="row ftco-animate">
<div class="col-md-12 testimonial">
<div class="carousel-testimony owl-carousel ftco-owl">
 
<div class="item">
<div class="testimony-wrap img" style="background-image: url(images/test2.jpg);">
<div class="overlay"></div>
<div class="text">
<p class="mb-4" style="font-size: 17px;">Words cannot describe the sheer beauty of Kenya's landscapes and wildlife. Tsavo National Park offered a different perspective, with its rugged terrain and vast open spaces. Our safari drives were filled with encounters with elephants, buffalo, and the elusive leopards. The guides from snapshot tours and safaris were knowledgeable and passionate, sharing interesting facts about the animals and their habitats. The lodges we stayed at were top-notch, providing stunning views and excellent service. This safari was a true immersion into nature, and we left with a deep appreciation for Kenya's conservation efforts and snapshots knowledge of the terrain </p>
<p class="name">Lillian Hartman</p>
<span class="position">Beverly Hills, California, USA</span>
</div>
</div>
</div>


<div class="item">
<div class="testimony-wrap" style="background-image: url(images/amboseliWazungu.jpg);">
<div class="overlay"></div>
<div class="text">
<p class="mb-4" style="font-size: 17px;">Kenya is a safari lover's paradise, and our experience there was nothing short of amazing. Amboseli National Park stole our hearts with its breathtaking views of Mount Kilimanjaro and the herds of elephants roaming freely. The guides from snapshot tours and safaris were incredibly skilled at spotting wildlife, and we got up close to lions, giraffes, and even a cheetah on the hunt. Our tented camp was comfortable, with all the necessary amenities, and the campfire under the starry sky was a magical way to end each day. We highly recommend snapshot tours and safaris  for an adventure of a lifetime!</p>
<p class="name">Charles Dean</p>
<span class="position">London, United Kingdom</span>
</div>
</div>
</div>
<div class="item">
  <div class="testimony-wrap img" style="background-image: url(images/wazungumas.jpg);">
  <div class="overlay"></div>
  <div class="text">
  <p class="mb-4" style="font-size: 17px;">Our Kenyan safari was an absolute dream come true! The wildlife sightings in Maasai Mara were beyond our expectations. We witnessed the Great Migration, with thousands of wildebeests and zebras roaming the plains. Our knowledgeable guide from snapshot tours and safaris provided fascinating insights about the animals and their behaviour. The accommodations were luxurious, and the staff was incredibly friendly and attentive. We also enjoyed visiting a Maasai village and learning about their culture. This safari exceeded all our expectations and left us with unforgettable memories</p>
  <p class="name">Liam O'Sullivan</p>
  <span class="position">Dublin, Ireland</span>
  </div>
  </div>
  </div>
<div class="item">
<div class="testimony-wrap" style="background-image: url(images/wazungu.jpg);">
<div class="overlay"></div>
<div class="text">
<p class="mb-4" style="font-size: 17px;">Our Kenyan safari in Samburu National Reserve was a remarkable journey. The reserve's unique flora and fauna were a delight to explore. We spotted the 'Samburu Five' (Gravy’s zebra, Somali ostrich, reticulated giraffe, beisa Oryx, and gerenuk) and were enthralled by their distinct features. Our guide from snapshot tours and safaris was a treasure trove of knowledge and made our safari educational and exciting. The eco-lodge we stayed in had a strong commitment to sustainability, which was commendable. The Samburu people's warm hospitality and cultural experiences added another layer of richness to our adventure</p>
<p class="name">Mark Anthony</p>
<span class="position">Atlanta Georgia, USA</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="ftco-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<h2>Recent Stories</h2>
</div>
</div>
<div class="row d-flex">
<?php while($blogsrow = $blogsres->fetch_assoc()){?>
<div class="col-md-4 d-flex ftco-animate">
<div class="blog-entry justify-content-end">
<a href="blog-single.php?blog=<?php echo $blogsrow['blog_id'];?>" class="block-20" style="background-image: url('files/<?php echo $blogsrow['image'];?>');">
</a>
</a>
<div class="text mt-3 float-right d-block">
<div class="d-flex align-items-center pt-2 mb-4 topp">
<div class="one">
<span class="day"><?php echo date('d', strtotime($blogsrow['date_created']));?></span>
</div>
<div class="two">
<span class="yr"><?php echo date('Y', strtotime($blogsrow['date_created']));?></span>
<span class="mos"><?php echo date('F', strtotime($blogsrow['date_created']));?></span>
</div>
</div>
<h3 class="heading"><a href="blog-single.php?blog=<?php echo $blogsrow['blog_id'];?>"><?php echo $blogsrow['title'];?></a></h3>
</div>
</div>
</div>
<?php } ?>
<div class="col-md-12 heading-section text-center ftco-animate">
<a class="btn btn-primary" href="blogs.php">View More Blogs</a>
</div>
</div>
</div>
</section>
<?php 
include "includes/modals.php";
include "includes/footer.php";
include "includes/scripts.php";
?>

</body>

</html>