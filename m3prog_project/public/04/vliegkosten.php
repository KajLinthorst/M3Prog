<?php
include_once ("functions.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleVlieg.css">
</head>
<body>

    <h1 class="ReisHeader">Reis 1 :</h1>
    <?= retourBerekenen(3722, 2.05, 20, false); ?>
    <br><br>
    <h1 class="ReisHeader">Reis 2 :</h1>
    <?= retourBerekenen(9276, 3.11, 10, false); ?>
    <br><br>
    <h1 class="ReisHeader">Reis 3 :</h1>
    <?= retourBerekenen(803, 2.83, 0, true); ?>
    <br><br>
</body>
</html>