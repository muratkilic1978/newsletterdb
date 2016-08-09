<?php

//connect to database.
/* use require to include the connectdb.php file which connect to the database */
include ('includes/connectdb.php');

if(isset($_GET['id'])){
	$sql = "delete from newsletter where id =".$_GET['id'];
	if(mysqli_query($dbc, $sql)){
		header('Location:viewnewsletter.php');
	}else{
		echo "Error ".mysqli_error($dbc);
	}

}


?>