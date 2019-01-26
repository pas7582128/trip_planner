<?php
require 'PHPMailer-master/PHPMailerAutoload.php';



if(isset($_POST['uname']) && !empty($_POST['uname'])  && isset($_POST['psw']) && !empty($_POST['psw'])  && isset($_POST['email']) && !empty($_POST['email'])){


	$email = $_POST["email"];
	$password = $_POST["psw"];
	$username  = $_POST['uname'];

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


$mail->SetFrom('yashrajkhatri764@gmail.com');
$mail->addReplyTo('Noreply@gmail.com');


$mail->addAddress($email_array[$i]);


$mail->isHTML(true);

$subject = 'BlogIt  -  Signup | Verification'; // Give the email a subject 
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

           $mail->addAddress($email);


           $mail->Subject = $subject;
            $mail->Body = $message;
 


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
else{
	echo "Not done";
	
}


?>