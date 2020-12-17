<h2>Nouvel Acteur</h2>

<a class="linkbutton proceed" href="index.php?ctrl=acteur&method=allActeur">Retour à la liste des acteurs</a>
<form action="index.php?ctrl=acteur&method=addActeur" method="POST">
    <p>
        <label for="nomActeur">Nom de l'acteur</label>
        <input type="text" name="nomActeur" id="nomActeur" required>
    </p>
    <p>
        <a class="linkbutton cancel" href="?ctrl=acteur&method=allActeurs">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>