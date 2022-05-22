<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <style>
      body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url("img/medecin_login.png");
  background-repeat: no-repeat;
  background-size: 100%;
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}

.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"],.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}


.box2 input[type = "submit"],.box2 input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 650px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  float:center;
   width:10%;

}
.box2 input[type = "submit"]:hover{
  background: #3498db;
}
      </style>
    <meta charset="utf-8">
    <title>َmedecin login</title>
    <link rel="stylesheet" type="text/css" href="{{url_for('static',filename='style.css')}}">
  </head>
  <body>




  <?php
  //un fichier config pour faire la cnx avec la base de cnx 
    require('config.php');
    session_start();
    // Lorsque le formulaire est soumis, on va vérifier et créer la session de l'utilisateur.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);   
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `patient` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirection vers la page espace cnx
            header("Location: espace_medecin.php");
        } else {
            echo "<div class='form'>
                  <h3>Alert your Password , your mail not match</h3><br/>
                  <p class='link'>go to login <a href='medecin_cnx.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>




<form class="box" action="" method="POST" name="login">
    <img src="img/med.png " alt="Flowers in Chania" height="130" width="130">
  <h1>Login Medecin</h1>
  <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
  
</form>
<form class="box2" action="home.php" method="POST">
  <input type="submit" name="inscrii" value="Back"/>
</form>





<?php
    }
?>
  </body>
</html>
