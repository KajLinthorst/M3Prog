<?php
include_once ("functions.php");

echo currentDateTime();
echo "<br>";
echo add(1, 6);
echo "<br>";
echo subtract(5, 2);
echo "<br>";
echo divide(7, 3);
echo "<br>";
echo multiply(6, 8);
echo "<br>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br><br><br>    

    <?= berekenRitKosten(663, 15, 1.90);?>
    <br><br>
    <?= berekenRitKosten(1438, 20, 1.46);?>
    <br><br>
    <?= berekenRitKosten(1991, 18.47, 2.23);?>
</body>
</html>