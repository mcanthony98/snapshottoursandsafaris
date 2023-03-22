<?php
$pg = 7;
require "../includes/connect.php";
include "includes/functions.php";
$blog_id = $_GET['blog'];
$destqry = "SELECT * FROM snapshot_blog WHERE blog_id = '$blog_id'";
$destres = $conn->query($destqry);
$row = $destres->fetch_assoc();

$tagsArr = explode (",", $row['tags']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Snapshot Tours and Safaris - Explore Unlimited!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include "includes/stylesheets.php";?>
</head>
<body>
<?php include "includes/navbar.php";?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/banner2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<h1 class="mb-3 bread"><?php echo $row['title'];?></h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blogs.php">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $row['title'];?> <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-lg-8 order-md-last ftco-animate">
<h2 class="mb-3"><?php echo $row['title'];?></h2>
<p><?php echo $row['blog'];?></p>
<div class="tag-widget post-tag-container mb-5 mt-5">
<div class="tagcloud">
<?php foreach($tagsArr as $x => $x_value) {?>
<a href="javascript:void()" class="tag-cloud-link"><?php echo $x_value;?></a>
<?php }?>
</div>
</div>


<hr class="my-3">

<!--
<div class="pt-5 mt-5">
<h3 class="mb-5">6 Comments</h3>
<ul class="comment-list">
<li class="comment">
<div class="vcard bio">
<img src="images/person_1.jpg" alt="Blog comment">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">October 03, 2018 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
 </div>
</li>
<li class="comment">
<div class="vcard bio">
<img src="images/person_1.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">October 03, 2018 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
<li class="comment">
<div class="vcard bio">
<img src="images/person_1.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">October 03, 2018 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
</ul>

<div class="comment-form-wrap pt-5">
<h3 class="mb-5">Leave a comment</h3>
<form action="#" class="p-5 bg-light">
<div class="form-group">
<label for="name">Name *</label>
<input type="text" class="form-control" id="name">
</div>
<div class="form-group">
<label for="email">Email *</label>
<input type="email" class="form-control" id="email">
</div>
<div class="form-group">
<label for="website">Website</label>
<input type="url" class="form-control" id="website">
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
</div>
</form>
</div>
</div>
-->

</div> 






<?php 
$othblogsqry = "SELECT * FROM snapshot_blog WHERE blog_id <> '$blog_id' ORDER BY blog_id DESC LIMIT 4";
$othblogres = $conn->query($othblogsqry);
?>
<div class="col-lg-4 sidebar ftco-animate">
<div class="sidebar-box ftco-animate">
<h3>Recent Blog</h3>

<?php while($othblogsrow = $othblogres->fetch_assoc()){?>
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="blog-single.php?blog=<?php echo $othblogsrow['blog_id'];?>"><?php echo $othblogsrow['title'];?></a></h3>
<div class="meta">
<div><a href="blog-single.php?blog=<?php echo $othblogsrow['blog_id'];?>"><span class="icon-calendar"></span> <?php echo date('F d, Y', strtotime($othblogsrow['date_created']));?></a></div>
<div><a href="blog-single.php?blog=<?php echo $othblogsrow['blog_id'];?>"><span class="icon-person"></span> Admin</a></div>
<div><a href="blog-single.php?blog=<?php echo $othblogsrow['blog_id'];?>"><span class="icon-chat"></span> 19</a></div>
</div>
</div>
</div>
<?php } ?>

</div>
<div class="sidebar-box ftco-animate">
<h3>Tag Cloud</h3>
<div class="tagcloud">
<?php foreach($tagsArr as $x => $x_value) {?>
<a href="#" class="tag-cloud-link"><?php echo $x_value;?></a>
<?php }?>
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