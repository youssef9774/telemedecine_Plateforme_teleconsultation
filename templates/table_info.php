<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="RDV">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>INFO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>


	<h1>Info</h1>

    <table class='table table-responsive'>
    <thead>
        <th>name</th>
        <th>email</th>
        <th>gender</th>
        <th>adress</th>
        <th>Birthdate</th>
        
    
    </thead>
    <tbody>

    <?php
     $data = json_decode(file_get_contents("fhir/info/messages.json"), true);
     for ($i=0; $i < sizeof($data); $i++) { 
        # code...
        ?>
  <tr>
  <td>
          <?=$data[$i]['name']?>
      </td>
      <td>
          <?=$data[$i]['email']?>
      </td>
      <td>
          <?=$data[$i]['gender']?>
      </td>
      <td>
          <?=$data[$i]['adress']?>
      </td>
      <td>
          <?=$data[$i]['birthDate']?>
      </td>
      
      
  </tr>
        
  <?php
    }
    ?>
    
    
    </tbody>
</table>

</body>
</html>