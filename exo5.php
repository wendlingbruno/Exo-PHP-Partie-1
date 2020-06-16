<?php
$francs1 = 100;
$francs2 = 6.55957;
$conversion = ($francs1/$francs2);
$total = 0;
$euro = 1;
echo "Nous avons $francs1 francs <br/>";
$total = number_format($conversion, 2, ',', ' '); // rajout
//echo "En euros cela fait ".round($conversion, 2)."<br/>"; // round pour les chiffres après la virgule
echo "En euros cela fait ".$total." €.<br/>";
?>