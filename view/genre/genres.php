<?php  
    $genres = $data ["genres"];
    // var_dump($genres);

?>
<a class="linkbutton proceed" href="?ctrl=genre&method=newGenre">Ajouter un genre</a>

<h2>Liste des genres</h2>

<table>
    <thead>
        <tr>
            <th>Genre</th>
            <!-- <th>NB FILMS</th> -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($genres as $genre) { ?>
                <tr>
                    <td><a href="index.php?ctrl=genre&method=detailGenre&id=<?= $genre->getId() ?>"><?= $genre?></a></td>
                    <!-- <td>
                    <?php // $genre->getNbFilms() ?></td> -->
                    <td>
                        <a href="index.php?ctrl=genre&method=editGenre&id=<?= $genre->getId() ?>"><i class="fas fa-edit"></i></a>
                        <a href="index.php?ctrl=genre&method=deleteGenre&id=<?= $genre->getId() ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
