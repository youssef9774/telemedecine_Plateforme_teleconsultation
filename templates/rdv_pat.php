<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="RDV">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>RDV</title>
</head>
<body>


	<h1>RDV</h1>

	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<center>
		<img src="img/rdv-en-ligne.png " alt="Flowers in Chania" height="100" width="130">
		<h3>Rendez-vous</h3>
</center>
		<label>Name</label>
		<input type="text" name="name" value="patient">

		<label>Enter your email</label>
		<input type="email" name="email" value="patient@mail.com">

		<label>Enter a subject</label>
		<input type="text" name="subject" value="Please send me a pricelist">
		<label>Presentiel / Distance</label>
		<input type="text" name="dp" value="D / P">

		<label>Enter your message</label>
		<textarea name="message">This is my message</textarea>

		<input type="date" name="dob" class="form-control" /><br />
		

		<input type="submit" name="submit" value="Send message">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	<form class="box2" action="espace_patient.php" method="POST">
  <input type="submit" name="inscrii" value="Back"/>
</form>
</body>
</html>