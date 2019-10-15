
<?php session_start(); 
if(isset ($_SESSION['id'])){?>
<!DOCUMENT>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="style.css" rel="stylesheet" type="text/css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<script>
			function checkemail()
					{
					 var email=document.getElementById( "email" ).value;
						
					 if(email)
					 {
					  $.ajax({
					  type: 'post',
					  url: 'ajax.php',
					  data: {
					   user_email:email,
					  },
					  success: function (response) {
					   $( '#email' ).html(response);
					   if(response=="OK")	
					   {
						return true;	
					   }
					   else
					   {
						return false;	
					   }
					  }
					  });
					 }
					 else
					 {
					  $( '#email' ).html("");
					  return false;
					 }
					}
				</script>

</head>



<script>
	 window.onload = function check(form) {
		password1 = form.psw.value;
			password2 = form.cfpsw.value;
			
		if (password1!=password2) {
				alert("\npassword is not match please try again")
				return (false);
				
			} else {
				
			return (true);
				}
			}
			
			
	</script>  
</head>

<?php
session_start();
$_SESSION['id'] = '1';?>
<body onload='document.reg.psw.focus()'>


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

<div class="mx-auto" style="width: 600px;">
<div style="text-align:center"><h1 style="padding-top:100px">User Registration</h1></div>
            <form name="reg" id="fupForm" style="width:100%" action="adduser.php" method="post">
                <h2 style="text-align:center;">                  </h2>
				
				
                <div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Name</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="name" placeholder="Name" class="form-control" name="name" required>
                    </div>
				</div>
				
				<div class="form-group row">
                    <label for="email" class="col-md-6 col-md-push-5 control-label">Email</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="email" class="form-control" id="email" placeholder="Email" class="form-control" name= "email" required>
                    </div>
				</div>
				
				<div class="form-group row">
                    <label class="control-label col-md-6">Gender</label>
						<div class="col-md-6 col-md-push-5">
							<div class="row">
								<div class="col-md-6">
									<label class="radio-inline">
										<input type="radio" name="gender" class="form-control" id="female" onkeyup="checkemail();" value="female" required>Female
									</label>
								</div>
									
								<div class="col-md-6">	
								
									<label class="radio-inline">
										<input type="radio" name="gender" class="form-control" id="male" value="male" required>Male
									</label>
								</div>
							</div>
						</div>
                </div>
				
				<div class="form-group row">
					
                    <label for="Role" class="col-md-6 col-md-push-5 control-label">Role</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="role" placeholder="Role" class="form-control" name="role" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="address" class="col-md-6 col-md-push-5 control-label">Address</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="address" placeholder="Name" class="form-control" name="address" required>
                    </div>
				</div>
				<div class="form-group row">
					
                    <label for="phonenumber" class="col-md-6 col-md-push-5 control-label">PhoneNo</label>
                    <div class="col-md-6 col-md-push-5">
                        <input title="This is not a valid phone number" type="tel" class="form-control" id="phonenum" placeholder="PhoneNumber" class="form-control" name="phoneno" data-validation="number" datavalidation-ignore="$" pattern="^[0-9\-\+]{10}$" required >
                    </div>
				</div>
                
                <!--"^\d{4}-\d{3}-\d{4}$"-->
				
              
			  <div class="form-group row">
                    <label for="password" class="col-md-6 col-md-push-5 control-label">Password</label>
                    <div class="col-md-6 col-md-push-5">
                        <input title="Password must contain at least 8 characters, including letters,numbers and special characters " type="password" class="form-control" id="psw" placeholder="Password"  name="psw" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"  
						onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');if(this.checkValidity()) form.pwd2.pattern = RegExp.escape(this.value);">
                    </div>
              </div>
               
			  <div class="form-group row">
                    <label for="Confirm Password" class="col-md-6 col-md-push-5 control-label">Confirm Password</label>
                    <div class="col-md-6 col-md-push-5">
                        <input title="Please enter the same Password as above" type="password" class="form-control" id="cfpsw" placeholder="Confirm Password" class="form-control" name="cfpsw"  required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" name="pwd2" 
						onchange="this.setCustomValidit(this.validity.patternMismatch ? this.title : '');">  
  
                    </div><!-- pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" -->
               </div>
                
				
				<div class="form-group row">
                    <label for="status" class="col-md-6 col-md-push-5 control-label">Status </label>
                    <div class="col-md-6 col-md-push-5">
						<div class="input-group" >
							 <select name="select" id="select"class="col-md-12" class="combobox" required>
								  <option></option>
								  <option value="Active">Active</option>
								  <option value="In-active">In-active</option>
								  <option value="Delete">Delete</option>
							</select>
						</div>
					</div>
				<div class="form-group row"> 
				<div class="col-md-24 ">
				<div style="text-align:center">
                <button type="submit" value="Submit"  required>Register</button>
				</div>
				</div>
				</div>
			</form> <!-- /form -->
      </div>   <!-- ./container -->
				
	  
	  </body>
	  </html>
 <?php
	  
	//session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$Name = $_POST['name'];
				$Email = $_POST['email'];
				$Gender = $_POST['gender'];
				$Role = $_POST['role'];
				$Address = $_POST['address'];
				$PhoneNo = $_POST['phoneno'];
				
				$Password = $_POST['psw'];
				$status = $_POST['select'];
					
				
				
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
				
				//if(isset($_POST['select']))
					
					//{
					
					//$query = mysqli_query("INSERT TO user VALUES(status='".$_POST['select']."'");
					
					//}

				
				
				$sql="INSERT INTO user (name,email,gender,role,address,phoneno,password,status)VALUES('$Name','$Email','$Gender','$Role','$Address','$PhoneNo','$Password','$status')";
				
				if(mysqli_query($conn,$sql)){
					//echo"New record created successfully";
					//exit(header('location: adminhome.php'));
					//exit;
					?> <script> location.replace("adminhome.php"); </script><?php
				}else{
					echo"Error:".$sql." ".mysqli_error($conn);
				}
					mysqli_close($conn);
						
			}?>
	<?php 
	}else echo"please login first";
	
?>		

