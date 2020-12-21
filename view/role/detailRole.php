<?php
    $role = $data["role"];
?>

<h2><?= $role ?></h2>

<a class="linkbutton proceed" href="index.php?ctrl=role&method=allRoles">Retour à la liste des roles</a>
<a class="linkbutton proceed" href="?ctrl=role&method=newRole">Ajouter un role</a>

<p>
    <table>
        <thead>
            <tr>
                <th>Rôle</th>
                <th>Acteur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?="<tr><td>".$role->getNomRole()."</td>";?>
            <td>
                <a href="index.php?ctrl=role&method=editRole&id=<?= $role->getId() ?>"><i class="fas fa-edit"></i></a>
                <a href="index.php?ctrl=role&method=deleteRole&id=<?= $role->getId() ?>"><i class="fas fa-trash"></i></a>
            </td>
        </tbody>
    </table>
</p>
