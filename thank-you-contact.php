<?php
$pg = 8;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Contact Us - Snapshot Tours and Safaris Kenya, Africa</title>
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



<section class="ftco-section">
<div class="container">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">Thank you for Reaching us.</h2>
<p>
Thank you [Name]. Our team shall contact you in 24 hours. <br>
Meanwhile, you can check our gallery....
</p>
</div>
</div>
<div class="row">

<div class="col-md-12 heading-section text-center ftco-animate">
<a class="btn border border-primary" href="index.php">Go Back</a>
<a class="btn btn-primary"  href="gallery.php">Check out our Gallery</a>
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