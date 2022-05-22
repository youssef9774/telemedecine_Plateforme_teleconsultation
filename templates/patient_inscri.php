




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
  background: #1f1c1c;
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"],.box input[name = "mdp2"]{
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
.box input[type = "text"]:focus,.box input[type = "password"]:focus,.box input[name = "mdp2"]:focus{
  width: 280px;
  border-color: #cc2ecc;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #db3434;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #db3434;
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
      </style>
    <meta charset="utf-8">
    <title>patient inscription</title>
    <link rel="stylesheet" type="text/css" href="{{url_for('static',filename='style.css')}}">
  </head>
  <body>


  <?php
    require('config.php');
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='patient_cnx.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='patient_inscri.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<form class="box" action="" method="post" >
  <img src="img/pat.png " alt="Flowers in Chania" height="100" width="100">

  <h1>Inscription Patient</h1>
  <?php echo $msg ?>
  
  <input type="text" class="login-input" name="username" placeholder="Username" required />
  <input type="text" class="login-input" name="email" placeholder="Email Adress">
  <input type="password" class="login-input" name="password" placeholder="Password">
  <input type="password" name="mdp2" placeholder="Password Confirm">
  <input type="submit" name="submit" value="Register" class="login-button">
  <p class="link"><a href="patient_cnx.php">Click to Login</a></p>

</form>

<form class="box2" action="home.php" method="POST">
  <input type="submit" name="inscrii" value="Back"/>
</form>







<?php
    }
?>
  </body>
</html>
