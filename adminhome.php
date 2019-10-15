<?php session_start(); ?>
<!DOCUMENT>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">





</head>
<body>
<?php


					$servername = "localhost";
					$username = "root";
				$password = "";
					$database = "taskmgnt";

					 //Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
//
		$query = "select id ,email, password from user";
		//$result = mysqli_query($conn,$query);
		
		if(isset ($_SESSION['id'])){
			
			
			
			
			
?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="">Task Management System</a>
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

	<div style="text-align:center;">
	<img src="task1.jpg" alt="" width="1535" height="400">
	<h2 style="text-align:center;" >Task Management System</h2>
    <h3>welcome to Task management system. Manage the task between developer</h3>
	
	</div>
<?php }else echo"please login first";
	//echo $_SESSION['email'];
?>
</body>
</html>