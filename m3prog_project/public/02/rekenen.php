    <?php
$getal = 22.12345;
$ceilGetal = ceil($getal);
echo"$ceilGetal";


$getal2 = 44.54321;
$floorGetal = floor($getal2);
echo"$floorGetal";

$rGetal1 = rand(10,100);
$rGetal2 = rand(10,100);
$rGetal3 = rand(10,100);

echo "<br>";
$randomGetalCalc = $rGetal1 + $rGetal2 / $rGetal3;
echo $randomGetalCalc;

?>