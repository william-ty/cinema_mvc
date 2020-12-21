<?php
    $role = $data["role"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=role&method=allRoles">Retour à la liste des roles</a>

<h2>Nouveau role</h2>

<form action="index.php?ctrl=role&method=updateRole&id=<?=$role->getId()?>" method="POST">
    <p>
        <label for="nomRole">Nom du role</label>
        <input type="text" name="nomRole" id="nomRole" value="<?= $role->getNomRole()?>" required>
    </p>
    <p>
        <a class="linkbutton cancel" href="?ctrl=role&method=allRoles">Annuler</a>
        <input class="linkbutton proceed" type="submit" value="valider">
    </p>
</form>