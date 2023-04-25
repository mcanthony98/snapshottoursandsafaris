<?php
$pg = 2;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Route Map</title>
    
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {lat: 0, lng: 0}
            });

            <?php
                
                // Fetch coordinates from the database
                $result = $conn->query("SELECT lat, lng FROM emp_coordinate ORDER BY emp_coordinate_id Desc LIMIT 10");

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
