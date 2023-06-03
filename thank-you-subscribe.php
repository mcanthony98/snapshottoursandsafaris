<?php
session_start();
$pg = 000;

if(isset($_SESSION['thank_you_name'])){
    $thank_you_name = $_SESSION['thank_you_name'];
}else{
    $thank_you_name = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Thank You - Snapshot Tours and Safaris Kenya, Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPT4TS2');gtag('config', 'AW-11135189400');</script>
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



<section class="ftco-section">
<div class="container">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">Thank you for Subscribing!</h2>
<p>
Thank you<strong><?php echo $thank_you_name;?></strong>. We appreciate your interest in <a href="https://snapshottoursandsafaris.com">Snapshot Tours and Safaris</a>. You will receive our weekly newsletters to your email. 
</p>
</div>
</div>
<div class="row">

<div class="col-md-12 heading-section text-center ftco-animate">
<a class="btn border border-primary" href="contact.php">Go Back</a>
<a class="btn btn-primary"  href="gallery.php">Discover More</a>
</div>

<div class="col-md-12 heading-section text-center ftco-animate bg-dark mt-4 rounded shadow-lg">
<h6 class="mb-3 mt-2">Or visit our Socials</h6>
<ul class="ftco-footer-social list-unstyled">
<li class="ftco-animate"><a href="https://mobile.twitter.com/Snapshot_tours_" target="_blank"><span class="icon-twitter"></span></a></li>
<li class="ftco-animate"><a href="https://m.facebook.com/people/Snapshot-tours-and-safaris/100069692835734/" target="_blank"><span class="icon-facebook"></span></a></li>
<li class="ftco-animate"><a href="https://www.instagram.com/snapshot_tours_and_safaris/?utm_medium=copy_link" target="_blank"><span class="icon-instagram"></span></a></li>
<li class="ftco-animate"><a href="https://ke.linkedin.com/in/snapshot-tours-and-safaris-852300265" target="_blank"><span style="display: inline-block; width: 44px; height: 28px; margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" fill="currentColor">
  <path d="M4.458 21.025H.999V8.644h3.459zM2.729 6.709C1.225 6.709 0 5.483 0 3.978s1.225-2.73 2.729-2.73c1.505 0 2.73 1.226 2.73 2.73s-1.225 2.73-2.73 2.73zM21.827 21.025h-3.459v-5.54c0-1.316-.026-3.008-1.832-3.008-1.832 0-2.115 1.432-2.115 2.91v5.638h-3.459V8.644h3.375v1.547h.047c.471-.89 1.617-1.832 3.328-1.832 3.555 0 4.21 2.342 4.21 5.38V21.025z"/>
</svg>
</span></a></li>
</ul>
</div>
</div>
</div>
</section>



<?php 
include "includes/footer.php";
include "includes/scripts.php";
?>

<script>
  function initialize() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(-1.098023450675555, 37.02236839832163) // Van Munching Hall
    };

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // To add the marker to the map, use the 'map' property
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-1.098023450675555, 37.02236839832163), // Van Munching Hall,
        map: map,
        title: "Snapshot Tours and Safaris"
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>