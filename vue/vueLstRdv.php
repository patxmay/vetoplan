

<h1>
    VetoPlan
    <a href="./?action=addrdv" class="btn btn-primary">Nouveau rendez-vous</a>
</h1>



Liste de mes rendez-vous.

<?php

for($i=0;$i<count($lesRdv);$i++){
    ?>
    
    <div class="card">
  <div class="card-header">
    <?= date_format(date_create($lesRdv[$i]["dateR"]),"d/m/Y H:i") ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= getClientByidC($lesRdv[$i]["idC"])["nomC"] ?> <?= getClientByidC($lesRdv[$i]["idC"])["prenomC"] ?></h5>
    <p class="card-text"><?= $lesRdv[$i]["rueR"] ?> <?= $lesRdv[$i]["cpR"] ?> <?= $lesRdv[$i]["villeR"] ?>.
    </p>
    <a href="./?action=detrdv&idR=<?= $lesRdv[$i]["idR"] ?>" class="btn btn-primary">En detail</a>
  </div>
</div>
        <br>
    
    <?php
}


?>