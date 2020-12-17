<?php  
    $roles = $data ["roles"];
    // var_dump($roles);
?>

<h2>Liste des roles</h2>
<a class="linkbutton proceed" href="?ctrl=role&method=newRole">Ajouter un role</a>

<table>
    <thead>
        <tr>
            <th>Rôle</th>
            <!-- <th>NB FILMS</th> -->
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($roles as $role) { ?>
                <tr>
                    <td><a href="index.php?ctrl=role&method=detailrole&id=<?= $role->getId() ?>"><?= $role?></a></td>
                    <!-- <td>
                    <?php // $role->getNbFilms() ?></td> -->
                    <td><a href="">DELETE</a></td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
