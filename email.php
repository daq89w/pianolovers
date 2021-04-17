<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saturday Getaway</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="header">
  <img src="img/logo_trim.png" class="logo">
</div>

<div class="row">
  <div class="leftcolumn">
	<p></p>
  </div>
  <div class="centercolumn" >
	<hr class="new1">
		<?php
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$homeaddress = $_POST['homeaddress'];
		$emailaddress = $_POST['emailaddress'];
		$phonenumber = $_POST['phonenumber'];
		$eventname = $_POST['event'];
		
		//Import PHPMailer classes into the global namespace
		//These must be at the top of your script, not inside a function
		use \PHPMailer\PHPMailer\PHPMailer;
		use \PHPMailer\PHPMailer\SMTP;
		use \PHPMailer\PHPMailer\Exception;

		//Load Composer's autoloader
		require 'vendor/autoload.php';

		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = "smtp.outlook.com";                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = "dqwang1989@outlook.com";                     //SMTP username
			$mail->Password   = "dqwangUbWPZN8";                               //SMTP password
			$mail->SMTPSecure = 'TLS';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('dqwang1989@outlook.com', 'Mailer');
			$mail->addAddress('recklessdude89@gmail.com', 'Joe User');     //Add a recipient

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Event sign-up from ' . $firstname . ' ' . $lastname;
			$mail->Body    = 'Event : '.$eventname.'<br>
							First Name : '.$firstname.'<br>
							Last Name : '.$lastname.'<br>
							Home Address : '.$homeaddress.'<br>
							Email Address : '.$emailaddress.'<br>
							Phone Number : '.$phonenumber.'<br>
							';

			$mail->send();
			echo 'Your information has been sent';
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		?><br>
		<p><a href="index.html">Go Back</a></p>
	<hr class="new1">
 	</div> 

  <div class="rightcolumn">
	<p></p>
  </div>  
</div>



</body>
</html>
