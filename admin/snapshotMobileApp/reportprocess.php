<?php
session_start();
require "../../includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y/m/d g:iA");

if(isset($_POST['submitreport'])){
    $uid = mysqli_real_escape_string($conn, $_POST['submitreport']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $cphone = mysqli_real_escape_string($conn, $_POST['cphone']);
    $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);
    $cloc = mysqli_real_escape_string($conn, $_POST['cloc']);
    $rname = mysqli_real_escape_string($conn, $_POST['rname']);
    $rphone = mysqli_real_escape_string($conn, $_POST['rphone']);
    $remail = mysqli_real_escape_string($conn, $_POST['remail']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    $qry = "INSERT INTO report (employee_id, company_name, company_phone, company_location, respondent_name, respondent_phone, respondent_email, feedback, report_datetime) VALUES ('$uid', '$cname', '$cphone', '$cloc', '$rname', '$rphone', '$remail', '$feedback', '$date')";

    $res = $conn->query($qry);

    if($res === TRUE){
        header('location: successreport.php');
        exit();	
    }else{
        header('location: failreport.php');
        exit();	
    }
}
?>

