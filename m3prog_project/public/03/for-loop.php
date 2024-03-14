<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $pokemon = ["Charmander", "Torchic", "Riolu", "Pidgey", "Pidove"];
    $images = ["https://assets.pokemon.com/assets/cms2/img/pokedex/detail/004.png","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/255.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/447.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/016.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/519.png"];


    for ($x = 0; $x < sizeof($pokemon); $x++) {
        echo "<h1>$pokemon[$x]</h1>";
        echo "<img src='$images[$x]'>";   
      }
    ?>

    
</body>
</html>