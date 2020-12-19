<?php
    $films = $data["film"];
    $castings = $data["castings"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=film&method=allFilms">Retour à la liste des films</a>
<a class="linkbutton proceed" href="?ctrl=film&method=newFilm">Ajouter un film</a>

<h2><?= $films ?></h2>

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
            </tr>
        </thead>
        <tbody>
            <tr><td><?= $films->getTitre() ?></td>
            <td><a href="?ctrl=realisateur&method=detailRealisateur&id=<?= $films->getRealisateur()->getId() ?>"><?= $films->getRealisateur() ?></a></td>
            <td><?= $films->getDateSortie() ?></td>
            <td><?= $films->getDuree() ?></td>
            <td><?= $films->getNote() ?></td>
            <td><?= $films->getSynopsys() ?></td>
            <td><?= $films->getAffiche() ?></td></tr>
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
