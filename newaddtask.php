<!DOCUMENT>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />

 <script type="text/javascript"> 

        $(function() {
            $( "#assigner" ).autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: "fetch.php",
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function( data ) {
							console.log(data);
                            response( data );
                        }
                    });
                },
            });
        });    

		$(function() {
					$( "#developer" ).autocomplete({
						source: function( request, response ) {
							$.ajax({
								url: "fetch2.php",
								dataType: "json",
								data: {
									term: request.term
								},
								success: function( data ) {
									console.log(data);
									response( data );
								}
							});
						},
					});
				});     		
 </script>
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

<div class="mx-auto" style="width: 600px;">
<div style="text-align:center"><h1 style="padding-top:100px">Add Task Details</h1></div>
            <form name="reg" style="width:100%" onSubmit = "return check(this)" action="newaddtask.php" method="post">
              <!--  <h2 style="text-align:center;">Task Assigning Form</h2>-->
                <div class="form-group row">
					
                    <label for="Task Name" class="col-md-6 col-md-push-5 control-label">Task Name</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="tname" placeholder="Task Name" class="form-control" name="tname" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="Task Description" class="col-md-6 col-md-push-5 control-label">Task Description</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="tdes" placeholder="Task Description" class="form-control" name="tdes" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="asssigner" class="col-md-6 col-md-push-5 control-label">Task Assigner</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" id="assigner" class="form-control"  name="assigner" autocomplete="off" placeholder="Task Assigner" class="form-control input-lg"  required>
                    </div> 
				</div>	
					<div id="result1">
                    
                </div>
		
				<div class="form-group row">
					
                    <label for="Task Developer" class="col-md-6 col-md-push-5 control-label">Task Developer</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="developer" name="developer" autocomplete="off" placeholder="Task Developer" class="form-control input-lg" required>
                    </div>
				</div>
				
				<div id="result2">
                    
                </div>
  
				<div class="form-group row"> 
                <button type="Submit" value="Submit" onclick="check(psw,cfpsw)" required>finish</button>
				</div>
		</form> <!-- /form -->
</div>   <!-- ./container -->
      
	
      
			
			

    
 <?php
	
 
	  if(isset($_POST['submit'])){ 
    $name = $_POST['name']; 
    echo 'name: '.$skill; 
}
	//session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$TName = $_POST['tname'];
				$TDes = $_POST['tdes'];
				$Assigner = $_POST['asssigner'];
				$Developer = $_POST['developer'];
			
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

				
				
				$sql="INSERT INTO task (tName,description,asssigner,developer)VALUES('$TName','$TDes','$Assigner','$Developer')";
				
				$res = mysqli_query($conn,$sql);
				//$count = mysqli_num_rows($conn,$sql);
				
				if(mysqli_query($conn,$sql)){
					echo"New record created successfully";
					//header ('location: adminhome.php'); 
					//exit;
				}else{
				echo"Error:".$sql." ".mysqli_error($conn);
				}
					mysqli_close($conn);
			}
				
?>
</body>
</html>