<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["lstrdv"] = "lstRdv.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["updmdp"] = "updMdp.php";
    $lesActions["detrdv"] = "detailRdv.php";
    $lesActions["addrdv"] = "addRdvPost.php";
        
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>