<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$teamname=mysql_real_escape_string($_POST['tname']);
    
    $bool = true;
	
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("kpp") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from tbl_tname"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_tname = $row['tname']; // the first username row is passed on to $table_users, and so on until the query is finished
		
		if (empty($teamname)) 
		{
			
			$bool = false; // sets bool to false
            Print '<script>alert("Fill up the txt box");</script>'; //Prompts the user
			Print '<script>window.location.assign("team.php");</script>'; // redirects to index.php
        }

	    if($teamname == $table_tname) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Team already exited!");</script>'; //Prompts the user
			Print '<script>window.location.assign("team.php");</script>'; // redirects to index.php
			
		}
		
		
	}
	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO tbl_tname (tname) VALUES ('$teamname')"); //Inserts the value to table users
		Print '<script>alert("Successfully Added!");</script>'; // Prompts the user
		Print '<script>window.location.assign("team.php");</script>'; // redirects to index.php
	}
}

?>