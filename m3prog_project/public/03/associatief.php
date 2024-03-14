<?php
    $verbruik = [
        "Koelkast" => 400,
        "Wasmachine" => 100,
        "Droger" => 340,
        "Elektrische oven" => 500,
        "Vaatwasser" => 210,
    ];

    foreach ($verbruik as $key => $value) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Document</title>
        </head>
        <body>
        <h1><?=$key?></h1>
        <p>Verbruik: <?=$value?> KwH</p>
        <br>
        </body>
        </html>
        <?php
    }
    
    foreach ($verbruik as $key => $value) {
        ?>
            
        <?php
    }

    ?>
