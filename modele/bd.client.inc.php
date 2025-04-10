<?php

include_once "bd.inc.php";

function getClientsByIdU($idU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from client where idU=:idU");
        $req->bindValue(':idU', $idU, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getClientByidC($idC) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from client where idC=:idC");
        $req->bindValue(':idC', $idC, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getClients() : \n";
    print_r(getClients());

    echo "getClientByidC(1) : \n";
    print_r(getClientByidC(1));
}
?>