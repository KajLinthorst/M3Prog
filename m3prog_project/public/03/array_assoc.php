<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dagTemp = [
        "Maandag" => 18,
        "Dinsdag" => 13,
        "Woensdag" => 14,
        "Donderdag" => 8,
        "Vrijdag" => 11,
        "Zaterdag" => 10,
        "Zondag" => 11
    ];
    print_r($dagTemp);
    echo '<br>';

    ?>


    <?php
    foreach ($dagTemp as $key => $value) {
        ?>
        <table>
        <tr>
            <td>Dag:</td>
            <td>Temp:</td>
        </tr>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    </table>
        <?php
    }
    ?>


<?php 
    $vandaag = "maandag";
    $graden = "12";

    $morgen = "dinsdag";
    $gradenMorgen = "14";
    
    $overmorgen = "woensdag";
    $gradenOvermorgen = "11";

    $dedagnaovermorgen = "donderdag";
    $gradenDeDagNaOvermorgen = "15";
?>
'   
<p>
Vandaag is het <?=$vandaag?>, en het is <?=$graden?> graden.
<br>
Vandaag is het <?=$morgen?>, en het is <?=$gradenMorgen?> graden.
<br>
Vandaag is het <?=$overmorgen?>, en het is <?=$gradenOvermorgen?> graden.
<br>
Vandaag is het <?=$dedagnaovermorgen?>, en het is <?=$gradenDeDagNaOvermorgen?> graden.
</p>


</body>

</html>