<?php
    // strlen() geeft de lengte van een string terug
    $naam = "Duurzaam Huis"; 
    $lengte = strlen($naam);
    echo "De lengte  " . $naam . " is: " . $lengte;

    
    // strpos() vindt de positie van een substring
    $haystack = " Ik ben dol op appels en bananen.";
    $needle = " appels en bananen";
    $pos = strpos($haystack, $needle);

    if ($pos === false) {
        echo " De string '$needle' is niet gevonden in de string '$haystack'";
    } else {
        echo " De string '$needle' is gevonden in de string '$haystack'";
        echo " en bevindt zich op positie $pos";
    }

    // file_exists() vertelt of een bestand bestaat
    $filename = 'functions.php';

    if (file_exists($filename)) {
        echo " Het bestand $filename bestaat";
    }   else {
        echo " Het bestand $filename bestaat niet";
    }
?>

