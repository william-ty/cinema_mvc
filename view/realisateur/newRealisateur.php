<a class="linkbutton proceed" href="index.php?ctrl=realisateur&method=allRealisateurs">Retour à la liste des realisateurs</a>

<h2>Nouveau realisateur</h2>

<form action="index.php?ctrl=realisateur&method=addRealisateur" method="POST">
    <div>
        <p class="fields">
            <label for="prenomRealisateur">Prénom du realisateur</label>
            <input type="text" name="prenomRealisateur" id="prenomRealisateur" required>
            <label for="nomRealisateur">Nom du realisateur</label>
            <input type="text" name="nomRealisateur" id="nomRealisateur" required>
            <label for="dateNaissance">Date de naissance</label>
            <input type="date" name="dateNaissance" id="dateNaissance" required>
            <span>Sexe:</span>
            <div>
                <input type="radio" name="sexe" id="homme" required value="H">
                <label for="sexe">Homme</label>
            </div>
            <div>
                <input type="radio" name="sexe" id="femme" required value="H">
                <label for="sexe">Femme</label>
            </div>
            <div>
                <input type="radio" name="sexe" id="autre" required value="A">
                <label for="sexe">Autre</label>
            </div>
        </p>
    </div>
    <p>
        <a class="linkbutton cancel" href="?ctrl=realisateur&method=allRealisateurs">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>