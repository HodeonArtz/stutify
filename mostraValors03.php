<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos</title>
</head>

<body>
  <h1>Datos registrados</h1>
  <ul>
    <li>nom:
      <?php 
        echo $_POST["username"];
      ?>
    </li>
    <li>naixement:
      <?php 
        echo $_POST["birthday"];
      ?>
    </li>
    <li>blog:
      <?php 
        echo $_POST["blogurl"];
      ?>
    </li>
    <li>Marca mobil:
      <?php 
        echo $_POST["marca"];
      ?>
    </li>
    <li>nº germans:
      <?php 
        echo $_POST["hermanos"];
      ?>
    </li>
    <li>sexe:
      <?php 
        echo $_POST["sexo"];
      ?>
    </li>
    <li>interessos:
      <?php 
        echo $_POST["interessos"];
      ?>
    </li>
    <li>menjar preferit: <br>
      <?php 
        $comidas = $_POST["comida"];
        foreach ($comidas as $comida) {
          echo "$comida <br>";
        }

      ?>
    </li>
  </ul>
</body>

</html>