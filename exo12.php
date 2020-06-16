<?php
function nouvelle(){
    $tableau = [
        "Mickael" => "FRA",
        "Virgile" => "ESP",
        "Marie-Claire" => "ENG",
    ];
    $tableau2 = [
        "FRA" => "Salut",
        "ESP" => "Hola",
        "ENG" => "Hello"
    ];

    ksort($tableau); // permet le tri dans l'ordre alphabétique

    /*foreach ($tableau2 as $mot => $langue2){ // on passe d'abord dans les différentes langues avant de chercher les personnes
        foreach ($tableau as $nom => $langue){
            if ($langue == $langue2){
                echo $mot." ".$nom."<br>";
            }
        }
    }*/

    foreach ($tableau as $nom => $langue){ // exemple simplifié avec une seule boucle
        echo $tableau2[$langue]." ".$nom."<br>";
    }




   /* foreach ($tableau as $nom => $langue) { // fonctionne aussi
        if ($langue == "FRA"){
            echo "Salut $nom <br>";
        } else if ($langue == "ESP") {
            echo "Hola $nom <br>";
        } else if ($langue == "ENG") {
            echo "Hello $nom <br>";
        } else {
            echo "Langue inconnue";
        }
        
        
        /*switch ($langue) { // variante sans if
            case ("FRA"):
                echo "Salut $nom <br>";
            break;
            case ("ESP"):
                echo "Hola $nom <br>";
            break;
            case ("ENG"):
                echo "Hello $nom <br>";
            break;
            default:
                echo "Nationalité non reconnue $nom <br>";
            break;
        }
    }
}*/
}


nouvelle(); // j'ai un doute si c'est ça qui est demandé avec la fonction personnalisé

?>