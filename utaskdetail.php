<?php session_start();
if(isset ($_SESSION['id'])){
	?>

<!DOCUMENT>
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
           <!-- <ul class="nav navbar-nav">
			    <li class="nav-item"><a href="userdet.php" class="nav-link">User Details</a></li>
                <li class="nav-item"><a href="adduser.php" class="nav-link">Add User</a></li>
                <li class="nav-item"><a href="userdelete.php" class="nav-link">Delete User</a></li>
                
                <li class="nav-item"><a href="ataskdetail.php.php" class="nav-link">Task Details</a></li>
                <li class="nav-item"><a href="addtask.php" class="nav-link">Add Task</a></li>
                <li class="nav-item"><a href="taskdelete.php" class="nav-link">Delete Task</a></li>
                
            </ul> -->
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                
                
                  <li class="nav-item order-2 order-md-1"><a href="logout.php" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg">  <button type="button" class="btn btn-outline-secondary">Logout</button></i></a></li>
                    
               
            </ul>
        </div>
    </div>
</nav>

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
				
				$taskId = isset($_GET['taskId']) ? $_GET['taskId'] : '';
			$result = mysqli_query($conn, "SELECT * FROM task ");	
				
?>

<div style="text-align:center"><h1 style="padding-top:100px">Task Management Details</h1></div>
<div class="row">
	<div class="col-md-2"></div>	
	<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<!--	<h3 class="panel-title">Task details</h3> -->
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
				</div>
			<!---	<div class="row justify-content-center">-->
					<div class="col-auto"> 
					
						<table class="table table-bordered table-striped text-center">
			
								<tr>
						
									<th>ID</th>
						
									<th>Task Name</th>
						
									<th>Task Description</th>
						
									<th>Assigner</th>
						
									<th>Developer</th>
									
									<th> finish or not(yes/no)</th>
									<?php  
					
										if ($_SERVER['REQUEST_METHOD'] == "POST") {
										//$conform = $_POST['confrom'];		
										
										
										$servername = "localhost";
										$username = "root";
										$password = "";
										$database = "taskmgnt";

										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $database);
										
										
										
										
										}
										
										
										?>
									
									
									
									<th>Update finishing</th>
								</tr>
					
								<?php while($row = mysqli_fetch_array($result)):?>
								 
								<tr>
											
									<td><?php echo $row['taskId']; ?></td>
											
									<td><?php echo $row['tName']; ?></td>
									
									<td><?php echo $row['description']; ?></td>
											
									<td><?php echo $row['asssigner']; ?></td>
											
									<td><?php echo $row['developer']; ?></td>
									
									<td><?php echo $row['finish'];?></td>
									
															
									<td><a href="conform.php?taskId=<?php echo $row['taskId'];?>">update finishing</a></td>
																 
									
								
									
									</form>	
								</tr>
									
								<?php endwhile; ?>
		 
						</table>
				<!---	</div> -->
				</div> 
			</div>
		</div>
</div>

<?php }else echo"please login first";
	//echo $_SESSION['email'];
?>
				

</body>
</html>