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
										//$id = isset($_GET['id']) ? $_GET['id'] : '';
										
										$id =$_POST['id'];
										$name =$_POST['name'];
										$email =$_POST['email'];
										$gender =$_POST['gender'];
										$role =$_POST['role'];
										$address =$_POST['address'];
										$password =$_POST['psw'];
										$phoneno =$_POST['phoneno'];
										//$password = isset($_GET['password']) ? $_GET['password'] : '';
										
										
										$update="update user set name='".$name."',email='".$email."', gender='".$gender."',role='".$role."', address='".$address."', phoneno='".$phoneno."', password='".$password."' where id='".$id."'";
										//print_r($update);
										
										
										if(mysqli_query($conn,$update)){
											
											header ('location: userdelete.php'); 
												echo "<p>($id) Record Updated<p>";
											}else{
												echo "<p>($id) Not Updated <p> ".mysqli_error($conn);
											}
										?>