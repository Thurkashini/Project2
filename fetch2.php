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



if(isset($_POST['search'])){
    // Assign the fetched country to a variable and within the HTML tags with Boottrap class; list-group-item
    $response = "<ul class='list-group'><li class='list-group-item'>No countries found</li></ul>";

    $q = mysqli_real_escape_string($conn,$_POST["q"]);
    // mysql query to fetch the countries
    $query = "SELECT id name FROM user WHERE role=admin LIKE '$q'";
    // execution of the query. Output is a boolean value
    $res = mysqli_query($conn, $query);
    // Check if there are results matched
    if(mysqli_num_rows($res)>0){
        // Start the styling for fetch country list
        $response = "<ul class='list-group'>";
        // Display fetched all countries matched with the entered phrase
        while($row = mysqli_fetch_assoc($res)){
           // Concatenate the results to the previously started list
            $response .= "<li class='list-group-item'>".$row['country']."</li>";
        }
        // End the styling for fetch country list
        $response .= "</ul>";

    }
    // Close results
    exit($response);
}
?>