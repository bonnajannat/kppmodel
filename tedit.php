<?php
session_start();

// including the database connection file
include_once("db2.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $tname=$_POST['tname'];
  
    // checking empty fields
         
        if(empty($tname)) {
            echo "<font color='red'>Team Name field is empty.</font><br/>";
        }
      
     else {    
        //updating the table
        $result = mysqli_query($connect, "UPDATE tbl_tname SET tname='$tname'WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: team.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM tbl_tname WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
    $tname = $row['tname'];
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Edit Data </title>

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
		   <a href="steam.php" class="list-group-item"> Sub Team Creation </a>
		   <a href="newregister.php" class="list-group-item"> Add New Member </a>
		   <a href="pw.php" class="list-group-item"> Password change </a>
		   <a href="logout.php" class="list-group-item"> Log Out </a>
		   
		</ul>
		
		</div>
		</div>
		
         <div class="col-md-9" >
	     <div class="customDiv">
		 <form name="form4" method="post" action="tedit.php">
		 <table class="table responsive">
		 <table id= "team_data" class = "table table-bordered">
		 <thead>
            
               <tr> 
                <td><input type="text1" name="tname" value="<?php echo $tname;?>"></td>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update" ></td>
            </tr>
			</thead>
			</table>
			</table>
			</form>
			
			
			
	
	 
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