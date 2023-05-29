<?php
    session_start();
	require "../../includes/connect.php";
	date_default_timezone_set("Africa/Nairobi");
    $date = date("m/d/Y g:iA");
    $ddate = date("Y_m_d_H_i_s");

	//Login Page
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
    $encpass = md5($pass);

    $qry = "SELECT * FROM admin WHERE email='$email' AND password='$encpass'";
    $res = $conn->query($qry);
    if($res->num_rows == 0){
        $_SESSION['error'] = "Invalid Credentials!";
        header ("Location: ../index.php");
    }else{
        $row = $res->fetch_assoc();
        $_SESSION['success'] = "Logged in Successfully!";
        $_SESSION['adminid'] = $row['admin_id'];
        $_SESSION['fname'] = $row['firstname'];
        $_SESSION['lname'] = $row['lastname'];
        header ("Location: ../dashboard.php");
    }
    exit();

}
//Logout
elseif(isset($_GET['logout'])){
    session_destroy();
	session_start();
    $_SESSION["success"] = "Logged out successfully!";
	header('location: ../index.php');
    exit();
    
}
//Emp Operations (CRUD)
elseif(isset($_POST['new-emp'])){
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $em = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  

    $qry = "INSERT INTO employee(firstname, lastname, email, phone, date_added) VALUES ('$fname', '$lname', '$em', '$phone','$date')";
    $conn->query($qry);
    $_SESSION["success"] = "Employee Added Successfully!";
	header('location: ../employees.php');
    exit();

}elseif(isset($_POST['fetch_single_emp'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_single_emp"]);

    $qry = "SELECT * FROM employee WHERE employee_id='$id'";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}elseif(isset($_POST['edit-emp'])){
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $em = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $empid = mysqli_real_escape_string($conn, $_POST["empid"]);

    $qry = "UPDATE employee SET firstname='$fname', lastname='$lname', email='$em', phone='$phone' WHERE employee_id='$empid'";
    $conn->query($qry);
    $_SESSION["success"] = "Employee Details Updated Successfully!";
	header('location: ../employees.php');
    exit();

}elseif(isset($_GET['delete_emp'])){
    $empid = mysqli_real_escape_string($conn, $_GET["delete_emp"]);
    $qry = "DELETE FROM employee WHERE employee_id='$empid'";
   
    $conn->query($qry);

    $_SESSION["success"] = "Employee Deleted Successfully!";
	header('location: ../employees.php');
    exit();
}


//Report Fx's
elseif(isset($_GET['delete_report'])){
    $id = mysqli_real_escape_string($conn, $_GET["delete_report"]);
    $qry = "DELETE FROM report WHERE report_id='$id'";
   
    $conn->query($qry);

    $_SESSION["success"] = "Report Deleted Successfully!";
	header('location: ../reports.php');
    exit();

}elseif(isset($_POST['fetch_single_report'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_single_report"]);

    $qry = "SELECT * FROM report JOIN employee ON report.employee_id=employee.employee_id WHERE report.report_id = '$id'";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}

// Add new destination
elseif(isset($_POST['new-dest'])){
    $loc = mysqli_real_escape_string($conn, $_POST["loc"]);
    $days = mysqli_real_escape_string($conn, $_POST["days"]);
    $nights = mysqli_real_escape_string($conn, $_POST["nights"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
        
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../new/files/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $ddate.$file_name;
    $new_name = rename('../../new/files/'.$file_name , '../../new/files/'.$new);
    
    if($new_name === TRUE){
        $qry = "INSERT INTO destination (location, price, nights, days, image, description) VALUES ('$loc', '$price', '$nights', '$days', '$new', '$desc')";
        $res = $conn->query($qry);
        if($res === TRUE){
            $_SESSION['success'] = "Destination added Successfully!";
        }else{
            $_SESSION['error'] = "An error occured! Try Again!";
        }
    }else{
        $_SESSION['error'] = "An error occured! Try Again";
    }

    header('location: ../destinations.php');
    exit();
}

// Add new blog
elseif(isset($_POST['new-blog'])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $sub = mysqli_real_escape_string($conn, $_POST["sub"]);
    $tags = mysqli_real_escape_string($conn, $_POST["tags"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);

    
    $qry = "INSERT INTO snapshot_blog (title, subheading, tags, blog, date_created) VALUES ('$title', '$sub', '$tags', '$desc', '$date')";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Blog added Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../blogs.php');
    exit();
}


// Add new catalogue
elseif(isset($_POST['new-catalogue'])){
    
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
        
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../new/files/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $ddate.$file_name;
    $new_name = rename('../../new/files/'.$file_name , '../../new/files/'.$new);
    
    if($new_name === TRUE){
        $qry = "INSERT INTO catalogue (catalogue, date_created) VALUES ('$new', '$date')";
        $res = $conn->query($qry);
        if($res === TRUE){
            $_SESSION['success'] = "Catalogue Updated Successfully!";
        }else{
            $_SESSION['error'] = "An error occured! Try Again!";
        }
    }else{
        $_SESSION['error'] = "An error occured! Try Again";
    }

    header('location: ../catalogue.php');
    exit();
}

// Add new Subscriber
elseif(isset($_POST['new-subscr'])){
    $em = mysqli_real_escape_string($conn, $_POST["email"]);

    
    $qry = "INSERT INTO subscriber (email, date_subscribed) VALUES ('$em', '$date')";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Subscriber added Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../subscribers.php');
    exit();
}

// Delete Subscriber
elseif(isset($_GET['delete_sub'])){
    $id = mysqli_real_escape_string($conn, $_GET["delete_sub"]);

    
    $qry = "DELETE FROM subscriber WHERE subscriber_id='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Subscriber Removed Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../subscribers.php');
    exit();
}

// Read/ Unread Enquiry
elseif(isset($_GET['read_enq'])){
    $id = mysqli_real_escape_string($conn, $_GET["read_enq"]);

    $chkres = $conn->query("SELECT * FROM enquiries WHERE enquiry_id = '$id'");
    $chkrow = $chkres->fetch_assoc();

    if($chkrow['status'] == 0){
        $new = 1;
    }else{
        $new = 0;
    }

    $qry = "UPDATE enquiries SET status = '$new' WHERE enquiry_id ='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Enquiry status Updated Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../enquiries.php');
    exit();
}


// Read/ Unread Travel Request
elseif(isset($_GET['read_booking'])){
    $id = mysqli_real_escape_string($conn, $_GET["read_booking"]);

    $chkres = $conn->query("SELECT * FROM bookings WHERE booking_id = '$id'");
    $chkrow = $chkres->fetch_assoc();

    if($chkrow['read_status'] == 0){
        $new = 1;
    }else{
        $new = 0;
    }

    $qry = "UPDATE bookings SET read_status = '$new' WHERE booking_id ='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Booking status Updated Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../travel-requests.php');
    exit();
}

//fetch single travel booking
elseif(isset($_POST['fetch_travel_booking'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_travel_booking"]);

    $qry = "SELECT * FROM bookings JOIN destination ON bookings.destination_id=destination.destination_id WHERE bookings.booking_id = '$id' ";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}

//fetch single custom booking
elseif(isset($_POST['fetch_travel_cbooking'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_travel_cbooking"]);

    $qry = "SELECT * FROM custom_bookings WHERE booking_id = '$id' ";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}

// Read/ Unread Booking Request
elseif(isset($_GET['read_cbooking'])){
    $id = mysqli_real_escape_string($conn, $_GET["read_cbooking"]);

    $chkres = $conn->query("SELECT * FROM custom_bookings WHERE booking_id = '$id'");
    $chkrow = $chkres->fetch_assoc();

    if($chkrow['read_status'] == 0){
        $new = 1;
    }else{
        $new = 0;
    }

    $qry = "UPDATE custom_bookings SET read_status = '$new' WHERE booking_id ='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Booking status Updated Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../booking-requests.php');
    exit();
}

//fetch single flight booking
elseif(isset($_POST['fetch_travel_fbooking'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_travel_fbooking"]);

    $qry = "SELECT * FROM flight_bookings WHERE booking_id = '$id' ";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}

// Read/ Unread Booking Request
elseif(isset($_GET['read_fbooking'])){
    $id = mysqli_real_escape_string($conn, $_GET["read_fbooking"]);

    $chkres = $conn->query("SELECT * FROM flight_bookings WHERE booking_id = '$id'");
    $chkrow = $chkres->fetch_assoc();

    if($chkrow['read_status'] == 0){
        $new = 1;
    }else{
        $new = 0;
    }

    $qry = "UPDATE flight_bookings SET read_status = '$new' WHERE booking_id ='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Booking status Updated Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../flight-bookings.php');
    exit();
}


//fetch single transport booking
elseif(isset($_POST['fetch_travel_tbooking'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_travel_tbooking"]);

    $qry = "SELECT * FROM transport_bookings WHERE booking_id = '$id' ";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}

// Read/ Unread Transport Booking Request
elseif(isset($_GET['read_tbooking'])){
    $id = mysqli_real_escape_string($conn, $_GET["read_tbooking"]);

    $chkres = $conn->query("SELECT * FROM transport_bookings WHERE booking_id = '$id'");
    $chkrow = $chkres->fetch_assoc();

    if($chkrow['read_status'] == 0){
        $new = 1;
    }else{
        $new = 0;
    }

    $qry = "UPDATE transport_bookings SET read_status = '$new' WHERE booking_id ='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Booking status Updated Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../transport-bookings.php');
    exit();
}

//fetch single corporate booking
elseif(isset($_POST['fetch_travel_coopbooking'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_travel_coopbooking"]);

    $qry = "SELECT * FROM corporate_bookings WHERE booking_id = '$id' ";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);

}

// Read/ Unread Corporate Booking Request
elseif(isset($_GET['read_coopbooking'])){
    $id = mysqli_real_escape_string($conn, $_GET["read_coopbooking"]);

    $chkres = $conn->query("SELECT * FROM corporate_bookings WHERE booking_id = '$id'");
    $chkrow = $chkres->fetch_assoc();

    if($chkrow['read_status'] == 0){
        $new = 1;
    }else{
        $new = 0;
    }

    $qry = "UPDATE corporate_bookings SET read_status = '$new' WHERE booking_id ='$id'";
    $res = $conn->query($qry);
    if($res === TRUE){
        $_SESSION['success'] = "Booking status Updated Successfully!";
    }else{
        $_SESSION['error'] = "An error occured! Try Again!";
    }
   

    header('location: ../corporate-bookings.php');
    exit();
}


if(isset($_POST['upload-images'])){
    $album_id = $_POST["upload-images"];
    $alslug = $_POST["alslug"];
    if(isset($_POST['category'])){
        $cat_id = $_POST['category'];
    }else{
        $cat_id = "NULL";
    }

    // Folder where the images will be saved
    $targetFolder = "../../gallery/images/";

    // Iterate through each uploaded file
foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
    // Skip if no file was uploaded
    if (empty($_FILES['images']['name'][$key])) {
        continue;
    }
    
    // Generate a unique filename
    $filename = uniqid() . "_" . $_FILES['images']['name'][$key];
    
    // Compress and add company logo to the image
    compressAndAddLogo($tmp_name, $targetFolder . $filename);
    
    // Resize and save a small version of the image
    $smallFilename = resizeImage($tmp_name, $targetFolder, $filename);
    
    // Insert image information into the database
    $sql = "INSERT INTO gallery_image (image_small, image_big, album_id, category_id, date_created) VALUES ('$smallFilename', '$filename', '$album_id', '$cat_id', '$date')";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
$_SESSION['success'] = "Images Uploaded Successfully!";

header('location: ../gallery-images.php?album='.$alslug);
exit();
}


// Function to compress and add company logo to the image
function compressAndAddLogo($source, $destination) {
    // Load the image
    $image = imagecreatefromstring(file_get_contents($source));
    
    // Compress the image to 200KB size
    $quality = 75; // Adjust this value to control image quality and file size
    imagejpeg($image, $destination, $quality);
    
    // Add company logo at the bottom-right of the image
    $logo = imagecreatefrompng('../../gallery/images/logo.png'); // Replace with your company logo image path
    $logoWidth = imagesx($logo);
    $logoHeight = imagesy($logo);
    $imageWidth = imagesx($image);
    $imageHeight = imagesy($image);
    $logoX = $imageWidth - $logoWidth - 10; // Adjust the position of the logo as needed
    $logoY = $imageHeight - $logoHeight - 10; // Adjust the position of the logo as needed
    imagecopy($image, $logo, $logoX, $logoY, 0, 0, $logoWidth, $logoHeight);

    // Save the image with the logo attached
    imagejpeg($image, $destination, $quality);
    
    // Free up memory
    imagedestroy($image);
    imagedestroy($logo);

}

// Function to resize the image and save a small version
function resizeImage($source, $destinationFolder, $filename) {
    // Load the image
    $image = imagecreatefromstring(file_get_contents($source));
    
    // Resize the image to 900x750
    $width = 900;
    $height = 750;
    $resizedImage = imagescale($image, $width, $height);
    
    // Generate the small filename by adding "_small" to the original filename
    $smallFilename = str_replace(".", "_small.", $filename);
    
    // Save the resized image
    imagejpeg($resizedImage, $destinationFolder . $smallFilename, 75); // Adjust the quality as needed
    
    // Free up memory
    imagedestroy($image);
    imagedestroy($resizedImage);
    
    return $smallFilename;
}
?>