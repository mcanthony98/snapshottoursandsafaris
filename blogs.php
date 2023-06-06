<?php
$pg = 7;
require "includes/connect.php";
include "includes/functions.php";
$destqry = "SELECT * FROM snapshot_blog ORDER BY blog_id DESC";
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
<title>Our Blogs - Snapshot Tours and Safaris Kenya, Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPT4TS2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include "includes/navbar.php";?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/banner2.jpg');" data-stellar-background-ratio="0.5">
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
<a href="blog-single.php?blog=<?php echo $row['blog_id'];?>" class="block-20" style="background-image: url('files/<?php echo $row['image'];?>');">
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