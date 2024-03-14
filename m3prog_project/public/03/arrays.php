<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $namen = ["Kees", "Jantje", "Floddertje", "Jip", "Janneke"];
    echo "<br>";
    echo count ($namen);
    echo "<br>";
    sort($namen);
    echo "<br>";
    print_r ($namen);
    echo "<br>";
    $laatsteNaam = array_pop($namen);
    echo "<br>";
    echo $laatsteNaam;
    echo "<br>";
    array_push($namen, "Takkie");
    echo "<br>";
    $namen[] = "Hendrik Groen";
    echo "<br>";
    print_r ($namen);
    echo "<br>";
    $namen_tekst = implode("<br>", $namen);
    echo "<br>";
    echo $namen_tekst;
    echo "<br>";
    $explodedName = explode("<br>", $namen_tekst);
    print_r($explodedName);
    echo "<br>";
    ?>
</body>
</html>