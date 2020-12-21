<?php
    $genre = $data["genre"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=genre&method=allGenres">Retour à la liste des genres</a>

<h2>Nouveau genre</h2>

<form action="index.php?ctrl=genre&method=updateGenre&id=<?=$genre->getId()?>" method="POST">
    <p>
        <label for="libelleGenre">Nom du genre</label>
        <input type="text" name="libelleGenre" id="libelleGenre" value="<?= $genre->getLibelleGenre()?>" required>
    </p>
    <p>
        <a class="linkbutton cancel" href="?ctrl=genre&method=allGenres">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>