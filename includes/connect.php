<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u640333703_snapshot');
define('DB_PASSWORD', '36987412Snapshot');
define('DB_DATABASE', 'u640333703_snapshot');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//verify connection
	 if ($conn->connect_error){
		 die("Connection Failed: <br />" .$conn->connect_error);
	  }
 
?>