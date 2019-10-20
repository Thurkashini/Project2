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
			 <!-- <li class="nav-item"><a href="userdet.php" class="nav-link">User Details</a></li> -->
                <li class="nav-item"><a href="adduser.php" class="nav-link">Add User</a></li>
               <li class="nav-item"><a href="userdelete.php" class="nav-link">User Details</a></li>
                
               <!-- <li class="nav-item"><a href="taskdet.php" class="nav-link">Task Details</a></li> -->
                <li class="nav-item"><a href="addtask.php" class="nav-link">Add Task</a></li>
                <li class="nav-item"><a href="taskdelete.php" class="nav-link">Task Details</a></li>
                
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
											
	<div style="text-align:center"><h1 style="padding-top:100px">Update Task Details</h1></div>
         <form name="reg" style="width:100%"  action="updatet.php" method="post">
              <!--  <h2 style="text-align:center;">Task Assigning Form</h2>-->
                <div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Name</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="tname" placeholder="Name" class="form-control" name="tname" value="<?php echo $row['tName'];?>"  required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Description</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="tdes" placeholder="Task Description" class="form-control" name="tdes" value="<?php echo $row['description'];?>" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Assigner</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="assigner" placeholder="Task Assigner" class="form-control" name="assigner" value="<?php echo $row['asssigner'];?>" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Developer</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="developer" placeholder="Task Developer" class="form-control" name="developer" value="<?php echo $row['developer'];?>" required>
                    </div>
				</div>
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Finish</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="finish" placeholder="yes/no" class="form-control" name="finish" value="<?php echo $row['finish'];?>" required>
                    </div>
				</div>
				
				<!--define the taskId variable to updatet.php-->
						<input type="hidden" name="taskId" value="<?php echo $taskId =(isset($taskId)) ? $taskId : '';?>">
			
			<div class="form-group row"> 
				<div class="col-md-12 ">
					<div style="text-align:center">
						<button type="submit" value="Submit"  required>Update</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>  
			<?php }else echo"please login first";
	//echo $_SESSION['email'];
?>							
			</body>
			</html>