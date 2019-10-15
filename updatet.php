<?php

										$servername = "localhost";
										$username = "root";
										$Password = "";
										$database = "taskmgnt";

										 //Create connection
											$conn = mysqli_connect($servername, $username, $Password, $database);
										
										// Check connection
										if (!$conn){
											die( "Connection failed: ". mysqli_connect_error());
										}
										//$taskId = isset($_GET['taskId']) ? $_GET['taskId'] : '';
										
										$taskId= $_POST['taskId'];				
										
										$TName = $_POST['tname'];
										$TDes = $_POST['tdes'];
										$Assigner = $_POST['assigner'];
										$Developer = $_POST['developer'];
										$finish=$_POST['finish'];
										
										
										$update="update task set tName='".$TName."',description='".$TDes."', asssigner='".$Assigner."',developer='".$Developer."',finish='".$finish."'where taskId='".$taskId."'";
										//print_r($update);
										
										
										if(mysqli_query($conn,$update)){
											
										header ('location: taskdelete.php'); 
												echo "<p>($$taskId) Record Updated<p>";
											}else{
												echo "<p>($$taskId) Not Updated <p> ".mysqli_error($conn);
											}
										?>