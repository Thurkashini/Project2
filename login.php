<?php
session_start();
?>

<!DOCUMENT>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css">


<script>
function validateForm() {
  var x = document.forms["login"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
	}
}
</script>	
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="home2.php">Task Management System</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
           <!-- <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">More</a></li>
            </ul>
            -->
        </div>
    </div>
</nav>

	<img src="login.png" alt="" class="center" width="50" height="60">
		<div class="mx-auto" style="width: 430px;">
			<form name="login" method="POST">
				
				<div class="form-group row">
					 <label for="firstName" class="col-md-4 control-label">Email</label>
						<div class="col-md-8">
							<input type="email" class="form-control" id="email" placeholder="Enter the Email" class="form-control" name= "email" required>
						</div>
				</div>


				<div class="form-group row">
					<label for="password" class="col-md-4 control-label">Password</label>
						<div class="col-md-8">
							<input type="password" class="form-control" id="psw" placeholder=" Enter the Password" class="form-control" name="psw" required>
						</div>
				</div>
      
				<div class="form-group row"> 
					<button type="submit" name="submit">Login</button>
				</div>
			</form>
		</div>
</body>

				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					// Define $username and $password
					//$UserName=$_POST['username'];
					$Password=$_POST['psw'];
					$Email=$_POST['email'];
				
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
				
					
					
					// SQL query to fetch information of registerd users and finds user match.
						$error="";
						$query = "select * from user where password='$Password' AND email='$Email'";
						$result = mysqli_query($conn,$query);
						$row = mysqli_fetch_array($result);
						
						$_SESSION['id']=$row['id'];
						$_SESSION['role']=$row['role'];
						$count = mysqli_num_rows($result);
						//echo $query;
						if ($count == 1) {
							
								if ($row['role']=="admin")
								{ 
									$_SESSION['role']=$row['role'];
									
									header ('location: adminhome.php'); 
									
								}
								else if ($row['role']=="user")
								{ 
									$_SESSION['role']=$row['role'];
 
									header ('location: userhome.php'); 
								
								}
							 $error='Your PassWord or Email is not Found';
							    // echo "error";
							 
						}else{
							?><script type="text/javascript">
								alert("invalid Email/password.  Please try again");
							  </script>
							<?php
							//header ('location: login.php'); 
								//printf("Query failed: %s\n", mysqli_connect_error());
						//exit;
							}
						//echo "error";
				
				mysqli_close($conn);
				}			//else echo "error";
					
					
				
				?>
</html>