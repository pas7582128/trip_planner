<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);


if(isset($_POST['psw']) && !empty($_POST['psw'])  
	&& isset($_POST['uname']) && !empty($_POST['uname'])){
		
		
	$name = $_POST["uname"];
	$password = $_POST["psw"];
	if($password!=NULL && $name!=NULL){ 
	
    $result=mysqli_query($conn,"SELECT * FROM admin WHERE name='$name' AND password='$password' ");
	$i1 = mysqli_num_rows($result);
    if($i1)
    {
		$_SESSION["USERNAME"] = $name;
		//echo "Successfully login". $_SESSION["USERNAME"];
	
		header("Location:admin.html")or
		die("Could not select db: " . mysql_error());
    }
    else {
      echo '<script type="text/javascript">
           alert("Invalid userid or password");
          window.location.href = "home.php";
             </script>';
	  
    }
  }
		
		
		
		
		
	}
	else{
		
		//echo "PROBLEM";
		
	echo '<script type="text/javascript">
           alert("Enter the userid or password");
          window.location.href = "home.php";
             </script>';
		
	}


?>