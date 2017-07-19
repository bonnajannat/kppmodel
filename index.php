<?php

include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Site </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <style type="text/css">
 
     h1 {
	
	text-align: center;
    color: white; 
	
	 }
	h4{
		
		text-align: center;
        color: white; 
	}
	
	a {
    color: red;
     }
	 
	body{
	background: rgb(52, 73, 94);
	} 
	.form-control{
	border-radius: 5px;
	background-color: rgba(8, 8, 8, 0.87 );
	color: white;
	
	}
	
	.btn{
	border-radius: 5px;
	background: rgba(8, 8, 8, 0.87 );;
	color: white;
	width: 100%;
	
	}
	
	form{
	background: rgba(236, 236, 236, 0.98);
	padding: 100px;
	border-radius: 5px;
	box-shadow: 0 0px 12px rgba(0, 0, 0, .74);
	
	}
	.row{
		text-align: center;	
	}
	span {
      color:red
}
 </style>
 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body> <br>
    <h1>Welcome To KPP Model!!!</h1> </br>
	

	 <div class="container-fluid">
	  <div class="row">
       	<div class="col-md-offset-3 col-md-6">
	  
	  <form action= "" method= "POST"> 
	 
	
		   <div class="form-group">

                  
                   <input type="username" class="form-control"  name= "user" placeholder="Username" >
              </div>
              <div class="form-group">
                   
                    <input type="password" class="form-control" name="pass" placeholder="********">
             </div>
          
		 
              <button type="submit" class="btn btn-default" name="register_btn" > LogIn </button> <br> </br>
			  <span><?php echo $error; ?></span>
			  
			
             <div  style="text-align:center">
			 <a href="fgp.php">Forgot your Password?</a>
			 
			 </div>
             
          
			  
    
		</div> 
          </div>
             </div>		
</form>			 
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
