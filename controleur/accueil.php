<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
// traitement si necessaire des donnees recuperees
;

if (isLoggedOn()) {
    // redirection vers l'affichage des rendez-vous
    header('Location: http://' . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]."?action=lstrdv");
} else {
    // appel du script de vue qui permet de gerer l'affichage
    $titre = "accueil";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAccueil.php";
    include "$racine/vue/pied.html.php";
}
?>