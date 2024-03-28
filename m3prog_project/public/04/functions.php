<?php

/* 
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
*/


/**
 * Deze functie berekent de kosten van de reis.
 * @param mixed $afstandInKm <Int> Dit is de afstand die gevlogen wordt in kilometers
 * @param mixed $prijsPerLiter <Int> Dit is de prijs pet liter
 * @param mixed $aantalKiloBagage <Int> Het aantal kilo bagage
 * @param mixed $business <Boolean> Dit beslist of de persoon business vliegt, zo ja dan total * 1.5
 * @return void
 * 
 * Hij returnt de waarde doormiddel van echo naar de HTML code
 */
function retourBerekenen($afstandInKm, $prijsPerLiter, $aantalKiloBagage, $business)
{
    $reisKosten = $prijsPerLiter * $afstandInKm / 30;
    $baggageKosten = $aantalKiloBagage * 5;
    $totaleKosten = $reisKosten + $baggageKosten;

    if ($business == true) {
        $businessKosten = $totaleKosten * 1.5;
        echo "Totaal + Business : €";
        echo number_format($businessKosten, 2); // Afronden tot 2 cijfers achter de komma
    } else {
        echo "Totaal : €";
        echo number_format($totaleKosten, 2); // Afronden tot 2 cijfers achter de komma
    }
}


