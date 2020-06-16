<?php

$marques = ["Peugeot","Renault","BMW","Mercedes"];
$nbElements = count($marques);
echo "Il y a $nbElements marques de voitures dans le tableau : <br> <ul>"; // j'ai un doute de devoir déclarer la liste directement ici

foreach ($marques as $marque) {
    echo "<li> $marque </li> <br>";
}
echo "</ul>"; // j'ai un doute que ce soit fait comme ça, ça me parait pas propre

?>