<form method="GET" action="exo8.php">
            Veuillez rentrer le chiffre que vous souhaitez voir sa table : <input type="number" name="chiffre"/> <br/>
            <input type="submit" value="OK"/>
</form>

<?php

// table de multiplication

if(isset($_GET["chiffre"])){ // pour retirer l'erreur undefined index que j'ai eu
    $chiffre = $_GET["chiffre"];
    for ($i=0; $i <= 10; $i++) { // pour aller jusqu'à 10
        $total = $i*$chiffre;
        echo "$i x $chiffre = $total <br>";
    }
}


// deuxième méthode

if(isset($_GET["chiffre"])){ // pour retirer l'erreur undefined index que j'ai eu
    $chiffre = $_GET["chiffre"];
    $j = 0; // on utilise autre chose que i pour éviter la confusion
    while ($j <= 10) {
        $total = $j*$chiffre;
        echo "$j x $chiffre = $total <br>";
        $j++; // éviter une boucle infinie
    }
}

?>