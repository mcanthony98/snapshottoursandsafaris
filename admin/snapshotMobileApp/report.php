<?php
require "../../includes/connect.php";
if(isset($_GET['em'])){
    $em =  mysqli_real_escape_string($conn, $_GET['em']);
    setcookie("user", $em, time() + (86400 * 30), "/");
}elseif(isset($_COOKIE["user"])){
  $em = $_COOKIE["user"];
  setcookie("user", $em, time() + (86400 * 30), "/");
}else{
  $em = "User Not Found!";
}

$qry = "SELECT * FROM employee WHERE email = '$em'";
$res = $conn->query($qry);
if($res->num_rows > 0){
    $row = $res->fetch_assoc();
    $uid = $row['employee_id'];
}else{
    header('location: failreport.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Snapshot Report</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <style>
    /* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "includes/navbar.php";?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <div class="content">
      <div class="container pt-2 pb-3">
        <!-- Default box -->
         <h3 class="text-center"><u>WRITE A REPORT</u></h3>
         

         <form id="quickForm" method="POST" action="reportprocess.php">
        <div class="pt-2" id="f1">
            <h5 class="text-left">Company Details</h5>
            
                <div class="form-group">
                    <label for="1">Company Name</label>
                    <input type="text" name="cname" class="form-control" id="1" placeholder="Enter name of company">
                </div>
                <div class="form-group">
                    <label for="2">Company Phone number</label>
                    <input type="text" name="cphone" class="form-control" id="2" placeholder="Enter company contact number">
                </div>
                <div class="form-group">
                    <label for="3">Company Email</label>
                    <input type="email" name="cemail" class="form-control" id="3" placeholder="Enter company email">
                </div>
                <div class="form-group">
                    <label for="4">Company Location</label>
                    <textarea class="form-control" rows="3" id="4" name="cloc" placeholder="Building, landmark..."></textarea>
                </div>

                <div class="row">
                    <button id="next1" type="button" class="btn btn-warning btn-block btn-flat">NEXT STEP</button>
                </div>
        </div>



        <div class="pt-2 d-none" id="f2">
            <h5 class="text-left">Respondent Details</h5>
                <div class="form-group">
                    <label for="5">Respondent Name</label>
                    <input type="text" name="rname" class="form-control" id="5" placeholder="Enter name of respondent">
                </div>
                <div class="form-group">
                    <label for="6">Respondent Phone</label>
                    <input type="text" name="rphone" class="form-control" id="6" placeholder="Enter respondent contact">
                </div>
                <div class="form-group">
                    <label for="7">Company Email</label>
                    <input type="email" name="remail" class="form-control" id="7" placeholder="Enter respondent email">
                </div>

                <div class="row">
                    <div class="col-6"><button type="button" id="prev2" class="btn btn-default btn-block btn-flat">PREV STEP</button></div>
                    <div class="col-6"><button type="button" id="next2" class="btn btn-warning btn-block btn-flat">NEXT STEP</button></div>
                    
                </div>
        </div>



        <div class="pt-2 d-none" id="f3">
            <h5 class="text-left">Response/Feedback</h5>
            <div class="form-group">
                <label for="8">Feedback</label>
                <textarea class="form-control" rows="7" name="feedback" id="8" placeholder="What information did you receive? "></textarea>
            </div>
            <div class="row">
                <div class="col-6"><button type="button" id="prev3" class="btn btn-default btn-block btn-flat">PREV STEP</button></div>
                <div class="col-6"><button id="submit" type="submit" class="btn btn-warning btn-block btn-flat">SUBMIT</button></div>
            </div>
        </div>
 
        <input type="hidden" name="submitreport" value="<?php echo $uid;?>">
         </form>
        


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script>
   $(document).ready(function(){  
            $('#next1').click(function(){  
                
                $('#f1').addClass('d-none'); 
                $('#f2').removeClass('d-none');
                              
            });  
        });
</script>

<script>
    $(document).ready(function(){  
             $('#prev2').click(function(){  
                 
                 $('#f2').addClass('d-none'); 
                 $('#f1').removeClass('d-none');
                               
             });  
         });
 </script>

<script>
    $(document).ready(function(){  
             $('#next2').click(function(){  
                 
                 $('#f2').addClass('d-none'); 
                 $('#f3').removeClass('d-none');
                               
             });  
         });
 </script>

<script>
    $(document).ready(function(){  
             $('#prev3').click(function(){  
                 
                 $('#f3').addClass('d-none'); 
                 $('#f2').removeClass('d-none');
                               
             });  
         });
 </script>

</body>
</html>
