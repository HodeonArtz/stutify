<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculadora</title>
  <style>
  form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: fit-content;
    column-gap: 1rem;
  }
  </style>
</head>

<body>
  <h1>Calculadora</h1>
  <form action="./calculadora.php" method="post">
    <div class="col-1">
      <label>
        1er numero
        <input type="number" name="num1" id="" placeholder="Primer número de la operación" value="<?php 
            if(isset($_POST["ans"]))
            echo $_POST["resultado"];
        ?>">
      </label>
      <br>
      <label>
        2º numero
        <input type="number" name="num2" placeholder="Segundo número de la operación">
      </label> <br>
      <label>
        resultat
        <input type="number" name="resultado" placeholder="aquí va el resultado de la operación" value="<?php 
          if(isset($_POST["num1"]) && isset($_POST["num2"]) != "" && isset($_POST["operacion"])){
            switch ($_POST["operacion"]) {
              case '+':
                echo $_POST["num1"] + $_POST["num2"];
                break;
              case '-':
                echo $_POST["num1"] - $_POST["num2"];
                break;
              case '*':
                echo $_POST["num1"] * $_POST["num2"];
                break;
              case '/':
                echo $_POST["num1"] / $_POST["num2"];
                break;
              default:
                echo 0;
                break;
            }
          }
          ?>">
      </label>
    </div>
    <div class="col-2">
      <input type="submit" value="+" name="operacion">
      <input type="submit" value="-" name="operacion">
      <input type="submit" value="/" name="operacion">
      <input type="submit" value="*" name="operacion"><br>
      <input type="submit" value="Envía el resultat com a 1r número" name="ans" class="ans">
    </div>
  </form>
</body>

</html>