<?php  
    $films = $data ["films"];
    // $castings = $data ["castings"];
?>

<a class="linkbutton proceed" href="?ctrl=film&method=newFilm">Ajouter un film</a>

<h2>Liste des films</h2>

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
                    <td><?= $film->getDateSortie() ?></td>
                    <td><a href="?ctrl=genre&method=detailGenre&id=<?= $film->getRealisateur()->getId() ?>"><?= $film->getRealisateur() ?></a></td>
                    <td><?= $film->getDuree() ?></td>
                    <td><a href="?ctrl=realisateur&method=detailRealisateur&id=<?= $film->getRealisateur()->getId() ?>"><?= $film->getRealisateur() ?></a></td>
                    <td><?= $film->getNote() ?></td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
