<?php session_start(); 
if(isset ($_SESSION['id'])){
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

			<link href="style.css" rel="stylesheet" type="text/css">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="adminhome.php">Task Management System</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
			 <li class="nav-item"><a href="userdet.php" class="nav-link">User Details</a></li>
                <li class="nav-item"><a href="adduser.php" class="nav-link">Add User</a></li>
                <li class="nav-item"><a href="userdelete.php" class="nav-link">Delete User</a></li>
                
                <li class="nav-item"><a href="ataskdetail.php" class="nav-link">Task Details</a></li>
                <li class="nav-item"><a href="addtask.php" class="nav-link">Add Task</a></li>
                <li class="nav-item"><a href="taskdelete.php" class="nav-link">Delete Task</a></li>
                
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                
                
                  <li class="nav-item order-2 order-md-1"><a href="logout.php" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"><button type="button" class="btn btn-outline-secondary">Logout</button></i></a></li>
                    
               
            </ul>
        </div>
    </div>
</nav> 


						
<?php


							$servername = "localhost";
							$username = "root";
							$password = "";
							$database = "taskmgnt";

					//Create connection
							$conn = mysqli_connect($servername, $username, $password, $database);
										
					// Check connection
						if (!$conn){
							die( "Connection failed: ". mysqli_connect_error());
						}
								
										
					$taskId = isset($_GET['taskId']) ? $_GET['taskId'] : '';
							 		
										
					$query = "SELECT * from task where taskId='".$taskId."'";
					$result = mysqli_query($conn, $query) or die ( mysqli_error());
					$row = mysqli_fetch_assoc($result);
										
					print_r($query);					
										
					if(isset($_POST['submit']) && $_POST['submit'])
										
										
					
					if(mysql_num_rows($query)>=1)
						while($row = mysql_fetch_array($query)) {
										
						
			
										
					mysqli_query($conn, $update) or die(mysqli_error($conn));	
					}
					?>
										
<div class="mx-auto" style="width: 600px;">
											
	<div style="text-align:center"><h1 style="padding-top:100px">Did You Finish the task ?</h1></div>
         <form name="reg" style="width:100%"  action="updateyes.php" method="post">
              <!--  <h2 style="text-align:center;">Task Assigning Form</h2>-->
                
				<div class="form-group row"> 	
                   
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="finish" placeholder="yes/no" class="form-control" name="finish" value="<?php echo $row['finish'];?>" required>
                    </div>
				
				
				<!--define the taskId variable to updatet.php-->
					<input type="hidden" name="taskId" value="<?php echo $taskId =(isset($taskId)) ? $taskId : '';?>">
			
			
				<div class="col-md-6 ">
					<div style="text-align:center">
						<button type="submit" value="<?php echo $row['finish'];?>"  required>finish</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>  
			<?php }else echo"please login first";
	
?>							
			</body>
			</html>