<!DOCTYPE html>

<?php 
  $rutas_canciones = [
    "src\audio\02_Promise_Me_(Edit_Version).flac",
    "src\audio\A3_Daft_Punk_-_Digital_Love.flac",
    "src\audio\A4_Daft_Punk_-_Da_Funk.flac",
    "src\audio\Modjo_-_Lady_(Hear_Me_Tonight)_(radio_edit).flac",
    "src\audio\Stardust_-_Music_Sounds_Better_With_You_(Hodeon_Vinyl_Rip).flac"
  ];

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stutify</title>

</head>

<body>
  <h1>Stutify</h1>
  <audio src="<?php 
    echo "";
    if(isset($_POST["songs"]) && $_POST["esRandom"]=="no" ){
      echo  $rutas_canciones[$_POST["songs"]];
    }
    if($_POST["esRandom"] == "si"){
      echo $rutas_canciones[rand(0,count($rutas_canciones)-1)];
    }

  
  ?>" controls type="audio/flac" <?php echo isset($_POST["songs"]) ? "autoplay" : "" ?>>
  </audio>
  <form action="./audio.php" method="post">
    <label>
      Canción
      <select name="songs" id="songs">
        <option id="1" value="0">Bel Amour - Promise Me</option>
        <option id="2" value="1">Daft Punk - Digital Love</option>
        <option id="3" value="2">Daft Punk - Da Funk</option>
        <option id="4" value="3">Modjo - Lady</option>
        <option id="5" value="4">Stardust - Music Sounds Better With You</option>
      </select>
    </label>
    <input type="submit" value="Play Song"> <br>
    <label>
      Random
      <input type="radio" name="esRandom" id="random" value="si">
    </label>
    <label>
      No random
      <input type="radio" name="esRandom" id="random" value="no" checked>
    </label>

  </form>


  <script>
  const audio = document.querySelector("audio");
  audio.volume = 0.5;
  </script>
</body>

</html>