<?php
$str = "Engage le jeu que je le gagne";
$str = strtolower($str); // conversion en minuscules
$str = str_replace(" ","", $str); // j'enlève tous les espaces
if ($str == strrev($str)) { // strrev sert à inverser la phrase
	echo "Palindrome <br/>";
}
	else {
		echo "Pas palindrome <br/>";
	}
	echo strrev($str)."<br/>";
?>