<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "taskmgnt";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
										
										
			//if (!$conn) {
			//	die("Connection failed: " . mysqli_connect_error());
			//}
			//require('db.php');
			$id=$_REQUEST['id'];
			$query = "DELETE FROM task WHERE taskId=$id"; 
			$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
			header("Location: taskdelete.php"); 
			?>