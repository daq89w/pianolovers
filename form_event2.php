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

<?php
	$cookie_value = $_POST['custId'];
	if ($cookie_value === "1") {
		$event = "Meditation at Bronte Park on April 17, 2021";
		$_POST['event'] = $event;
	}
	//Meditation at Bronte Park on April 17, 2021
	//Picnic on Central Island on April 24, 2021
	//Yoga at Woodbine Beach on May 1, 2021
?>

<div class="row">
  <div class="leftcolumn">
	<p></p>
  </div>
  <div class="centercolumn" >
	<hr class="new1">
	
	
	
		<h2>Sign Up</h2>
		<hr class="new2">
		<form action="email.php" method="POST"> 
			<div class="form">Event: Picnic on Central Island on April 24, 2021</div><br>
			<div class="form">First Name: <br><input type="text" name="firstname"></div><br>
			<div class="form">Last Name: <br><input type="text" name="lastname"></div><br>
			<div class="form">Home Address: <br><input type="text" name="homeaddress"></div><br>
			<div class="form">Email Address <br><input type="text" name="emailaddress"></div><br>
			<div class="form">Phone Number: <br><input type="text" name="phonenumber"></div><br>
			<input type="hidden" name="event" value="Picnic on Central Island on April 24, 2021">
			<div class="form">
				<input type="submit" value="Submit">
				<a href="index.html" class="alignright">Cancel</a>
			</div>
		</form>
		
		

	<hr class="new1">
 	</div> 

  <div class="rightcolumn">
	<p></p>
  </div>  
<!--   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
 -->  
</div>

</body>
</html>
