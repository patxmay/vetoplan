
<h1>Detail d'un rendez-vous  </h1>


        <form action="index.php?action=detrdv&idR=<?= $unRdv["idR"] ?>" method="POST">

<div class="card text-center">
    <div class="card-header">Le <?= date_format(date_create($unRdv["dateR"]), "d/m/Y à H:i") ?>
        
    </div>
    <div class="card-body">
        <h5 class="card-title">Rendez-vous pour 
        <?= $unClient["prenomC"] ?>
        <?= $unClient["nomC"] ?></h5>
        <p class="card-text">
            <?= $unRdv["rueR"] ?> 
            <?= $unRdv["cpR"] ?> 
            <?= $unRdv["villeR"] ?>
        </p>
        <input  class="form-control"  type="text" name="animalR" placeholder="Animal" value="<?= $unRdv["animalR"] ?>" />    
            <br>
            <textarea class="form-control" name="notes" rows="2"><?= $unRdv["notes"] ?></textarea>
        

    </div>
    <div class="card-footer text-muted">
        <a href="./?action=lstrdv" class="btn btn-primary">Retour</a>
        <input class="btn btn-danger" type="submit" value="Enregistrer"  /> <?= $messageMdp ?>
    </div>
</div>
</form>





