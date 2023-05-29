<?php
$pg = 6;
require "../includes/connect.php";
include "../includes/functions.php";

$qry = "SELECT * FROM album";
$res = $conn->query($qry);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/photon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 16:06:58 GMT -->
<head>
<title>Our Gallery | Albums | Experiences &mdash; Snapshot Tours and Safaris Kenya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/lightgallery.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">
<?php include "../includes/stylesheets.php";?>
</head>
<body>

<div class="site-wrap">
<div class="site-mobile-menu">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>

<?php include "includes/navbar.php";?>

<div class="container-fluid mt-3" data-aos="fade" data-aos-delay="500">
  <h2 class="text-center mb-3">Albums</h2>
<div class="swiper-container images-carousel">
<div class="swiper-wrapper">

  <?php while($row=$res->fetch_assoc()){?>
<div class="swiper-slide">
<div class="image-wrap">
<div class="image-info">
<h2 class="mb-3"><?php echo $row["album"]?></h2>
<a href="single-album.php?album=<?php echo $row['album_slug'];?>" class="btn btn-outline-white py-2 px-4">More Photos</a>
</div>
<img src="images/<?php echo $row['album_image'];?>" alt="Image">
</div>
</div>
<?php }?>
</div>
<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
<div class="swiper-scrollbar"></div>
</div>
</div>

<?php include "includes/footer.php";?>

</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/picturefill.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>


<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7cdf820a6cd1b287","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>


</html>