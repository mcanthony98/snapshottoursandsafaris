<?php
    session_start();
	require "../includes/connect.php";
	date_default_timezone_set("Africa/Nairobi");
    $date = date("m/d/Y g:iA");
    $ddate = date("Y_m_d_H_i_s");

	//Subscribe to Newsletter
if(isset($_POST['sub_newsletter'])){
    $em = mysqli_real_escape_string($conn, $_POST["sub_newsletter"]);
    $output = 1;
    
    $chkres = $conn->query("SELECT * FROM subscriber WHERE email = '$em'");
    if($chkres->num_rows > 0){
        $output = 0; //Already subscribed
    }else{
        $qry = "INSERT iNTO subscriber (email, date_subscribed) VALUES ('$em', '$date')";
        $res = $conn->query($qry);
    }

    echo json_encode($output);
}

//Contact Us form
if(isset($_POST['contactEnquiry'])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $em = mysqli_real_escape_string($conn, $_POST["contactEnquiry"]);
    $sub = mysqli_real_escape_string($conn, $_POST["sub"]);
    $sms = mysqli_real_escape_string($conn, $_POST["sms"]);
    $output = 1;
    
    $qry = "INSERT iNTO enquiries (name, email, subject, message, date_created) VALUES ('$name', '$em', '$sub', '$sms', '$date')";
    $res = $conn->query($qry);
    
    echo $output;
}

?>