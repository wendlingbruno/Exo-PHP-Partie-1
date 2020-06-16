<?php
define('TVA',0.2); // constante
$prix = 9.99;
$quantite = 5;
echo "Prix unitaire : $prix <br/>";
echo "Quantité : $quantite <br/>";
echo "TVA : ".TVA."<br/>";
echo "Vous devrez payer ".(TVA*$prix+$prix)*5;
echo "<br/>"
?>