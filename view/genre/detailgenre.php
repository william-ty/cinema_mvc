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
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($films as $film){?>
                    <tr>
                        <td>
                            <?=$film->getTitre();?>
                        </td>
                    </tr>

                <?php }
            ?>
        </tbody>
    </table>
</p>
