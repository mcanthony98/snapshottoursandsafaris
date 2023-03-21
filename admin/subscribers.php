<?php
$pg = 9.2;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";

$stqry = "SELECT * FROM subscriber";
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
            <h1 class="m-0">Newsletter Subscribers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
              <li class="breadcrumb-item active">Subscribers</li>
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
                            <div class="card-header">
                                <div class="card-tools">
                                    <button class="btn btn-sm bg-gradient-warning" data-toggle="modal" data-target="#modal-new"><i class="fa fa-plus"></i> Create New</button>
                                </div>
                            </div>
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Date Subscribed</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($strow = $stres->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $strow['email'];?></td>
                                            <td><?php echo $strow['date_subscribed'];?></td>
                                            <td class="text-nowrap">
                                               <a onclick="return deleteRequest('<?php echo $strow['email'];?>');" href="processes/processes.php?delete_sub=<?php echo $strow['subscriber_id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
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
<div class="modal fade" id="modal-new">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add a New Subscriber</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form method="post" action="processes/processes.php">
            <div class="modal-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Email" name="email" required>
                  </div>
                </div>

            

              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="new-subscr" class="btn btn-warning">Submit</button>
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
      $('.editstd').click(function(){  
          var id = $(this).attr("id");
          $.ajax({  
                  url:"processes/processes.php",  
                  method:"POST",  
                  data:{fetch_single_emp:id}, 
                  dataType: 'json',
                  success:function(data){
                    $('#fname').val(data.firstname);
                    $('#lname').val(data.lastname);
                    $('#email').val(data.email);
                    $('#phone').val(data.phone);
                    $('#empid').val(data.employee_id);
                  }  
          }); 
		  
      });  
 });  
 </script>

</body>
</html>
