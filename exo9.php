<form method="GET" action="exo9.php">
            Votre age : <input type="number" name="age" required/> <br/>
            <p>
                Votre sexe
            </p>   
            <input type="radio" id="1" name="sexe" value="Homme" required>
            <label for="1">Homme</label>
            <input type="radio" id="2" name="sexe" value="Femme">
            <label for="2">Femme</label> <br/>
            <input type="submit" value="OK"/>
</form>

<?php

// Imposable ou non

if(isset($_GET["age"])){ // pour retirer l'erreur undefined index que j'ai eu
    $age = $_GET["age"];
    if(isset($_GET["sexe"])){
        $sexe = $_GET["sexe"];
        if ($sexe == "Homme") {
            if ($age > 20){
                echo "$sexe de $age : vous êtes imposable.";
            } else {
                echo "$sexe de $age : vous êtes pas imposable.";
            }
        } else { // sachant qu'il n'y a que deux choix, pas besoin de préciser femme
            if ($age >= 18 && $age <= 35){
                echo "$sexe de $age : vous êtes imposable.";
            } else {
                echo "$sexe de $age : vous êtes pas imposable.";
            }
        }
    }
}
?>