<?php require("script/med/script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="RDV">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Ordonnance</title>
</head>
<style>
body {
  background-image: url('img/info2.png');
}
</style>
<body>


	<h1>Ordonnance </h1>

	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<center>
        <img src="img/idp.png " alt="Flowers in Chania" height="100" width="100">		<h3>ordonnance</h3>
</center>
<label>Name_Patient</label>
<input type="text" name="name" value="Name_Patient">
<label>Num_medicament</label>
		<input type="text" name="id" value="id">

		<label>code</label>
		<input type="text" name="code" value="code">
		

		<label>Strength</label>
		<input type="text" name="Strength" value="Strength">

        <label>expiration</label>
		<input type="date" name="ExpirationDate" class="form-control" /><br />
		

		<input type="submit" name="submit" value="Send message">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>

    <form class="box2" action="ordonnance_medecin.php" method="POST">
  <input type="submit" name="inscrii" value="Back"/>
</form>
	
</body>
</html>