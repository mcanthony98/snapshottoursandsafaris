<?php
session_start();
require "../../includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y/m/d g:iA");



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    
    $lat = $data['latitude'];
    $longt = $data['longitude'];
    $email = $data['email'];

    $uqry = "SELECT * FROM employee WHERE email = '$email'";
    $ures = $conn->query($uqry);
    $urow = $ures->fetch_assoc();
    $uid = $urow['employee_id'];
    

    $qry = "INSERT INTO emp_coordinate (lat, lng, employee_id, location_datetime) VALUES ('$lat', '$longt', '$uid', '$date')";

    $res = $conn->query($qry);

    // Send a response back to the client
    $response = array('message' => 'Coordinates received successfully.');
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405); // Method not allowed
}

?>