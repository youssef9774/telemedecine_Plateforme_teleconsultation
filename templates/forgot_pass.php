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
if (isset($_POST['login'])){
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `patient` WHERE login='$login' and password='$password'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['login'] = $login;
      header("Location: espace_patient.php");
  }else{
    echo $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>





<form class="box" action="" method="POST" name="login">
  <img src="img/pat.png " alt="Flowers in Chania" height="130" width="130">
  <h1>Forgot Password</h1>
  <input type="text" name="email" placeholder="Email@">
  <input type="submit" name="forgot" value="Send reset Link">

 <div class="r"> <a href="patient_cnx.php">Login</a> </div>
</form>

<form class="box2" action="home.php" method="POST">
  <input type="submit" name="inscrii" value="Back"/>
</form>

<a href






  </body>
</html>
