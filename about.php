<?php 
$pg = 2;
require "includes/connect.php";
include "includes/functions.php";
$catalogueqry = "SELECT * FROM catalogue ORDER BY catalogue_id DESC LIMIT 1";
$catalogueres = $conn->query($catalogueqry);
$cataloguerow = $catalogueres->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>About Us - Snapshot Tours and Safaris Kenya, Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Snapshot Tours and Safaris, safari tours in Kenya, wildlife, landscapes, cultures, authentic experience, wildlife safaris, bird watching tours, cultural tours, beach tours, adventure safaris, customizable travel plans, Luxurious lodges, responsible tourism, conservation, local communities, sustainable development, enchantment, hospitality">
<meta name="description" content="Welcome to Snapshot Tours and Safaris, a leading provider of safari tours in Kenya and Tanzania. Immerse yourself in the spectacular wildlife experience, remarkable landscapes, and vibrant cultures of this magnificent country. Our experienced guides are passionate about sharing their love and extensive knowledge of Kenya with our valued guests.">

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
    <div class="row justify-content-start pb-0">
    <div class="col-md-12 heading-section ftco-animate">
    <h2 class="mb-3">About Us</h2>
    <p>Welcome to Snapshot Tours and Safaris, a leading provider of safari tours in Kenya and Tanzania. Immerse yourself in the spectacular wildlife experience, remarkable landscapes, and vibrant cultures of this magnificent country. Our experienced guides are passionate about sharing their love and extensive knowledge of Kenya with our valued guests.<br>

Discover our range of safari tours, including wildlife safaris in major parks and reserves, bird-watching tours in the great lakes of Nakuru and Naivasha, cultural tours at Masai Mara, beach tours and Coastal experiences, and adventure safaris, each meticulously designed to offer an authentic and unforgettable experience of Kenya's wonders.<br>

Whether you're a solo traveler, a couple seeking a romantic getaway, or a group of friends and family, our tours and travel plans are customizable to cater to your unique needs and preferences. With a diverse selection of accommodations, from luxurious lodges to comfortable tented camps, we collaborate with trusted partners to ensure your safari is a truly comfortable and enjoyable journey.<br>

At Snapshot Tours and Safaris, responsible tourism and conservation are at the core of our values. We actively collaborate with local communities and conservation organizations to ensure that our tours make a positive impact on the environment and contribute to sustainable development in the region. We are aligned with the SDGs to ensure sustainability from our operations and socially inclined to ensure a positive impact on the local communities.<br>

Embark on a safari adventure of a lifetime and witness the enchantment and splendor of Kenya's wildlife and landscapes. Experience the genuine warmth and hospitality of its people as we guide you through its extraordinary destinations.

</p>
    </div>
    </div>
    </div>
    <div class="col-md-12 pl-md-5 py-5">
    <div class="row">
    <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="234">0</strong>
    <span>Sold Tours</span>
    </div>
    </div>
    </div>
    <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="47">0</strong>
    <span>Visited Destinations</span>
    </div>
    </div>
    </div>
    <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="7">0</strong>
    <span>Tour Guides</span>
    </div>
    </div>
    </div>
    <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18 text-center py-5 bg-light mb-4">
    <div class="text">
    <strong class="number" data-number="234">0</strong>
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
<h2>Our Services</h2>
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