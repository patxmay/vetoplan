<?php

include_once "bd.inc.php";


function getRdvByIdU($idU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from rdv where idU=:idU order by dateR asc");
        $req->bindValue(':idU', $idU, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getRdvByIdR($idR) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from rdv where idR=:idR");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addRdv($idU, $idC, $dateR, $rueR, $cpR, $villeR, $animalr, $notes) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into rdv (idU, idC, dateR, rueR, cpR, villeR, animalR, notes) values(:idU, :idC, :dateR, :rueR, :cpR, :villeR, :animalr, :notes)");
        $req->bindValue(':idU', $idU, PDO::PARAM_INT);
        $req->bindValue(':idC', $idC, PDO::PARAM_INT);
        $req->bindValue(':dateR', $dateR, PDO::PARAM_STR);
        $req->bindValue(':rueR', $rueR, PDO::PARAM_STR);
        $req->bindValue(':cpR', $cpR, PDO::PARAM_STR);
        $req->bindValue(':villeR', $villeR, PDO::PARAM_STR);
        $req->bindValue(':animalr', $animalr, PDO::PARAM_STR);
        $req->bindValue(':notes', $notes, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function updAnimalrNotesRdv($idR,$animalr,$notes){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("update rdv set animalR='$animalr', notes='$notes' where idR=$idR");

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getRdvByIdU(4) : \n";
    print_r(getRdvByIdU(4));
    
    echo "getRdvByIdR(5) : \n";
    print_r(getRdvByIdR(5));
    
   //addRdv(4, 4, "2023-06-29 16:30:00", "24 rue du chemin de fer", "94110", "Arcueil", "Chien", "vaccination CHLRP, vérifier cicatrisation post-op");
}
?>