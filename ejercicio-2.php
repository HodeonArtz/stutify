<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registre en la web</title>
</head>

<body>
  <?php 
    if(!isset($_POST["registro"])){
      ?>

  <h1>REGISTRE EN LA WEB</h1>
  <form action="./ejercicio-2.php" method="post">
    <label for="inNombre">usuario: </label>
    <input type="text" id="inNombre" name="usuario" required placeholder="Introduce el usuario" pattern=".{2,12}"
      title="Longitud entre 2 y 12 caracteres" />
    <label for="inEmail">Email: </label>
    <input type="email" name="email" id="inEmail" required placeholder="Introduce el correo electrónico" />
    <br />
    <label for="inPW">password: </label>
    <input type="password" name="password" id="inPW" required placeholder="Introduce la contraseña" pattern=".{2,12}"
      title="Longitud entre 2 y 12 caracteres" />
    <label for="inConfirm">Confirma el password: </label>
    <input type="password" name="confirmacion" id="inConfirm" required placeholder="Vuelve a introducir la contraseña"
      pattern=".{2,12}" title="Longitud entre 2 y 12 caracteres" />
    <br />
    <p>Transport més utilitzat:</p>
    <label for="coche">coche</label>
    <input type="radio" name="transport" id="coche" require value="coche" />
    <label for="tren">tren</label>
    <input type="radio" name="transport" id="tren" required value="tren" />
    <label for="moto">moto</label>
    <input type="radio" name="transport" id="moto" required value="moto" /><br />
    <input type="submit" value="Registre" name="registro" />
    <input type="reset" value="Clean form" />
  </form>
  <?php 
    } else{
  ?>
  <h1>Usuario registrado</h1>
  <p>Datos del usuario: </p>
  <span>Usuario: <?php echo $_POST["usuario"]; ?></span> <br>
  <span>Email: <?php echo $_POST["email"]; ?></span> <br>
  <span>Password: <?php echo $_POST["password"]; ?></span> <br>
  <span>Confirmación del Password: <?php echo $_POST["confirmacion"]; ?></span> <br>
  <span>Transport: <?php echo $_POST["transport"]; ?></span> <br>
  <?php 
    }
  ?>
</body>

</html>