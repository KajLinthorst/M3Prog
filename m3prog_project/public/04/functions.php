<?php
function currentDateTime(){
    // Toont de huidige datum en tijd met uren, minuten en seconden
    echo date('d-m-Y H:i:s');
}

function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

function subtract($getal3, $getal4){
    $somSubtract = $getal3 - $getal4;
    return $somSubtract;
}

function divide($getal5, $getal6){
    $somDivide = $getal5 / $getal6;
    return $somDivide;
}

function multiply($getal7, $getal8){
    $somMultiply = $getal7 * $getal8;
    return $somMultiply;
}

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs){

    $aantal_liters = $afstand_km / $km_per_liter;

    $kosten_euro = $aantal_liters * $liter_prijs;
    
    $realPrice = number_format($kosten_euro);
    return $realPrice;
}