<?php
$pg = 5.1;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";

function setStatus ($status){
    if($status == 0){
        return '<span class="text-primary">Unread</span>';
    }else{
        return '<span class="text-success">Read</span>';
    }
}

$stqry = "SELECT * FROM bookings";
$stres = $conn->query($stqry);
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
            <h1 class="m-0">Travel Bookings (Chosen Destinations)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
              <li class="breadcrumb-item active">Travel Bookings</li>
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
                        <div class="card">
                           
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Package</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($strow = $stres->fetch_assoc()){
                                            $destid = $strow['destination_id'];
                                            $destres = $conn->query("SELECT * FROM destination WHERE destination_id = $destid");
                                            $destrow = $destres->fetch_assoc();
                                            ?>
                                        <tr>
                                            <td><?php echo $strow['name'];?></td>
                                            <td><?php echo $strow['email'];?> <br> <?php echo $strow['phone'];?></td>
                                            <td><?php echo $destrow['location'];?> <br> <?php echo $strow['date_of_travel'];?></td>
                                            <td><?php echo setStatus($strow['read_status']);?></td>
                                            <td><?php echo $strow['date_created'];?></td>
                                            <td class="text-nowrap">
                                            <button class="btn btn-sm btn-primary viewbk" id="<?php echo $strow['booking_id'];?>"  data-toggle="modal" data-target="#modal-view"><i class="fas fa-eye"></i> </button>
                                                <?php if($strow['read_status'] == 0){?>
                                               <a  href="processes/processes.php?read_booking=<?php echo $strow['booking_id'];?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i> </a>
                                               <?php }else{?>
                                                <a  href="processes/processes.php?read_booking=<?php echo $strow['booking_id'];?>" class="btn btn-sm btn-warning"><i class="fas fa-times"></i> </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

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
              <h4 class="modal-title">Travel Information</h4>
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
                  <dt class="col-sm-4">Country</dt>
                  <dd class="col-sm-8" id="tcountry">gender</dd>
                  <dt class="col-sm-4">Destination</dt>
                  <dd class="col-sm-8" id="tdest"></dd>
                  <dt class="col-sm-4">Date of Travel</dt>
                  <dd class="col-sm-8" id="tdot">loc</dd>
                  <dt class="col-sm-4">No. of People</dt>
                  <dd class="col-sm-8" id="tpeople"></dd>
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
                  data:{fetch_travel_booking:id}, 
                  dataType: 'json',
                  success:function(data){
                    $('#tcom').html(data.comment);
                    $('#tpeople').html(data.people);
                    $('#tdot').html(data.date_of_travel);
                    $('#tdest').html(data.location);
                    $('#tcountry').html(data.country);
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
