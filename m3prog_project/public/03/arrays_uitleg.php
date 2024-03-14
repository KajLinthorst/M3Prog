<?php

$autos = ["Ford Focus", "Mini Cooper", "Ferrari", "Cybertruck", "Formule 1", "BMW"];
$games = ["Fortnite", "Minecraft", "Roblox", "Rocket League", "Brawlhalla", "Call of Duty",];
$zangers = ["George Michael", "Freddie Mercury", "Bono", "Paul McCartney"];
$youtubers = ["Mr Beast", "Markiplier", "Raar maar Waar", "Vakogames", "Doemaargamen"];
$streamers = ["Adin Ross", "Kai Cenat", "IShowSpeed", "Dream"];

print_r($autos); echo"<br>";
print_r($games); echo"<br>";
print_r($zangers); echo"<br>";
print_r($youtubers); echo"<br>";
print_r($streamers); echo"<br>"; 
echo"<br>"; 
echo"<br>";  

echo $autos[3]; echo"<br>"; 
echo $autos[5]; echo"<br>"; 
echo"<br>";     
echo"<br>"; 

var_dump($games);
echo"<br>";     
echo"<br>"; 
print_r($zangers);
echo"<br>";     
echo"<br>"; 

echo count($streamers); echo"<br>";
array_push($zangers, "Alex Turner");
print_r($zangers); echo"<br>";
sort($games);
echo implode('  ', $games); echo"<br>";



