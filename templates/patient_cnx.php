<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <style>
      body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url("img/d.png");
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
  border: 2px solid #db3434;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #cc2e3e;
}
.box input[type = "submit"],.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #cc2e46;
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
  border: 2px solid #2ecc71;
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
  background: #2ecc71;
}

.r{
  color: yellow;

}
      </style>
    <meta charset="utf-8">
    <title>patient cnx</title>
    <link rel="stylesheet" type="text/css" href="{{url_for('static',filename='style.css')}}">
  </head>
  <body>


  <?php
    require('config.php');
    session_start();
   
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
         
            header("Location: espace_patient.php");
        } else {
            echo "<div class='form'>
                  <h3>Alert your Password , your mail not match </h3><br/>
                  <p class='link'>Go to login <a href='patient_cnx.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>





<form class="box" action="" method="POST" name="login">
  <img src="img/pat.png " alt="Flowers in Chania" height="130" width="130">
  <h1>Login Patient</h1>

        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="patient_inscri.php">New Registration</a></p>
        <div class="r"> <a href="forgot_pass.php">Forgot your Password ? </a> </div>

  </form>

  <form class="box2" action="home.php" method="POST">
  <input type="submit" name="inscrii" value="Back"/>
</form>



<?php
    }
?>

  </body>
</html>
