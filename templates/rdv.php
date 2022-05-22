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
.dd{
  color: rgb(255, 255, 255);
}

      </style>
    <meta charset="utf-8">
    <title>RDV</title>
    <link rel="stylesheet" type="text/css" href="{{url_for('static',filename='style.css')}}">
  </head>
  <body>
<form class="box" action="inscri2" method="post">
  <img src="img/rdv-en-ligne.png " alt="Flowers in Chania" height="100" width="130">

  <h1>Demande rendez-vous </h1>
  <input type="text" name="nom" placeholder="Nom">
  <input type="password" name="mdp" placeholder="Prenom">
  <input type="password" name="mdp2" placeholder="Numero Telephone">
  <label class="dd">D / P  </label>
  <select>
     <option>
      Presentiel
    </option>
    <option>
      Distanciel
    </option>
    
  </select>
<br>
  <label class="dd">Date  </label><select>
    <option>
     19 mai 2022
   </option>
   <option>
     23 mai 2022
   </option>
   <option>
    30 mai 2022
  </option>
  <option>
    1 juin 2022
  </option>
   
 </select> </br>
 <label class="dd"> </label>
  <textarea> Expliquer votre demande de RDV </textarea>
  <input type="submit" name="rdv" value="Soumettre">

  
</form>


  </body>
</html>
