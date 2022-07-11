<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Random</title>
</head>
<body>
  <h1>10 Random Pokemon from 1st Gen using <a href="https://pokeapi.co/" target="_blank">Pokeapi</a></h1>
  <?php
    $counter = 0;
    foreach ($random_pokemon as $id => $pokemon) {
      $image_url = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".$id.".png";
      ?>

      <p> <?php echo $id.". ".$pokemon ?>  </p>
      <img src=<?php echo $image_url ?> >
      <?php
    }
  ?>
</body>
</html>