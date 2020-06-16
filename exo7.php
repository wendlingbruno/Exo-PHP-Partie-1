<form method="GET" action="exo7.php">
            Entrez l'âge de votre enfant : <input type="text" name="age" required/> <br/>
            <input type="submit" value="OK"/>
</form>
<?php

$categorie = "";

/*if(isset($_GET["age"])){ // pour retirer l'erreur undefined index que j'ai eu
    $age = $_GET["age"]; 
    switch ($age) { // je sais que c'est faisable en if mais j'avais envie de tenter le switch case ici
        case ($age >= 6 && $age <= 7):
            echo "Poussin";
            break;
        case ($age >= 8 && $age <= 9):
            echo "Pupille";
            break;
        case ($age >= 10 && $age <= 11):
            echo "Minime";
            break;
        case ($age >= 12):
            echo "Cadet";
            break;
        default:
            echo "Autre, plus jeune";
            break;
    }
}*/

if(isset($_GET["age"])){ // pour retirer l'erreur undefined index que j'ai eu
    $age = $_GET["age"];
    if ($age >= 12){
        $categorie = "Cadet"; // mettre la catégorie directement dans une variable
    } else if ($age >=10){
        $categorie = "Minime";
    } else if ($age >= 8){
        $categorie = "Pupille";
    } else if ($age >= 6){
        $categorie = "Poussin";
    } else {
        $categorie = "Autre";
    }
}
    echo $categorie;
?> 