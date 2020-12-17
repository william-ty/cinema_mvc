<?php  
    $films = $data ["films"];
?>

<h2>Liste des films</h2>

<a class="linkbutton proceed" href="?ctrl=film&method=newFilm">Ajouter un film</a>

<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Année</th>
            <th>Genre</th>
            <th>Durée</th>
            <th>Realisateur</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($films as $film) { ?>
                <tr>
                    <td><a href="index.php?ctrl=film&method=detailFilm&id=<?= $film->getId() ?>"<?= $film ?>"><?= $film ?></a></td>
                    <td><?= $film->getAnnee() ?></td>
                    <td><?= $film->getDuree() ?></td>
                    <td><?= $film->getDuree() ?></td>
                    <td><?= $film->getDuree() ?></td>
                    <td><?= $film->getNote() ?></td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
