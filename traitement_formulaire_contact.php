<?php

//var_dump($_POST);

//Récupération des données
$nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
$accepter = filter_has_var(INPUT_POST, "accepter");
$competences = filter_input(INPUT_POST, "competence", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

var_dump($competences);

//validation
if(empty($nom)){
    $message = "Saisie invalide";
} else {
    //traitement des données
    $message = "Bonjour $nom";
    if($accepter){
        $message .= ", merci d'être aussi crédule";
    }
}

//Restitution
echo $message;
?>