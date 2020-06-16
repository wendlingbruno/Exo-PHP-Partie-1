<?php

//$total = 0;

$notes = [
    "10",
    "12",
    "8",
    "19",
    "3",
    "16",
    "11",
    "13",
    "9"
];

/*echo "Les notes obtenues par l'élève sont : ";
foreach ($notes as $note) {
    echo "$note ";
    $total = ($total + $note);
}

$moyenne = ($total / count($notes)); // on divise toutes les notes par le nombre totale de notes dans le tableau*/
$valeurs = implode(",",$notes); // permet d'afficher toutes les valeurs du tableau avec une virgule
$moyenne = array_sum($notes)/count($notes);
echo "<br>Les notes sont : $valeurs <br>";
echo "Sa moyenne générale est donc de : ".round($moyenne, 2);


?>