<?php
    $film = $data["film"];
    $castings = $data["castings"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=film&method=allFilms">Retour à la liste des films</a>
<a class="linkbutton proceed" href="?ctrl=film&method=newFilm">Ajouter un film</a>

<h2><?= $film ?></h2>

<p>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Réalisateur</th>
                <th>Année</th>
                <th>Durée</th>
                <th>Note</th>
                <th>Synopsys</th>
                <th>Affiche</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <tr><td><?= $film->getTitre() ?></td>
            <td><a href="?ctrl=realisateur&method=detailRealisateur&id=<?= $film->getRealisateur()->getId() ?>"><?= $film->getRealisateur() ?></a></td>
            <td><?= $film->getDateSortie() ?></td>
            <td><?= $film->getDuree() ?></td>
            <td><?= $film->getNote() ?></td>
            <td><?= $film->getSynopsys() ?></td>
            <td><?= $film->getAffiche() ?></td>
            <td>
                <a href="index.php?ctrl=film&method=deleteFilm&id=<?= $film->getId() ?>"><i class="fas fa-trash"></i></a>
                <a href="index.php?ctrl=film&method=editFilm&id=<?= $film->getId() ?>"><i class="fas fa-edit"></i></a>
            </td></tr>
        </tbody>
    </table>
</p>
<p>
<?php
    foreach($castings as $casting){ ?>
        <?= $casting->getActeur()." ".$casting->getRole()."</br>"?>;
    <?php }
?>
</p>
