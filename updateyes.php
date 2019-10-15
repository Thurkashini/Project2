


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
										$taskId = isset($_GET['taskId']) ? $_GET['taskId'] : '';
										
										$taskId= $_POST['taskId'];				
										
										
										$finish=$_POST['finish'];
										
										?><input type="hidden" name="taskId" value="<?php echo $taskId =(isset($taskId)) ? $taskId : '';?>"><?php
										
										$update="update task set finish='".$finish."'where taskId='".$taskId."'";
										print_r($update);
										
										
										if(mysqli_query($conn,$update)){
											
											header ('location: utaskdetail.php'); 
												echo "<p>($taskId) Record Updated<p>";
											}else{
												echo "<p>($taskId) Not Updated <p> ".mysqli_error($conn);
											}
										?>