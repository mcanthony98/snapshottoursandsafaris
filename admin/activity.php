<?php
$pg = 2;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";

if(!isset($_GET['emp'])){
    echo '<script>location.replace("employees.php");</script>';
    exit();
}
$eid = $_GET['emp'];

$stqry = "SELECT * FROM employee WHERE employee_id = $eid";
$stres = $conn->query($stqry);
$emprow = $stres->fetch_assoc();
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
            <h1 class="m-0">Employee Activity</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
              <li class="breadcrumb-item active">Employee Activity</li>
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
                                <h4 class="card-title">
                                   <?php echo $emprow["firstname"] . " " . $emprow["lastname"];?>
                                </h4>
                            </div>
                            <div class="card-body">

                              <div class="w-50">
                                 <!-- Date and time range -->
                                 <div class="form-group">
                                    <label>Date and time range:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservationtime">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                              </div>
                              <div class="w-50">
                                <a class="btn btn-warning" target="_blank" href="fullmap.php">See Full Map</a>
                              </div>

                              <hr class="my-2">

                              <div id="my-map"></div>

                                

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

<script type="text/javascript">
      var map = L.map("my-map").setView([-1.0983475,37.0216585], 10);

      // Get your own API Key on https://myprojects.geoapify.com
      var myAPIKey = "4516024d306a46c0805d530943c5c6bd";

      // Retina displays require different mat tiles quality
      var isRetina = L.Browser.retina;

      var baseUrl =
        "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey={apiKey}";
      var retinaUrl =
        "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}@2x.png?apiKey={apiKey}";

      // Add map tiles layer. Set 20 as the maximal zoom and provide map data attribution.
      L.tileLayer(isRetina ? retinaUrl : baseUrl, {
        attribution:
          'Powered by <a href="https://www.geoapify.com/" target="_blank">Geoapify</a> | © OpenStreetMap <a href="https://www.openstreetmap.org/copyright" target="_blank">contributors</a>',
        apiKey: myAPIKey,
        maxZoom: 20,
        id: "osm-bright",
      }).addTo(map);
    </script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

  })
  
</script>




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
