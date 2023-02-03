<?php
    session_start();
	require "../../includes/connect.php";
	date_default_timezone_set("Africa/Nairobi");
    $date = date("m/d/Y g:iA");

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
?>