<h2>Nouveau Genre</h2>

<a class="linkbutton proceed" href="index.php?ctrl=genre&method=allGenres">Retour à la liste des genres</a>
<form action="index.php?ctrl=genre&method=addGenre" method="POST">
    <p>
        <label for="libelleGenre">Nom du genre</label>
        <input type="text" name="libelleGenre" id="libelleGenre" required>
    </p>
    <p>
        <a class="linkbutton cancel" href="?ctrl=genre&method=allGenres">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>