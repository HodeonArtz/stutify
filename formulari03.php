<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alta del perfil</title>
</head>

<body>
  <h1>ALTA DEL PERFIL</h1>
  <form action="./mostraValors03.php" method="post">
    <label>
      nom:
      <input type="text" name="username" required pattern=".{3,10}" title="Nombre entre 3 y 10 caracteres" minlength="3"
        maxlength="10" placeholder="El teu nom" />
    </label>
    <label title="data de naixement">
      naixement:
      <input type="date" required name="birthday" /> </label><br />
    <label>
      Blog:
      <input type="url" name="blogurl" required placeholder="https://..." />
    </label>
    <label>
      Marca mobil
      <input list="marca" name="marca" required placeholder="Marca del teu telèfon" />
      <datalist name="Marca" id="marca">
        <option value="Apple">Apple</option>
        <option value="Samsung">Samsung</option>
        <option value="Xiaomi">Xiaomi</option>
        <option value="Pixel">Pixel</option>
      </datalist> </label><br />
    <label>Número de germans
      <select name="hermanos" id="germans" required>
        <?php 
            foreach(array_fill(0,21,0) as $key => $cero){
              ?>
        <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
        <?php 
            }
          ?>
      </select>
    </label>
    <br />
    <label>
      home
      <input type="radio" name="sexo" id="sexo" value="home" required />
    </label>
    <label>
      dona
      <input type="radio" name="sexo" id="sexo" value="dona" required />
    </label>
    <br />
    <label>
      Interessos <br />
      <textarea name="interessos" id="interessos" cols="30" rows="10" placeholder="Els teus interessos..."></textarea>
    </label>
    <br />
    <p>Menjar preferit</p>
    <label>xocolata
      <input type="checkbox" name="comida[]" id="comida" value="chocolate" />
    </label>
    <label>pa
      <input type="checkbox" name="comida[]" id="comida" value="pan" />
    </label>
    <label>bledes
      <input type="checkbox" name="comida[]" id="comida" value="bledes" />
    </label>
    <label>llenties
      <input type="checkbox" name="comida[]" id="comida" value="lentejas" /> </label><br />
    <input type="submit" value="Registre" />
    <input type="reset" value="neteja el form" />
  </form>
</body>

</html>