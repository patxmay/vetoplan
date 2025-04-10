<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";

// init messages 
$messageMdp = "";

// recuperation des donnees GET, POST, et SESSION
if (isLoggedOn()) {
    $mailU = getMailULoggedOn();
    $util = getUtilisateurByMailU($mailU);

    // traitement si necessaire des donnees recuperees
    if (isset($_POST["mdpU"]) && isset($_POST["mdpU2"])) {
        if ($_POST["mdpU"] != "") {
            if (($_POST["mdpU"] == $_POST["mdpU2"])) {
                if (updtMdpUtilisateur($mailU, $_POST["mdpU"]) === true) {
                    login($mailU,$_POST["mdpU"]);
                    $messageMdp = "Nouveau mot de passe enregistré";
                } else {
                    $messageMdp = "Erreur d'enregistrement du mot de passe";
                }
            } else {
                $messageMdp = "Erreur de saisie du mot de passe";
            }
        }
    }

    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "modifier mon mot de passe";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueUpdProfil.php";
    include "$racine/vue/pied.html.php";
} else {
    $titre = "modifier mon mot de passe";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueUpdProfil.php";
    include "$racine/vue/pied.html.php";
}
?>