<?php
$pg = 8;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";



$qry = "SELECT * FROM album";
$res = $conn->query($qry);
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

<?php
include "includes/navbar.php";
?>

  <!-- Main Sidebar Container -->
  <?php
include "includes/sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Gallery - Albums</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
              <li class="breadcrumb-item active">Gallery - Albums </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
                    <div class="container-fluid">
                        <!-- Default box -->
                        <div class="card card-success">
                            <div class="card-body">
                                <div class="row">
                                <?php while($row=$res->fetch_assoc()){?>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="card mb-2 bg-gradient-dark gallery-image-container">
                                    <img class="card-img-top" src="../gallery/images/<?php echo $row['album_image'];?>" alt="">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h3 class="text-primary text-white"><?php echo $row["album"]?></h3>
                                        <p class="card-text text-white pb-2 pt-1"></p>
                                        <a href="gallery-images.php?album=<?php echo $row['album_slug'];?>" class="btn btn-default">View Album </a>
                                    </div>
                                    </div>
                                </div>
                                <?php } ?>
                                </div>
                            </div>
                            </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
include "includes/footer.php";
?>

 
</div>
<!-- ./wrapper -->


<!--MODALS-->
<div class="modal fade" id="modal-view">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Corporate Training Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            
            <div class="modal-body">
            <dl class="row">
                  <dt class="col-sm-4">Name</dt>
                  <dd class="col-sm-8" id="tname">username</dd>
                  <dt class="col-sm-4">Email</dt>
                  <dd class="col-sm-8" id="temail">address</dd>
                  <dt class="col-sm-4">Phone</dt>
                  <dd class="col-sm-8" id="tphone">address</dd>
                  <dt class="col-sm-4">Type</dt>
                  <dd class="col-sm-8" id="ttype">gender</dd>
                  <dt class="col-sm-4">No. of People</dt>
                  <dd class="col-sm-8" id="tpeople"></dd>
                  <dt class="col-sm-4">Date of Event</dt>
                  <dd class="col-sm-8" id="tdot">loc</dd>
                  <dt class="col-sm-12">Additional information</dt>
                  <dd class="col-sm-12" id="tcom"></dd>
                </dl>
            </div>
            <div class="modal-footer ">
              
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      
<div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Employee Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form method="post" action="processes/processes.php">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Firstname</label>
                    <input class="form-control" placeholder="Firstname" name="fname" id="fname" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lastname</label>
                    <input class="form-control" placeholder="Lastname" name="lname" id="lname" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Email" name="email" id="email" required>
                  </div>
                </div>

<input type="hidden" id="empid" name="empid">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type=""  name="phone" id="phone" required>
                  </div>
                </div>


              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="edit-emp" class="btn btn-warning">Submit</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



<?php
include "includes/scripts.php";
?>

<script >  
 $(document).ready(function(){  
      $('.viewbk').click(function(){  
          var id = $(this).attr("id");
          $.ajax({  
                  url:"processes/processes.php",  
                  method:"POST",  
                  data:{fetch_travel_coopbooking:id}, 
                  dataType: 'json',
                  success:function(data){

                    if(data.type == 0){
                        type = "Not Specified";
                    }else if(data.type == 1){
                        type = "Team Building";
                    }else if(data.type == 2){
                        type = "Employee Training";
                    }
                    $('#tcom').html(data.comment);
                    $('#tpeople').html(data.people);
                    $('#tdot').html(data.date_of_event);
                    $('#ttype').html(type);
                    $('#tphone').html(data.phone);
                    $('#temail').html(data.email);
                    $('#tname').html(data.name);

                  }  
          }); 
		  
      });  
 });  
 </script>

</body>
</html>
