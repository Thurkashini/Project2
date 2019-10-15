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


				if(isset($_POST['email']))
						{
						 $email=$_POST['email'];

						 $checkdata=" SELECT email FROM user WHERE email='$email' ";

						 $query=mysql_query($checkdata);

						 if(mysql_num_rows($query)>0)
						 {
						  echo "Email Already Exist";
						 }
						 else
						 {
						  echo "OK";
						 }
						 exit();
						}
						?>