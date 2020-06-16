<?php

// installer php getter

/*class Personne{
    private $_nom;
    private $_prenom;
    private $_naissance;

    public function __construct($gensNom, $gensPrenom, $gensNaissance){
        $this->_nom=$gensNom;
        $this->_prenom=$gensPrenom;
        $this->_naissance=$gensNaissance;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getAge(){
        return $this->_naissance;
    }

}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

// en dessous toute une conversion pour prendre l'année dans la classe pour calculer l'âge
$format = "Y-m-d";
$datep1 = DateTime::createFromFormat($format, $p1->getAge());
$datep2 = DateTime::createFromFormat($format, $p2->getAge());

$datetime2 = new DateTime(date("Y-m-d H:i:s"));
$datep1a1 = $datep1->diff($datetime2);
$datep1a2 = $datep2->diff($datetime2);

echo $p1->GetPrenom()." ".$p1->getNom()." a ".$datep1a1->format("%y ans <br>");
echo $p2->GetPrenom()." ".$p2->getNom()." a ".$datep1a2->format("%y ans <br>");*/


class Personne{
    private $_nom;
    private $_prenom;
    private $_naissance;

    public function __construct($gensNom, $gensPrenom, $gensNaissance){
        $this->_nom=$gensNom;
        $this->_prenom=$gensPrenom;
        $this->_naissance=new DateTime($gensNaissance); // instancier direct en datetime
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getAge(){
        // en dessous toute une conversion pour prendre l'année dans la classe pour calculer l'âge
        $format = "Y-m-d";
        $datep1 = $this->_naissance;
        $datetime2 = new DateTime(date("Y-m-d H:i:s"));
        $datep1a1 = $datep1->diff($datetime2);
        return $datep1a1->format("%y ans");
    }

    public function __toString(){ // le p1 et p2
        return $this->GetPrenom()." ".$this->getNom()." a ".$this->getAge();
    }

}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");



echo $p1."<br>";
echo $p2."<br>";
var_dump($p1);
?>