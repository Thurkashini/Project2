

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



if(empty($_POST["query1"])) {
    //retrieve the country name from index.php
   $Assigner = $_POST['assigner'];
    //retrieve user input to do autocomplete
    $request = mysqli_real_escape_string($conn, $_POST["query"]);
	$assigner = mysqli_real_escape_string($conn, $_POST["assigner"]);
    $query = "select id ,name  from user where role = 'user' AND asssigner='$Assigner'name LIKE '{$request}%' GROUP BY user_name";
    $result = mysqli_query($conn, $query);
    $data = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row["name"];
        }
            echo json_encode($data);
    }
}
else{

 
    //retrieve the country name from index.php
  $Developer = $_POST['developer'];
    //retrieve user input to do autocomplete
    $request = mysqli_real_escape_string($conn, $_POST["query1"]);
    $developer = mysqli_real_escape_string($conn, $_POST["developer"]);
    $query = "select id ,name from user where role = 'admin' AND developer='$Developer'name LIKE '{$request}%' GROUP BY admin_name";
    $result = mysqli_query($conn, $query);
    $data = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        $data[] = $row["name"];
        }
        echo json_encode($data);
    }
}


?>