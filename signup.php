<?php


include_once('lib/smtp_validateEmail.class.php');


$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

require 'PHPMailer-master/PHPMailerAutoload.php';



	

	
	
	
	



if(isset($_POST['mobile']) && !empty($_POST['mobile']) isset($_POST['uname']) && !empty($_POST['uname'])  && isset($_POST['password']) && !empty($_POST['password'])  
	&& isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['location']) && !empty($_POST['location'])){
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	$mobile  = $_POST['mobile'];
	$location = $_POST['location'];
	$name = $_POST["uname"];
/*	$SMTP_Validator = new SMTP_validateEmail();




$results = $SMTP_Validator->validate(array(($email)));
	if (!$results[$email]) {
      echo '<script type="text/javascript">alert("Email address is not valid");window.location.href="home.php";</script>';
		$flag=0;
	} 
	
	*/
	
	
	
	
	
	
	
	
	
    $hash = md5( rand(0,1000) );
	
	$message = '
 
Thanks for signing up as a blogger!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$email.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://localhost/Blog/verify.php?email='.$email.'&hash='.$hash.'
 
';
                     	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$result=mysqli_query($conn,"SELECT * FROM login WHERE email='$email'");
	$result1=mysqli_query($conn,"SELECT * FROM login WHERE mobile='$mobile'");
	$result2=mysqli_query($conn,"SELECT * FROM login WHERE name='$name'");
	
	
	if($result && $result1 && $result2){
		
    if(mysqli_num_rows($result1))
    {
		echo "Mobile No is already Registred!!!";
	
		//echo '<script type="text/javascript">alert("Username already taken!!!")</script>';
		echo '<script type="text/javascript">
           alert("Mobile No is already Registred!!!");
          window.location.href = "home.php";
             </script>';  
	
    }
	else if(mysqli_num_rows($result)){
		echo "Email registered!!!";
	
		//echo '<script type="text/javascript">alert("Username already taken!!!")</script>';
		echo '<script type="text/javascript">
           alert("Email is already Registred !!!");
          window.location.href = "home.php";
             </script>';
		}
		else if(mysqli_num_rows($result2)){
		echo "Email registered!!!";
	
		//echo '<script type="text/javascript">alert("Username already taken!!!")</script>';
		echo '<script type="text/javascript">
           alert("Username is already Registred !!!");
          window.location.href = "home.php";
             </script>';
		}
    else {
		
      //echo '<script type="text/javascript">alert("Invalid Username or Password!!!")</script>';
	$sql = "INSERT INTO login (name,email,password,mobile,c_location,hash,active)   
         VALUES ('$name','$email','$password','$mobile','$location','$hash','0')";
		 
		 
	   if ($conn->query($sql) === TRUE) {
		  //Mailer code
/*	
	
$mail = new PHPMailer;
$mail->isSMTP();                            
$mail->Host = 'smtp.gmail.com';            
$mail->SMTPAuth = true;                     
$mail->Username = 'qwerhr3@gmail.com';          
 $mail->Password = 'hr@007&008'; 
$mail->SMTPSecure = 'ssl';                  
$mail->Port = 465;                          
$mail ->SMTPDebug = 1;
$mail->Mailer = 'smtp';


$mail->SetFrom('yashrajkhatri765@gmail');
$mail->addReplyTo('NOreply@gmail.com');

$subject = 'BlogIt  -  Signup | Verification'; // Give the email a subject 

		  
           $mail->addAddress($email);
           $mail->Subject = $subject;
            $mail->Body = $message;
				
     if(!$mail->send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
	
	echo '<script type="text/javascript">
           alert("Error in sending mail");
          window.location.href = "home.php";
             </script>';  
			 
} else {
    echo 'Message has been sent';
	echo '<script type="text/javascript">
           alert("Email has been sent...check your mail and click on the link to activate your blogger account");
          window.location.href = "home.php";
             </script>';
}
 
 */
		   
		 echo '<script type="text/javascript">
           alert("REgistration Successfully...");
          window.location.href = "home.php";
             </script>';  
	
	
	
	
	}
	else{
		echo "Error in inserting";
	}
 }
 
 }
  else {
	  
	  $sql = "INSERT INTO login (email,password,mobile,c_location,hash,active)   
         VALUES ('$email','$password','$mobile','$location','$hash','0')";
		

if (mysqli_query($conn, $sql)) {
    // echo "REgistration";
   // Mailer Code
/*
   $mail = new PHPMailer;

$mail->isSMTP();                            
$mail->Host = 'smtp.gmail.com';            
$mail->SMTPAuth = true;                     
$mail->Username = 'qwerhr3@gmail.com';          
 $mail->Password = 'hr@007&008'; 
$mail->SMTPSecure = 'ssl';                  
$mail->Port = 465;                          
$mail ->SMTPDebug = 1;
$mail->Mailer = 'smtp';


$mail->SetFrom('yashrajkhatri765@gmail');
$mail->addReplyTo('NOreply@gmail.com');

$subject = 'BlogIt  -  Signup | Verification'; // Give the email a subject 

           $mail->addAddress($email);


           $mail->Subject = $subject;
            $mail->Body = $message;
				
     if(!$mail->send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
	
	echo '<script type="text/javascript">
           alert("Error in sending mail");
          window.location.href = "home.php";
             </script>';  
			 
      } 
     else {
    echo 'Message has been sent';
	echo '<script type="text/javascript">
           alert("Email has been sent...check your mail and click on the link to activate your blogger account");
          window.location.href = "home.php";
             </script>';
 }
 */


 
	
	
	
		 echo '<script type="text/javascript">
           alert("REgistration Successfully...");
          window.location.href = "home.php";
             </script>'; 
	
	
	
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
 }
}

 else{
	 
	 echo "Not done 2";
	 
 }

	
	
?>