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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($films as $film) { ?>
                <tr>
                    <td><a href="index.php?ctrl=film&method=detailFilm&id=<?= $film->getId() ?>"<?= $film ?>"><?= $film ?></a></td>
                    <td><?= $film->getDateSortie() ?></td>
                    <td><a href="?ctrl=genre&method=detailGenre&id=<?php ?>">Test</a></td>
                    <td><?= $film->getDuree() ?></td>
                    <td>
                        <?php if($film->getRealisateur() == null){
                            echo "Réalisateur non défini";
                        }else{ ?>
                            <a href="?ctrl=realisateur&method=detailRealisateur&id=<?= $film->getRealisateur()->getId()?>"><?= $film->getRealisateur() ?></a>
                        <?php } ?>
                    </td>
                    <td><?= $film->getNote() ?></td>
                    <td><a href="index.php?ctrl=film&method=deleteFilm&id=<?= $film->getId() ?>"><i class="fas fa-trash"></i></a></td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
