<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";
include_once "$racine/modele/bd.rdv.inc.php";
include_once "$racine/modele/bd.client.inc.php";
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
;
 
// traitement si necessaire des donnees recuperees
;
$mailU = getMailULoggedOn();
$util = getUtilisateurByMailU($mailU);
$lesRdv = getRdvByIdU($util["idU"]);

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "liste des rendez-vous";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueLstRdv.php";
include "$racine/vue/pied.html.php";
?>