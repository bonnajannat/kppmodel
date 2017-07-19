<?php
session_start();

        $con=  mysqli_connect("localhost", "root", "", "kpp");

        if(!$con)
       {
           die('not connected');
       }
        
		$con1=  mysqli_query($con, "select * from tbl_subteam");
		           
			
       ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Admin Panel </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <style type="text/css">
 
body{
	
	margin: 0px;
	border: 0px;
	background: rgb(52, 73, 94);
} 
 h3{
	 
	
	 color: white;
     padding: 0px;	 
	 
 }
 
	
 .list-group{
	 
	 color: black;
	 background: white;
 }
 .customDiv{
	  background: white;
	
 }

.table td {
   text-align: center;   
}

 </style>
 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </head>
  <body>
    
  <section class= "One">
         <div class="container">
	     <div class="row">
         <div class="col-md-12">
		<div class="text-center">
  <img src="user.jpg"  class="rounded" alt="user" width="80" height="80">

  
		  <h3 class="text-center">Welcome to Admin pannel !!!</h3>
		  </div>
		  </div>
		  </div>
		  </div>
	
	 </section>
	 
	 <section class="two">
	 <div class="container">
	  <div class="row">
      <div class="col-md-3">
	  <div class="customDiv">
		<ul class="list-group"> 
		   
		   <a href="team.php" class="list-group-item">Team Creation </a>
		   <a href="steam.php" class="list-group-item">Sub Team Creation </a>
		   <a href="newregister.php" class="list-group-item"> Add New Member </a>
		   <a href="pw.php" class="list-group-item"> Password change </a>
		   <a href="logout.php" class="list-group-item"> Log Out </a>
		   
		</ul>
		
		</div>
		</div>
		
         <div class="col-md-9" >
	     <div class="customDiv">
		 <table class="table responsive">
		 <table id= "team_data" class = "table table-bordered">
		 <thead>
		  
		  <tr>
		      
			   
		       <td><strong>Sub Team Name </strong></td>
			   <td><strong> Team Name </strong></td>
			   <td><strong>Option</strong></td>
			   </tr>
		  </thead>
		  <?php

             while($row=  mysqli_fetch_array($con1))

             {
                    
			echo "<tr>";
			
			echo "<td>".$row['stname']."</td>";
            echo "<td>".$row['tname']."</td>";
				
			echo "<td><a href=\"stedit.php?id=$row[id]\">Edit</a> | <a href=\"stdelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
         
        }
        ?>
             
		 
		  </table>
		  
		 <form name = "form3" action= "addstname.php"   method= "POST">
		 <table class="table responsive">
		 <table id= "team_data" class = "table table-bordered">
		 <thead>
		  <tr>
		  <td><input type="text1" placeholder="Enter Sub Team Name" name="stname"></td>
		  <td><select name="tname">
		    <option value="">--Select Team Name--</option>
              <?php
	             $res = mysqli_query($con, "select * from tbl_tname");
	             while($row = mysqli_fetch_array($res)){
	         ?>
                 <option>  <?php echo $row["tname"];?></option>
              <?php	 
	          }
	        ?>
              </select> 
                </td>

		  <td> <button type="submit" class="btn btn-primary btn-sm"> add </button></td>
		  
		  </tr>
		  </thead>
		  </form>
		 </table>
		 </div>
		 
		</div>
		
		 </div>
		 </div>
</section>
		



		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>