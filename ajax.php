<?php


					$servername = "localhost";
					$username = "root";
					$password = "";
					$database = "taskmgnt";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					
					
					
					// Check connection
					if (!$conn){
						die( "Connection failed: ". mysqli_connect_error());
					}

						//echo "Connected successfully";


						
						
				
						 $email=$_POST['email'];

						 $checkdata=" SELECT email FROM user WHERE email='$email' ";

						 $query=mysqli_query($conn,$checkdata);

						 if(mysqli_num_rows($query)>0)
						 //{
						  echo 'Email Already Exit';
						  exit();
						 //}
						 //else{
						 // echo 'Ok Your Email Validate';
						 // exit();
						// }
							 
						
						?>