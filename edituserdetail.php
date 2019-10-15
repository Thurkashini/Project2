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
                
                <li class="nav-item"><a href="taskdet.php" class="nav-link">Task Details</a></li>
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
										
										
										//Define variable id
									$id = isset($_GET['id']) ? $_GET['id'] : '';
											
										$query = "SELECT * from user where id='".$id."'";
										$result = mysqli_query($conn, $query) or die ( mysqli_error());
										$row = mysqli_fetch_assoc($result);
										//print_r($query);					
										
										?>				
										
										<?php
										
										if(isset($_POST['submit']) && $_POST['submit'])
										
										
										
										if(mysql_num_rows($query)>=1)
											while($row = mysql_fetch_array($query)) {
										
										
										
										
										
										mysqli_query($conn, $update) or die(mysqli_error($conn));	
										}
										?>
										
										<div class="mx-auto" style="width: 600px;">
											<div style="text-align:center"><h1 style="padding-top:100px">Update User Details</h1></div>
														<form name="reg" style="width:100%" action="updateu.php" method="post">
															<h2 style="text-align:center;">                  </h2>
															
															
															<div class="form-group row">
															<label for="firstName" class="col-md-6 col-md-push-5 control-label">Name</label>
															<div class="col-md-6 col-md-push-5">
																<input type="text" class="form-control" id="name" placeholder="Name" class="form-control" name="name" value="<?php echo $row['name'];?>" required>
															</div>
														</div>
														
														<div class="form-group row">
															<label for="email" class="col-md-6 col-md-push-5 control-label">Email</label>
															<div class="col-md-6 col-md-push-5">
																<input type="email" class="form-control" id="email" placeholder="Email" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
															</div>
														</div>
														
														<div class="form-group row">
															<label class="control-label col-md-6">Gender</label>
																<div class="col-md-6 col-md-push-5">
																	<div class="row">
																	<input type="hidden" name="id" value="<?php echo $id =(isset($id)) ? $id : '';?>">
																		<div class="col-md-6">
																			<label class="radio-inline">
																				<input type="radio" name="gender" class="form-control" id="genderfemale" value="female" required>Female
																			</label>
																		</div>
																			
																		<div class="col-md-6">	
																		
																			<label class="radio-inline">
																				<input type="radio" name="gender" class="form-control" id="gendermale" value="male" required>Male
																			</label>
																		</div>
																	</div>
																</div>
														</div>
														
														<div class="form-group row">
															
															<label for="Role" class="col-md-6 col-md-push-5 control-label">Role</label>
															<div class="col-md-6 col-md-push-5">
																<input type="text" class="form-control" id="role" placeholder="Role" class="form-control" name ="role" value="<?php echo $row['role'];?>" required>
															</div>
														</div>
														
														<div class="form-group row">
															
															<label for="address" class="col-md-6 col-md-push-5 control-label">Address</label>
															<div class="col-md-6 col-md-push-5">
																<input type="text" class="form-control" id="address" placeholder="Name" class="form-control" name ="address" value="<?php echo $row['address'];?>" required>
															</div>
														</div>
														<div class="form-group row">
															
															<label for="phonenumber" class="col-md-6 col-md-push-5 control-label">PhoneNo</label>
															<div class="col-md-6 col-md-push-5">
																<input title="This is not a valid phone number" type="tel" class="form-control" id="phoneno" placeholder="PhoneNumber" class="form-control" name="phoneno" value="<?php echo $row['phoneno'];?>" data-validation="number" datavalidation-ignore="$" pattern="^[0-9\-\+]{10}$" required >
															</div>
														</div>
														
														<!--"^\d{4}-\d{3}-\d{4}$"-->
														
													  
													  <div class="form-group row">
															<label for="password" class="col-md-6 col-md-push-5 control-label">Password</label>
															<div class="col-md-6 col-md-push-5">
																<input title="Password must contain at least 8 characters, including letters,numbers and special characters " type="password" class="form-control" id="psw" placeholder="Password" class="form-control" name="psw" value="<?php echo $row['password'];?>" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"  
																onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');if(this.checkValidity()) form.pwd2.pattern = RegExp.escape(this.value);">
															</div>
													  </div>
													   
													  <div class="form-group row">
															<label for="Confirm Password" class="col-md-6 col-md-push-5 control-label">Confirm Password</label>
															<div class="col-md-6 col-md-push-5">
																<input title="Please enter the same Password as above" type="password" class="form-control" id="cfpsw" placeholder="Confirm Password" class="form-control" name="cfpsw"  value="<?php echo $row['password'];?>" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" name="pwd2" 
																onchange="this.setCustomValidit(this.validity.patternMismatch ? this.title : '');">  
										  
															</div><!-- pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" -->
													   </div>
														
														
														<div class="form-group row">
															<label for="status" class="col-md-6 col-md-push-5 control-label">Status </label>
															<div class="col-md-6 col-md-push-5">
																<div class="input-group" >
																	 <select class="col-md-12" class="combobox " value ="<?php echo $row['status'];?>" required>
																		  <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
																		  <option value="Active">Active</option>
																		  <option value="In-active">In-active</option>
																		  <option value="Delete">Delete</option>
																	</select>
																</div>
															</div>


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
	
?>		
			</body>
			</html>