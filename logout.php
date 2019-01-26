<?php


	session_start();
	if(isset($_SESSION['u_email'])){
		
		unset($_SESSION["u_email"]);
		
		
	}
	
    	echo '<script type="text/javascript">
           alert("Sucessfully Logout");
          window.location.href = "home.php";
             </script>';






?>