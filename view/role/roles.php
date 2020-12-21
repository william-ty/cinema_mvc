<?php  
    $roles = $data ["roles"];
    // var_dump($roles);
?>

<h2>Liste des roles</h2>
<a class="linkbutton proceed" href="?ctrl=role&method=newRole">Ajouter un role</a>
<a class="linkbutton proceed" href="?ctrl=casting&method=newCasting">Ajouter un casting</a>

<table>
    <thead>
        <tr>
            <th>Rôle</th>
            <!-- <th>NB FILMS</th> -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($roles as $role) { ?>
                <tr>
                    <td><a href="index.php?ctrl=role&method=detailrole&id=<?= $role->getId() ?>"><?= $role?></a></td>
                    <!-- <td>
                    <?php // $role->getNbFilms() ?></td> -->
                    <td>
                        <a href="index.php?ctrl=role&method=editRole&id=<?= $role->getId() ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="index.php?ctrl=role&method=deleteRole&id=<?= $role->getId() ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
