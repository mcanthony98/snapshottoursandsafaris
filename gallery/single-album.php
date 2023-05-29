<?php
$pg = 6;
require "../includes/connect.php";
include "../includes/functions.php";

if(isset($_GET['album'])){
  $album_slug = $_GET['album'];
}else{
  header ("Location: index.php");
}
$alqry = "SELECT * FROM album WHERE album_slug = '$album_slug'";
$alres = $conn->query($alqry);
$alrow = $alres->fetch_assoc();
$album_id = $alrow['album_id'];

$catqry = "SELECT * FROM album_category WHERE album_id = '$album_id'";
$catres = $conn->query($catqry);


$imgqry = "SELECT * FROM gallery_image WHERE album_id = '$album_id'";
$imgres = $conn->query($imgqry);
?>
<!DOCTYPE html>
<html lang="en">


<head>
<title><?php echo $alrow['album'];?> | Experiences &mdash; Snapshot Tours and Safaris Kenya</title>
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

<style>
  .nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.nav a:hover,
.nav a:focus,
.nav a:active {
  text-decoration: underline;
  color: #FFC300;
}

</style>
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

<div class="sticky-top"><a href="index.php" class="btn btn-warning" ><span style="font-weight: bold;">SEE ALBUMS </span></a></div>
<div class="site-section" data-aos="fade">
<div class="container-fluid">

<div class="row justify-content-center">
<div class="col-md-7">
<div class="row ">
<div class="col-12 ">
<h2 class="site-section-heading text-center"><?php echo $alrow['album'];?></h2>
</div>
</div>
</div>

<div class="col-md-11 col-lg-7 mb-5">
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php while($catrow = $catres->fetch_assoc()){?>
      <a class="p-2 text-muted" href="#"><?php echo $catrow['category_name'];?></a>
      <?php }?>
    </nav>
  </div>
</div>

</div>
<div class="row" id="lightgallery">

<?php while($imgrow = $imgres->fetch_assoc()){?>
<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6 item px-1 py-0" data-aos="fade" data-src="images/<?php echo $imgrow['image_small'];?>" data-sub-html="<?php echo $imgrow['description'];?>">
<a href="#"><img src="images/<?php echo $imgrow['image_small'];?>" alt="" class="img-fluid"></a>
</div>
<?php } ?>

</div>
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


<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7cdf824ade69b287","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>

<!--Book Custom destination form-->
<script>
$(document).ready(function() {
  $("#book_cust").submit(function(event) {
    event.preventDefault();
      var x = $("#book_cust").serialize();
      $.ajax({  
        url:"../processes.php",  
        type:"POST",  
        data:x,
        crossDomain: true,
        cache: false, 
        beforeSend:function(){  
          $('#book_cust_btn').val("Submitting...");
        }, 
        success:function(data){ 
            var element = document.getElementById("bookcustsuccess");
            element.scrollIntoView();
            $('#bookcustsuccess').html('Success');
            $('#book_cust input').val("");
            $('#book_cust textarea').val("");
            $('#book_cust_btn').val("Submit");
            window.location.href = "../thank-you-bookings.php";
        }  
});

  });
});
</script>
</body>


</html>