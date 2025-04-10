<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";
include_once "$racine/modele/bd.rdv.inc.php";
include_once "$racine/modele/bd.client.inc.php";

if (isLoggedOn()) {
    $mailU = getMailULoggedOn();
    $util = getUtilisateurByMailU($mailU);
    $idU = $util["idU"];
    $lstClients = getClientsByIdU($util["idU"]);

// recuperation des donnees GET, POST, et SESSION
    if (isset($_POST["idC"]) &&
            isset($_POST["date"]) &&
            isset($_POST["heure"]) &&
            isset($_POST["rueR"]) &&
            isset($_POST["cpR"]) &&
            isset($_POST["villeR"]) &&
            isset($_POST["animalR"]) &&
            isset($_POST["notes"])) {
        // enregistrement des nouvelles données si elles sont bien envoyées
        $uneDate = date("Y/m/d H:i", strtotime($_POST["date"]." ".$_POST["heure"]));
        addRdv($idU, $_POST["idC"], $uneDate, $_POST["rueR"], $_POST["cpR"], $_POST["villeR"], $_POST["animalR"], $_POST["notes"]);
        header('Location: http://' . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?action=lstrdv");
    } else {
        $titre = "Nouveau rendez-vous";
        include "$racine/vue/entete.html.php";
        include "$racine/vue/vueAjoutRdvPost.php";
        include "$racine/vue/pied.html.php";
    }
} else {
    $titre = "";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/pied.html.php";
}
?>