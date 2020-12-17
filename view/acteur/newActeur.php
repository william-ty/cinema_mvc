<h2>Nouvel Acteur</h2>

<a class="linkbutton proceed" href="index.php?ctrl=acteur&method=allActeurs">Retour à la liste des acteurs</a>
<form action="index.php?ctrl=acteur&method=addActeur" method="POST">
    <div>
        <p class="fields">
            <label for="prenomActeur">Prénom de l'acteur</label>
            <input type="text" name="prenomActeur" id="prenomActeur" required>
            <label for="nomActeur">Nom de l'acteur</label>
            <input type="text" name="nomActeur" id="nomActeur" required>
            <label for="dateNaissance">Date de naissance</label>
            <input type="date" name="dateNaissance" id="dateNaissance" required>
            <span>Sexe:</span>
            <div>
                <input type="radio" name="sexe" id="homme" required>
                <label for="sexe">H</label>
            </div>
            <div>
                <input type="radio" name="sexe" id="femme" required>
                <label for="sexe">F</label>
            </div>
            <div>
                <input type="radio" name="sexe" id="autre" required>
                <label for="sexe">A</label>
            </div>
        </p>
    </div>
    <p>
        <a class="linkbutton cancel" href="?ctrl=acteur&method=allActeurs">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>