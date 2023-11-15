<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista generarda</title>
</head>

<body>
  <h1>Lista generada</h1>
  <ul>
    <?php 
    $num1 = $_POST["num1"];
    for ($i=0; $i <= $num1; $i++) { ?>
    <li>
      <?php 
            echo $i;
          ?>
    </li>
    <?php }
    ?>
  </ul>
</body>

</html>