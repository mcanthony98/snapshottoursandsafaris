<?php
session_start();
require "../../includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y/m/d g:iA");

if(isset($_POST['coord'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $lat = mysqli_real_escape_string($conn, $_POST['lat']);
    $longt = mysqli_real_escape_string($conn, $_POST['longt']);
    
    $uqry = "SELECT * FROM employee WHERE email = '$email'";
    $ures = $conn->query($uqry);
    $urow = $ures->fetch_assoc();
    $uid = $urow['employee_id'];


    $qry = "INSERT INTO emp_coordinate (lat, lng, employee_id, location_datetime) VALUES ('$lat', '$longt', '$uid', '$date')";

    $res = $conn->query($qry);

    if($res === TRUE){
       echo "success";
    }else{
        echo "error";
    }
}
?>

