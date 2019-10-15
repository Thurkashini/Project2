

<?php session_start(); 
if(isset ($_SESSION['id'])){
	?>
<!DOCUMENT>
<html>

<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  -->
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="JavaScript">
                  function clickedButton()
            {

                window.location.href = 'utaskdetail.php'

            }
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="">Task Management System</a>
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
                
                
                  <li class="nav-item order-2 order-md-1"><a href="logout.php" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg">  <button type="button" class="btn btn-outline-secondary">Logout</button></i></a></li>
                    
               
            </ul>
        </div>
    </div>
</nav>

		<h2 style="text-align:center;" >Task Management System</h2>
	<div style="text-align:center;">
	<img src="task1.jpg" alt="" width="1535" height="400">
		<h1>Welcome</h1>
		<h2>Do You have any task to finish</h2>
		<h2>check it</h2><button type="button" name="button" onclick="clickedButton()" style="height:40px;width:150px">Task</button>
	</div>
	
	<?php }else echo"please login first";
	//echo $_SESSION['email'];
?>
	
</body>
</html>