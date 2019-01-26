<html>

<?php

$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


mysqli_select_db($conn,"blog_db");
$name=$_POST['name'];
$tomail=$_POST['email'];
$result1=mysqli_query($conn,"SELECT * FROM main WHERE name='$name'");
$affectedRows1 = mysqli_affected_rows($conn);
$result=mysqli_query($conn,"SELECT * FROM main WHERE email='$tomail'");
$affectedRows = mysqli_affected_rows($conn);
if(($affectedRows1 == 1 && $result1) || ($affectedRows == 1 && $result)){
    if($affectedRows1 == 1 && $result1)
    {
		echo '<script type="text/javascript">
           alert("Username is already Taken!!!");
          window.location.href = "bloghomepage.php";
             </script>';
	
    }
	if($affectedRows == 1 && $result){
		echo '<script type="text/javascript">
           alert("Email is already Registered !!!");
          window.location.href = "bloghomepage.php";
             </script>';
         }	
     }
else{    

    // Return Success - Valid Email
    $msg = 'Your blogger account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
    $hash = md5( rand(0,1000) );
    $pass = $_POST['password'];
     $sql = "INSERT INTO main (name, email ,password,hash)   
         VALUES ('$name','$tomail','$pass','$hash')";
	   if ($conn->query($sql) === TRUE) {
////////////////////////////
    $send = 'qwerhr3@gmail.com';
    require("/PHPMailer-master/src/PHPMailer.php");
    require("/PHPMailer-master/src/SMTP.php");
    require("/PHPMailer-master/src/Exception.php");
  $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSmtp();
    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0;
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(false);
    $mail->Username = $send;
    $mail->Password = 'hr@007&008';
    $mail->SetFrom($send);
    if(!empty($_POST["email"])){
    if(!empty($tomail)){$mail->AddAddress($tomail);}
  }
  $subject = 'BlogIt  -  Signup | Verification'; // Give the email a subject 

     
$message = '
 
Thanks for signing up as a blogger!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$name.'
Password: '.$pass.'
------------------------
 
Please click this link to activate your account:
http://localhost/Blog/verify.php?email='.$email.'&hash='.$hash.'
 
';
                     	
$headers = 'From:qwerhr3@gmail.com' . "\r\n";
//mail($to, $subject, $message, $headers);
$mail->Subject = $subject;
    $mail->Body = $message;
       $to      = $email; // Send email to our user
echo '<script type="text/javascript">
           alert("Email has been sent...check your mail and click on the link to activate your blogger account");
          window.location.href = "bloghomepage.php";
             </script>';


}
else
{
	echo '<script type="text/javascript">
           alert("Error in sending mail");
          window.location.href = "bloghomepage.php";
             </script>';
}
	
 
 }
 

?>

</html>