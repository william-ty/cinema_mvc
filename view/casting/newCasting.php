<?php
    // $castings = $data["castings"];
    $films = $data["films"];
    $roles = $data["roles"];
    $acteurs = $data["acteurs"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=role&method=allRoles">Retour à la liste des rôles</a>

<h2>Nouveau Film</h2>

<form action="index.php?ctrl=casting&method=addCasting" method="POST">
    <div class="fields">
        <p>
            <label for="acteur">Acteur</label>
            <select name="acteur" id="acteur" required>
            <?php
                foreach($films as $film){?>
                    <option value="<?=$film->getId()?>"><?=$film?></option>
                <?php }
            ?>
            </select>
        </p>
        <p>
            <label for="role">Rôle</label>
            <select name="role" id="role" required>
            <?php
                foreach($roles as $role){?>
                    <option value="<?=$role->getId()?>"><?=$role?></option>
                <?php }
            ?>
            </select>
        </p>
        <p>
            <label for="film">Film</label>
            <select name="film" id="film" required>
            <?php
                foreach($acteurs as $acteur){?>
                    <option value="<?=$acteur->getId()?>"><?=$acteur?></option>
                <?php }
            ?>
            </select>
        </p>
    </div>

    <p>
        <a class="linkbutton cancel" href="?ctrl=film&method=allFilms">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>