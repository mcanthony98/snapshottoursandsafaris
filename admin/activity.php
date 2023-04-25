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

if(isset($_POST["datefilter"])){
  $date = $_POST["datefilter"];
  $fdate = date('Y/m/d', strtotime($_POST['datefilter']));
  
  $result = $conn->query("SELECT lat, lng FROM emp_coordinate WHERE employee_id = '$eid' AND location_datetime LIKE '$fdate%' ORDER BY emp_coordinate_id Desc LIMIT 100");

}else{
  $fdate = date("Y/m/d");
  $result = $conn->query("SELECT lat, lng FROM emp_coordinate WHERE employee_id = '$eid' AND location_datetime > '$fdate' ORDER BY emp_coordinate_id Desc ");
}
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
                                   (<?php echo $fdate;?>) - (<?php echo $result->num_rows;?>)
                                </h4>
                            </div>
                            <div class="card-body">

                              <div class="w-50">
                                <form method="POST" action="#">
                                  <!-- Date -->
                                <div class="form-group">
                                  <label>Date:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" name="datefilter" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <button  class="btn btn-warning" type="submit">View Route</a>
                              </div>
                             

                              <hr class="my-4">

                              <div id="map"></div>

                                

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




<?php
include "includes/scripts.php";
?>
<script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {lat: 0, lng: 0}
            });

            <?php
                
                // Fetch coordinates from the database
                //$result = $conn->query("SELECT lat, lng FROM emp_coordinate ORDER BY emp_coordinate_id Desc LIMIT 10");

                // Create an array to store the coordinates
                $coordinates = array();

                // Loop through the result and add coordinates to the array
                while ($row = $result->fetch_assoc()) {
                    $coordinates[] = $row;
                }

                
                // Convert PHP array to JavaScript array
                $jsArray = json_encode($coordinates);

                // Output JavaScript code to create a Polyline on the map
                echo "var coordinates = $jsArray;";
                echo "console.log(coordinates);";
                echo "var path = [];";
                echo "for (var i = 0; i < coordinates.length; i++) {";
                echo "    path.push({lat: parseFloat(coordinates[i]['lat']), lng: parseFloat(coordinates[i]['lng'])});";
                echo "}";
                echo "var polyline = new google.maps.Polyline({";
                echo "    path: path,";
                echo "    geodesic: true,";
                echo "    strokeColor: '#FF0000',";
                echo "    strokeOpacity: 1.0,";
                echo "    strokeWeight: 2";
                echo "});";
                echo "polyline.setMap(map);";
            ?>

            // Fit the map to the bounds of the polyline
            var bounds = new google.maps.LatLngBounds();
            for (var i = 0; i < path.length; i++) {
                bounds.extend(path[i]);
            }
            map.fitBounds(bounds);
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj2kVmXd9RmgNx-9VFY37YK8fSB9r4qYU&callback=initMap"></script>
   

</body>
</html>
