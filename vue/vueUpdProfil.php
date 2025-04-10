
<h1>Mon profil  </h1>

Mon adresse électronique : <?= $util["mailU"] ?>   <br />
<form action="./?action=updmdp" method="POST">
    Mettre à jour mon mot de passe : <br />
    <input class="form-control" type="password" name="mdpU" placeholder="Nouveau mot de passe" /><br />
    <input class="form-control" type="password" name="mdpU2" placeholder="Confirmer la saisie" /><br />
    
   
    <input class="btn btn-primary" type="submit" value="Enregistrer"  /> <?= $messageMdp ?>
    
</form>


