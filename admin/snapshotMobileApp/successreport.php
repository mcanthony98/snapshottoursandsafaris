<?php 
 $em = $_COOKIE["user"];
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
         
        <div class="p-2">
            <div class="alert alert-success alert-dismissible">
                <h5><i class="icon fas fa-check"></i> Success</h5>
                Your report has been submitted successfully! <br/><br/>
                Click "EXIT REPORT AREA" below to finish.
            </div>
        </div


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
