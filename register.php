<!DOCUMENT>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<link href="style.css" rel="stylesheet" type="text/css">

<script>
//function ValidateEmail(email) {
//	
	//	if (email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
	//		{
		//		return (true);
		//	}
	//	else{	
		//		alert("You have entered an invalid email address!")
		//		return (false);
		//	}
//}
		
		function phonenumber(phoneno)
				{
				  
				  if(phoneno.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/))
					{
						return (true);
					}
				else{
						alert("message");
						return (false);
					}
}
</script>
<script>
	  function check(form) {
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
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Task Management System</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <!--<ul class="nav navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">More</a></li>
            </ul>
			-->
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                
                
                  <li class="nav-item order-2 order-md-1"><a href="home2.php" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg">  <button type="button" class="btn btn-outline-secondary">Logout</button></i></a></li>
                    
               
            </ul>
        </div>
    </div>
</nav>

<div class="mx-auto" style="width: 600px;">

            <form name="reg" style="width:100%" onSubmit = "return check(this)" action="register.php" method="post">
                <h2 style="text-align:center;">                  </h2>
				
				<h2 style="text-align:center;">Registration Form</h2>
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
										<input type="radio" name="gender" class="form-control" id="female" value="female" required>Female
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
                        <input type="tel" class="form-control" id="phonenum" placeholder="PhoneNumber" class="form-control" name="phoneno" required>
                    </div>
				</div>
                
                <!--"^\d{4}-\d{3}-\d{4}$"-->
				<div class="form-group row">
					
                    <label for="username" class="col-md-6 col-md-push-5 control-label">UserName</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="username" placeholder="UserName" class="form-control" name="username" required>
                    </div>
				</div>
              
			  <div class="form-group row">
                    <label for="password" class="col-md-6 col-md-push-5 control-label">Password</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="password" class="form-control" id="psw" placeholder="Password" class="form-control" name="psw" required>
                    </div>
              </div>
               
			  <div class="form-group row">
                    <label for="Confirm Password" class="col-md-6 col-md-push-5 control-label">Confirm Password</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="password" class="form-control" id="cfpsw" placeholder="Confirm Password" class="form-control" name="cfpsw" required>
                    </div>
               </div>
                
				
				<div class="form-group row">
                    <label for="status" class="col-md-6 col-md-push-5 control-label">Status </label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="status" class="form-control" id="status" placeholder="Status" class="form-control" name= "status" required>
                    </div>
				</div>
				<div class="form-group row"> 
                <button type="submit" value="Submit" onclick="check(psw,cfpsw) fun()" required>Register</button>
				</div>
			</form> <!-- /form -->
      </div>   <!-- ./container -->
	  
				  <script>
					function Fun() {
					  location.replace("http://localhost/Project2/home.html")
					}
				</script>

	  
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
				$UserName = $_POST['username'];
				$Password = $_POST['psw'];
					//if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $PhoneNo)) {
				  // $phone is valid
				//}else{
				///	echo "phono is not validated";
					
				//}
				
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
				
				
				$sql="INSERT INTO user (name,email,gender,role,address,phoneno,username,password)VALUES('$Name','$Email','$Gender','$Role','$Address','$PhoneNo','$UserName','$Password')";
				
				if(mysqli_query($conn,$sql)){
					//echo"New record created successfully";
					//header:("Location: home.html");
					//exit;
				}else{
					echo"Error:".$sql." ".mysqli_error($conn);
				}
					mysqli_close($conn);
					//if (isset($_POST['submit'])){   header("Location: home,html")   }
					
					if($Name !=''&& $Email !=''&& $Gender !=''&& $Role !=''&& $Address !=''&& $PhoneNo !=''&& $UserName !=''&& $Password !='')
					{
				//  To redirect form on a particular page
					header:("Location: home.html");
					}
					else{
					?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
					}				
			}
			
?>