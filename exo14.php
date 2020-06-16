<!--<form method="GET" action="exo14.php">
            Année de naissance : <input type="number" name="annee" required/> <br/>
            Mois de naissance en chiffre : <input type="number" name="mois" required/> <br/>
            Jour de naissance en chiffre : <input type="number" name="jour" required/> <br/>
            <input type="submit" value="OK"/>
</form> -->

<form method="GET" action="exo14.php">
            Date de naissance : <input type="date" name="naissance" required/> <br/>
            <input type="submit" value="OK"/>
</form>

<?php

/*$dateA = date("Y");
$dateD = date("d"); // minuscule pour récupérer le chiffre
$dateM = date("m");
$bAnnee = 0;
$bMois = 0;
$bJour = 0;

if(isset($_GET["annee"])){ // éviter l'erreur index
    $annee = $_GET["annee"];
    if(isset($_GET["mois"])){
        $mois = $_GET["mois"];
        if(isset($_GET["jour"])){
            $jour = $_GET["jour"];
            $bAnnee = ($dateA-$annee);
            $bMois = ($dateM-$mois);
            $bJour = ($dateD-$jour);
            if ($annee > $dateA || $bAnnee < 0){
                echo "Merci de rentrer une année valide";
            } else {
                if ($mois > 12 || $mois <= 0){ // vérifier le mois
                    echo "Merci de rentrer un mois valide !";
                } else {
                    if ($mois %2 == 1){ // impair
                        if ($jour > 31 || $jour < 1){
                            echo "Merci de rentrer un jour valide";
                        } else {
                            echo ($bAnnee)." ans ".(abs($bMois))." mois ".(abs($bJour))." jours.";
                        }
                    } else {
                        if ($mois == 2) { // février
                            if ($jour > 29 || $jour < 1) {
                                echo "Merci de rentrer un jour valide";
                            } else {
                                echo ($bAnnee)." ans ".(abs($bMois))." mois ".(abs($bJour))." jours.";
                            }
                        } else { // pair
                            if ($jour > 30 || $jour < 1) {
                                "Merci de rentrer un jour valide";
                            } else {
                                echo ($bAnnee)." ans ".(abs($bMois))." mois ".(abs($bJour))." jours.";
                            }
                        }
                    } 
                }
            }
        }
    }
}*/

// je pense que ça peut être largement optimisé, j'ai fait comme je pensais


// nouvelle méthode :
if(isset($_GET["naissance"])){ // éviter l'erreur index
    $naissance = $_GET["naissance"];
            //$datetime1 = ($annee."-".$mois."-"."-".$jour); // on met la date entrée là dedans
            $datetime1 = new DateTime(date($naissance));
            $datetime2 = new DateTime(date("Y-m-d H:i:s")); // date du jour
            $dateMaintenant = $datetime1->diff($datetime2);
            echo $dateMaintenant->format("%y ans %m mois %d jours.");
}

?>