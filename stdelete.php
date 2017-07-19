<?php
  session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "kpp";
 

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	
	// sending query
	$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($connect, "DELETE FROM tbl_subteam WHERE id=$id");
 
//redirecting to the display page (team.php in our case)
   header("Location:steam.php");
	
?>
