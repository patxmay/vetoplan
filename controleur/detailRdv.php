<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";
include_once "$racine/modele/bd.rdv.inc.php";
include_once "$racine/modele/bd.client.inc.php";

$messageMdp="";

// recuperation des donnees GET, POST, et SESSION
$idR = $_GET["idR"];

if (isset($_POST["notes"]) && isset($_POST["animalR"])){
    // enregistrement des nouvelles données si elles sont bien envoyées
    updAnimalrNotesRdv($idR,$_POST["animalR"],$_POST["notes"]);
}

$unRdv = getRdvByIdR($idR);
$unClient = getClientByidC($unRdv["idC"]);

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'un rendez-vous";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailRdv.php";
include "$racine/vue/pied.html.php";
?>