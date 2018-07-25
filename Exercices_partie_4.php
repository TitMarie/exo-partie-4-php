<?php

// exercice 1

function blabla(){
    return true;
};

echo blabla() . "<br>";

// exercice 2

function bleble($string) {
    return $string . " : tu as voulu écrire ça ? o_O"; 
};

echo bleble("C'est quoi cette bouteille de lait");
echo "<br>";

// exercice 3

function id($nom, $prenom) {
    return $nom . " " . $prenom;
};

echo id("Marie", "Gauthier");
echo "<br>";

// exercice 4

function resultat($premier, $deuxieme) {
    if ($premier > $deuxieme) {
        return "Le premier nombre est plus grand";
    } else if ($premier < $deuxieme) {
        return "Le premier nombre est plus petit";
    } else {
        return "Les deux nombres sont identiques";
    }
}

echo resultat(2,20);
echo "<br>";

// exercice 5

function multipass($string, $nombre) {
    return $string ." est ". $nombre; 
};

echo multipass("Carry", 4);
echo "<br>";

// exercice 6

function personne($nom, $prenom, $age) {
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
}

echo personne("TitMarie", "Gauthier", 28);
echo "<br>";

// exercice 7

function quiestu($age, $gender) {
    if ($age < 18 && $gender === "homme") {
        return "Vous êtes un homme et vous êtes mineur";
    } else if ($age >= 18 && $gender === "homme") {
        return "Vous êtes un homme et vous êtes majeur";
    } else if ($age < 18 && $gender === "femme") {
        return "Vous êtes une femme et vous êtes mineur";
    } else {
        return "Vous êtes une femme et vous êtes majeur";
    }
};

echo quiestu(28, "femme");
echo "<br>";

// exercice 8

$p = 138;
$d = 63;
$t = 1789;

function addition($p, $d, $t) {
    return $p + $d + $t;
}

echo addition($p, $d, $t);
