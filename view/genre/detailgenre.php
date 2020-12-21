<?php
    $genre = $data["genre"];
    $films = $data["films"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=genre&method=allGenres">Retour à la liste des genres</a>
<a class="linkbutton proceed" href="?ctrl=genre&method=newGenre">Ajouter un genre</a>

<h2><?= $genre ?></h2>

<p>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($films as $film){?>
                    <tr>
                        <td>
                            <?=$film->getTitre();?>
                            <td>
                                <a href="index.php?ctrl=role&method=editRole&id=<?= $role->getId() ?>"><i class="fas fa-edit"></i></a>
                                <a href="index.php?ctrl=role&method=deleteRole&id=<?= $role->getId() ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </td>
                    </tr>

                <?php }
            ?>
        </tbody>
    </table>
</p>
