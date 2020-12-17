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
            </tr>
        </thead>
        <tbody>
            <?="<tr><td>".$role->getNomRole()."</td>";?>
            <?="<td>".$role."</td>";?>
        </tbody>
    </table>
</p>
