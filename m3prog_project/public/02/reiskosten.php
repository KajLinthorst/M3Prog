    <?php
$afstand = 1025.33;
$literPrijs = 1.89;
$treinKosten = 60;
$tankInhoud = 50;
$eenLiter = 15;

$literVerbruik = $afstand / $eenLiter;
$aantalkerenTanken = $literVerbruik / $tankInhoud;
$autoKosten = $aantalkerenTanken + $tankInhoud + $literPrijs;

if ($autoKosten > $treinKosten) {
    echo"Ik ga met de trein! Want :  ";
} else {
    echo"Ik ga met de auto! Want: ";
}
echo ("afstand is: " . $afstand .  " De totale prijs is: " . $autoKosten . " Het literverbruik is: " . $literVerbruik . " Het aantal keren dat je moet tanken is : " . $aantalkerenTanken);

?>