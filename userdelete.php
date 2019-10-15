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
            <ul class="nav navbar-nav">
			    <li class="nav-item"><a href="userdet.php" class="nav-link">User Details</a></li>
                <li class="nav-item"><a href="adduser.php" class="nav-link">Add User</a></li>
                <li class="nav-item"><a href="userdelete.php" class="nav-link">Delete User</a></li>
                
                <li class="nav-item"><a href="taskdet.php" class="nav-link">Task Details</a></li>
                <li class="nav-item"><a href="addtask.php" class="nav-link">Add Task</a></li>
                <li class="nav-item"><a href="taskdelete.php" class="nav-link">Delete Task</a></li>
                
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                
                
                  <li class="nav-item order-2 order-md-1"><a href="logout.php" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg">  <button type="button" class="btn btn-outline-secondary">Logout</button></i></a></li>
                    
               
            </ul>
        </div>
    </div>
</nav>



<div style="text-align:center"><h1 style="padding-top:100px">User Details</h1></div>
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
									<th>Name</th>
						
									<th>Email</th>
						
									<th>Gender</th>
						
									<th>Role</th>
						
									<th>Address</th>
									
									<th>Phone No</th>
									<th>Status</th>
									
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
										
									
										
										?>
									
									<th>Update</th>
									
									<th>Delete</th>
								</tr>
					
								<?php
								
								$query = "SELECT * FROM user";
								$result = mysqli_query($conn,$query) or die ('could not delete delete record'.mysql_error());
								//echo $query;
								//if(mysqli_num_rows($result) > 0){
								
								
								//}
								//echo "error";
								
								
								while($row = mysqli_fetch_array($result)):
								?>
								 
								<tr>
									<td><?php echo $row['id']; ?></td>
											
									<td><?php echo $row['name']; ?></td>
									
									<td><?php echo $row['email']; ?></td>
									
									<td><?php echo $row['gender']; ?></td>
											
									<td><?php echo $row['role']; ?></td>
									
									<td><?php echo $row['address']; ?></td>
											
									<td><?php echo $row['phoneno']; ?></td>
									
									<td><?php echo $row['status']; ?></td>
									<td><a href="edituserdetail.php?id=<?php echo $row['id'];?>">Update</a></td>		
											
									<td><a href="deleteu.php?id=<?php echo $row['id'];?>">Delete</a></td>
								</tr>
									<?php endwhile; ?>
								
						</table>
				<!---</div> -->
				</div> 
			</div>
		</div>
</div>
							
</body>
</html>