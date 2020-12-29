<?php
    $realisateurs = $data["realisateurs"];
    $realisateurs = $data["realisateurs"];
    $genres = $data["genres"]
?>

<h2>Nouveau Film</h2>

<a class="linkbutton proceed" href="index.php?ctrl=Film&method=allFilms">Retour à la liste des Films</a>
<form action="index.php?ctrl=Film&method=addFilm" method="POST">
    <div class="fields">
        <p>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" required>
        </p>
        <p>
            <label for="realisateur">Réalisateur</label>
            <select name="realisateur" id="realisateur" required>
            <?php
                foreach($realisateurs as $realisateur){?>
                    <option value="<?=$realisateur->getId()?>"><?=$realisateur?></option>
                <?php }
            ?>
            </select>
        </p>
        <p>
            <label for="genre">Genre</label>
            <select name="genre" id="genre" required>
            <?php
                foreach($genres as $genre){?>
                    <option value="<?=$genre->getId()?>"><?=ucfirst($genre)?></option>
                <?php }
            ?>
            </select>
        </p>
        <p>
            <label for="duree">Durée</label>
            <input type="text" name="duree" id="duree" required>
        </p>
        <p>
            <label for="dateSortie">Date de sortie</label>
            <input type="date" name="dateSortie" id="dateSortie" required>
        </p>
        <p>
            <label for="affiche">Affiche</label>
            <input type="text" name="affiche" id="affiche" required>
        </p>
        <p>
            <label for="note">Note</label>
            <input type="number" name="note" id="note" required>
        </p>
        <p>
            <label for="synopsys">Synopsys</label>
            <input type="synopsys" name="synopsys" id="synopsys" required>
        </p>
    </div>

    <p>
        <a class="linkbutton cancel" href="?ctrl=film&method=allFilms">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>