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
				


				$term=$_REQUEST["term"];
				
					
					$query = "SELECT name FROM user WHERE role='user' AND name LIKE '%$term%'";
					$result = mysqli_query($conn,$query);
					
					//print_r($query);
					
					
						while($row = mysqli_fetch_array($result))
						{
							$json[]=array(
							'value'=> $row['name'],
							'label'=> $row['name']
							);
						}
						
						
								echo json_encode($json);

				?>