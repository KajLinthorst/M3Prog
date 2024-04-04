<?
$input = $_GET['celsius'];

$celsius = floatval($input);
$fahrenheit = ($celsius +32) / 1.8;
$output = round($fahrenheit, 1);



echo "{$celsius} graden Celsius = {$output} graden Fahrenheit. <br/>";