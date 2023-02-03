<?php
$pg = 3.1;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";

$stqry = "SELECT * FROM report JOIN employee ON report.employee_id=employee.employee_id";
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
            <h1 class="m-0">Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
              <li class="breadcrumb-item active">Reports</li>
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
                                            <th>Employee</th>
                                            <th>Client/Office</th>
                                            <th>Respondent</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($strow = $stres->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $strow['firstname']." ". $strow['lastname'];?></td>
                                            <td><?php echo $strow['company_name'];?><br><small><?php echo $strow['company_phone'];?></small></td>
                                            <td><?php echo $strow['respondent_name'];?><br><small><?php echo $strow['respondent_phone'];?></small></td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-sm btn-info editstd" id="<?php echo $strow['report_id'];?>"  data-toggle="modal" data-target="#modal-edit"><i class="fas fa-eye"></i> </button>
                                                <a onclick="return deleteRequest('this report')" href="processes/processes.php?delete_report=<?php echo $strow['report_id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
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
              <h4 class="modal-title">Add a New Employee</h4>
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
                    <input class="form-control" placeholder="Firstname" name="fname" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lastname</label>
                    <input class="form-control" placeholder="Lastname" name="lname" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Email" name="email" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" placeholder="Phone number" name="phone" required>
                  </div>
                </div>


              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="new-emp" class="btn btn-warning">Submit</button>
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
              <h4 class="modal-title">View Report</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            
            <div class="modal-body">
            <dl class="row">
                  <span class="col-sm-6">
                    <dt >Report By</dt>
                    <dd id="employee"></dd>
                  </span>

                  <span class="col-sm-6">
                    <dt>Report Datetime</dt>
                    <dd id="datetime"></dd>
                  </span>
                  
                  <span class="col-sm-12">
                    <hr class="my-2">
                  </span>

                  <span class="col-sm-6">
                    <dt>Company Name</dt>
                    <dd id="company_name"></dd>
                  </span>
                  

                  <span class="col-sm-6">
                    <dt>Company Phone</dt>
                    <dd id="company_phone"></dd>
                  </span>
                  

                  <span class="col-sm-12">
                    <dt>Office Location</dt>
                    <dd id="company_loc"></dd>
                  </span>
                  

                  <span class="col-sm-12">
                    <hr class="my-2">
                  </span>

                  <span class="col-sm-6">
                    <dt>Respondent Name</dt>
                    <dd id="resp_name"></dd>
                  </span>
                  

                  <span class="col-sm-6">
                    <dt>Respondent Phone</dt>
                    <dd id="resp_phone"></dd>
                  </span>

                  <span class="col-sm-6">
                    <dt>Respondent Email</dt>
                    <dd id="resp_email"></dd>
                  </span>
                  

                  <span class="col-sm-12">
                    <hr class="my-2">
                  </span>

                  <span class="col-sm-12">
                    <dt>Feedback</dt>
                    <dd id="feedback"></dd>
                  </span>
                  
                </dl>
              
            </div>
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
          var rid = $(this).attr("id");
          $.ajax({  
                  url:"processes/processes.php",  
                  method:"POST",  
                  data:{fetch_single_report:rid}, 
                  dataType: 'json',
                  success:function(data){
                    $('#employee').html(data.firstname + " " + data.lastname);
                    $('#datetime').html(data.report_datetime);
                    $('#company_name').html(data.company_name);
                    $('#company_phone').html(data.company_phone);
                    $('#company_loc').html(data.company_location);
                    $('#resp_name').html(data.respondent_name);
                    $('#resp_phone').html(data.respondent_phone);
                    $('#resp_email').html(data.respondent_email);
                    $('#feedback').html(data.feedback);
                  }  
          }); 
		  
      });  
 });  
 </script>

</body>
</html>
