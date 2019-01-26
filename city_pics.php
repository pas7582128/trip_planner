<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
body { 
  background: linear-gradient(90deg, #2bc0e4 10%, #eaecc6 90%);
  background-attachment: fixed;
}
   .text{
	   
	   position: relative;
    text-align: center;
    color: white;
   }
   
   .top-left {
    position: absolute;
    top: 20px;
    left: 42px;
	color:#ffffff;
}
  
   .top-left2 {
    position: absolute;
    top: 40px;
    left: 42px;
	color:#ffffff;
}
  
  
  
  
  
  
  
  #stats > .panel.col-md-10 {
  padding-left: 0;
  padding-right: 0;
}




img {
    border: 2px solid #ffffff;
    border-radius: 10px;
    padding: 5px;
    width: 150px;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(255, 102, 102, 0.5);
}
  </style>
  
 
 <link rel="stylesheet" href="sign_login.css">
 
 
 
 
</head>
<body>

<h1>Places Are On Homepage</h1>
<div class="container">    
  <div class="row" id = "result">
  	
<?php

   
	

$sql0 = "select state from location";
$sql1 = "select city from location";

$sql2= "select pic from location";



$result0 = mysqli_query($conn,$sql0);
$result = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);

if (!$result0 || !$result || !$result2) {
	echo mysqli_error($conn);
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
	
while(($row0 = mysqli_fetch_array($result0)) && ($row = mysqli_fetch_array($result) ) && ($row1 = mysqli_fetch_array($result2) )){
	?>
	
	
	
	
    <div class="col-sm-4">
      <div class="panel panel-primary">
	  <div class="panel-body text col-md-10">
       
      <img src="<?=$row1[0]?>" class="img-responsive" style="width:100%;height:250px" alt="Image"></div>
	  <div class="top-left"><a href="admincity.php?var=<?php echo $row[0] ?>" style="color:#FFFFFF;"><?php echo $row[0];?></a></div>
		 <div class="top-left2"><?php echo $row0[0] ?></div>
		</div>
		</div>
		    
<?php
}



?>
     
   
   </div>
  </div>
</div>

<br>

<br><br>

</body>
</html>
