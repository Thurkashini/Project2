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

<div class="mx-auto" style="width: 600px;">
<div style="text-align:center"><h1 style="padding-top:100px">Add Task Details</h1></div>
            <form name="reg" style="width:100%" onSubmit = "return check(this)" action="newaddtask.php" method="post">
              <!--  <h2 style="text-align:center;">Task Assigning Form</h2>-->
                <div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Name</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="tname" placeholder="Task Name" class="form-control" name="tname" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Description</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="tdes" placeholder="Task Description" class="form-control" name="tdes" required>
                    </div>
				</div>
				
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Assigner</label>
                    <div class="col-md-6 col-md-push-5">
                        <input type="text" class="form-control" id="assigner" name="assigner" autocomplete="off" placeholder="Task Assigner" class="form-control input-lg"  required>
                    </div> 
				</div>	
					<div id="result1">
                    
                </div>
		
				<div class="form-group row">
					
                    <label for="firstName" class="col-md-6 col-md-push-5 control-label">Task Developer</label>
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
      
	<script>
       // start jQuery function to load the content of all functions after the page is loaded completely
     //   $(document).ready(function(){
            //jQuery function to get the keys entered by keyboard
         //   $('#assigner').typehead({   
               // source:function(query,result){
					//var assigner = document.getElementById("assigner").value;
					//var cname="<?php print($name);?>";
				
                    //$.ajax({
                        //Path for PHP file to fetch suggestion from DB
                      //  url: "fetch.php", 
                        //Fetching method       
                      //  method: "POST",
                        //Data send to the server to get the results
                      //  data: {
                       //    name : cname,             
                     //      assigner.query1: query1 
                      //  },
                
                        //Type of data sent to the server
                     //   dataType: "json",
						//success:function(data){
						//	result($.map(data,function(item){
						//		return item;
                //    }));
				//		}
				//	})
               // }
          //  });
			//$('#developer').typeahead({
				//	source: function(query1, result){
				//	var developer = document.getElementById("developer").value;
					//call php variable into javascript by using php print method
				//	var cname = "<?php print($name); ?>";
				//	$.ajax({
				//	url:"fetch.php",
				//	method:"POST",
				//	data:{name:cname:developer.query1:query1},
				//	dataType:"json",
				//	success:function(data){
				//	result($.map(data, function(item){
				//	return item;
			//		}));
			//		}
			//		})
			//		}
			//		});

			
		//	});
			
			

    </script>
 <?php
	
 
	  if(isset($_POST['submit'])){ 
    $name = $_POST['name']; 
    echo 'name: '.$skill; 
}
	//session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$TName = $_POST['tname'];
				$TDes = $_POST['tdes'];
				//$Assigner = $_POST['assigner'];
				//$Developer = $_POST['developer'];
			
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

				$request1 = mysqli_real_escape_string($conn, $_POST["assigner"]);
				$assigner = mysqli_real_escape_string($conn, $_POST["assigner"]);
					
				$request2 = mysqli_real_escape_string($conn, $_POST["developer"]);
				$developer = mysqli_real_escape_string($conn, $_POST["developer"]);
				
				$sql="INSERT INTO task (tName,description,asssigner,developer)VALUES('$TName','$TDes',
				'(select id ,name from user where role = 'user' AND name LIKE '{$request1}%)',
				'(select id ,name from user where role = 'admin' AND name LIKE '{$request2}%)'";
				
				$res = mysqli_query($conn,$sql);
				//$count = mysqli_num_rows($res);
				
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