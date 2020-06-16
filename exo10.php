<form method="GET" action="exo10.php">
            Combien souhaitez-vous payer ? : <input type="number" name="payer" required/> <br/>
            Combien souhaitez-vous donner ? : <input type="number" name="verser" required/> <br/>
            <input type="submit" value="OK"/>
</form>

<?php

$billet10 = 0;
$billet5 = 0;
$billet2 = 0;
$billet1 = 0;
$reste = 0;

/*if(isset($_GET["payer"])){
    $payer = $_GET["payer"];
    if(isset($_GET["verser"])){
        $verser = $_GET["verser"];
        echo "Montant à payer : $payer <br>";
        echo "Montant versé : $verser <br>";
        $reste = ($verser - $payer);
        if ($payer > $verser){
            echo "Vous devez verser plus d'argent."; // inutile de calculer si la personne verse pas assez
        } else if ($reste > 0) {
            echo "Reste à payer : $reste <br>";
            while ($reste >= 10) { // j'ai un doute si je dois utiliser de multiples while ou si on peut faire autrement
                $billet10++;
                $reste = ($reste - 10);
            }
            while ($reste >= 5) {
                $billet5++;
                $reste = ($reste - 5);
            }
            while ($reste >= 2) {
                $billet2++;
                $reste = ($reste - 2);
            }
            while ($reste >= 1) {
                $billet1++;
                $reste = ($reste - 1);
            }
            echo "$billet10 billets de 10 € - $billet5 billets de 5 € - $billet2 billets de 2 € - $billet1 billets de 1 €.";
        } /*else {
            echo "Vous avez rentré un montant à payer et à verser qui est nul.";
        }
        
    }
}*/

if(isset($_GET["payer"])){
    $payer = $_GET["payer"];
    if(isset($_GET["verser"])){
        $verser = $_GET["verser"];
        echo "Montant à payer : $payer <br>";
        echo "Montant versé : $verser <br>";
        $reste = ($verser - $payer);
        if ($payer > $verser){
            echo "Vous devez verser plus d'argent."; // inutile de calculer si la personne verse pas assez
        } else if ($reste > 0) {
            echo "Reste à payer : $reste <br>";
            $billet10 = intdiv($reste, 10);
            $reste = $reste - ($billet10 * 10);
            $billet5 = intdiv($reste, 5);
            $reste = $reste - ($billet5 * 5);
            $billet2 = intdiv($reste, 2);
            $reste = $reste - ($billet2 * 2);
            $billet1 = intdiv($reste, 1);
            $reste = $reste - ($billet1 * 1);
            
            echo "$billet10 billets de 10 € - $billet5 billets de 5 € - $billet2 billets de 2 € - $billet1 billets de 1 €.";
        } 
    }
}

?>