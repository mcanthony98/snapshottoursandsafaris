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


//Fetch destination
if(isset($_POST['fetch_single_dest'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_single_dest"]);

    $qry = "SELECT * FROM destination WHERE destination_id = '$id'";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);
}


//Specific Dest form
if(isset($_POST['book_specific_dest'])){
    $destid = mysqli_real_escape_string($conn, $_POST["book_specific_dest"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $people = mysqli_real_escape_string($conn, $_POST["people"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    
    $qry = "INSERT iNTO bookings (name, phone, email, country, destination_id, date_of_travel, comment, people, date_created) VALUES ('$name', '$phone', '$email', '$country', '$destid', '$dateT', '$comment', '$people', '$date')";
    $res = $conn->query($qry);
    
    echo $output;
}

//Specific Dest form
if(isset($_POST['book_custom_dest'])){
    $dest = mysqli_real_escape_string($conn, $_POST["book_custom_dest"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $nights = mysqli_real_escape_string($conn, $_POST["nights"]);
    $people = mysqli_real_escape_string($conn, $_POST["people"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    
    $qry = "INSERT iNTO custom_bookings (name, phone, email, country, destination, date_of_travel, nights, comment, people, date_created) VALUES ('$name', '$phone', '$email', '$country', '$dest', '$dateT', '$nights', '$comment', '$people', '$date')";
    $res = $conn->query($qry);
    
    echo $output;
}
?>