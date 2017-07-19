<?php
include('session.php');
if(isset($_SESSION['user'])){
	
	if((time()- $_SESSION['last_time'])>360)
	{
		header("location: logout.php");
	}else {
		
		$_SESSION['last_time']= time();
		
		
	}
}

require 'config.php';  // Database connection
//////// End of connecting to database ////////
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
 h3,h4{
	 
	
	 color: white;
     padding: 0px;	 
	 text-align: center;
 }
 h5{
	 
	color: black;
	text-align: center;
 }
	
 .list-group{
	 
	 color: black;
	 background: white;
 }
 .customDiv{
	  background: white;
	
 }
.btn{
	border-radius: 5px;
	background: rgba(8, 8, 8, 0.87 );;
	color: white;
	width: 100%;
	
	}
	
	form{
	background: rgba(236, 236, 236, 0.98);
	padding: 10px;
	border-radius: 5px;
	box-shadow: 0 0px 12px rgba(0, 0, 0, .74);
	
	}

.table td {
   text-align: center;   
}

	
	


 </style>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<<script type="text/javascript"> >
function reload(form)
{
var val=form.team.options[form.team.options.selectedIndex].value;
self.location='newregister.php?item=' + val ;
}
</script>
  </head>
  <body> 
  <section class= "One">
         <div class="container">
	     <div class="row">
         <div class="col-md-12">
		<div class="text-center">
  <img src="user.jpg"  class="rounded" alt="user" width="80" height="80">

  
		  <h3 class="text-center">Welcome to Admin pannel !!!</h3>
		  <h4 class="text-center"> Welcome : <i><?php echo $login_session; ?></i></h4>
		  </div>
		  </div>
		  </div>
		  </div>
	
	 </section>
	 
	 
	 
	 <section class="two">
	 <div class="container-fluid">
	  <div class="row">
      <div class="col-md-3">
	  <div class="customDiv">
		<ul class="list-group"> 
		   
		   <a href="team.php" class="list-group-item"> Team Creation </a>
		   <a href="steam.php" class="list-group-item"> Sub Team Creation </a>
		   <a href="newregister.php" class="list-group-item"> Add New Member </a>
		   <a href="pw.php" class="list-group-item"> Password change </a>
		   <a href="logout.php" class="list-group-item"> Log Out </a>
		   
		</ul>
		
		</div>
		</div>

        
        
        
<div class="col-md-9">
<form name = "form" action= "newlogin.php"   method= "POST" onsubmit= "return validation()" > 
	 
	<h5> Create New Team Member </h6>
       <div class="form-group">
                    
                
                   <input type="username"  name= "user" class="form-control" placeholder="Enter Username" required="required">
              </div>
              <div class="form-group">
                   
                    <input type="password"  name="pass" class="form-control" placeholder="Enter Password" required="required">
             </div>
       
	   
			 <div class="form-group">
                   
            <input type="password"  name="pass1" class="form-control" placeholder="Enter Re-type Password" required="required">
             </div>
			 
	   <div class="form-group">
                   
                    <input type="email"  name="email" class="form-control" placeholder="Enter E-mail" required="required">
             </div>
			 
			 
	   <div class="form-group">
                   
                    <input type="text"  name="dsgn" class="form-control" placeholder="Enter Designation" required="required">
             </div>
	     <div class="form-group"> 
		 <select name="tname" class="form-control">
		   <option value="">--Select Team Name--</option>
            
              </select>
			  </div>
		  
		 <div class="form-group"> 
		 <select name="tname" class="form-control">
		   <option value="">--Select Sub Team Name--</option>
            
              </select>
			  </div>
			  
              <button type="submit" class="btn btn-default" > Register </button> <br> </br>
			 
			 
			  
			  
   
	</div>	
</div>	
</form>			 
	

		 
		 
		 
		 
		</div>
		
		 </div>
		 
</section>		 
		 

		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>