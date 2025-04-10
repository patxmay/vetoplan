<h1>Nouveau rendez-vous</h1>
<form action="index.php?action=addrdv" method="POST">
    <label for="choixClient">Client</label>
    <select class="form-control" id="choixClient" name="idC">
        <?php for ($i = 0; $i < count($lstClients); $i++) { ?>
            <option value="<?= $lstClients[$i]["idC"] ?>"><?= $lstClients[$i]["prenomC"] ?> <?= $lstClients[$i]["nomC"] ?></option>
        <?php } ?>
    </select><br/>
    <input  class="form-control"  type="date" name="date" placeholder="Date de rendez-vous" /><br/>
    <input  class="form-control"  type="time" name="heure" placeholder="Heure de rendez-vous" /><br/>
    <input  class="form-control"  type="text" name="rueR" placeholder="Rue" /><br/>
    <input  class="form-control"  type="text" name="cpR" placeholder="Code postal" /><br/>
    <input  class="form-control"  type="text" name="villeR" placeholder="Ville" /><br/>
    <input  class="form-control"  type="text" name="animalR" placeholder="Animal à prendre en charge" /><br/>
    <textarea class="form-control" name="notes" rows="3" placeholder="Autres commentaires"></textarea>
    <input  class="btn btn-primary" type="submit" value="Enregistrer"/>

</form>


