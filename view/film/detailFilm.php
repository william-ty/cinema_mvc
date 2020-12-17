<?php
    $films = $data["film"];
?>

<h2><?= $films ?></h2>

<a class="linkbutton proceed" href="index.php?ctrl=film&method=allFilms">Retour à la liste des films</a>
<a class="linkbutton proceed" href="?ctrl=film&method=newFilm">Ajouter un film</a>

<p>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Année</th>
                <th>Durée</th>
                <th>Note</th>
                <th>Synopsys</th>
                <th>Affiche</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><?= $films->getTitre() ?></td>
            <td><?= $films->getAnnee() ?></td>
            <td><?= $films->getDuree() ?></td>
            <td><?= $films->getNote() ?></td>
            <td><?= $films->getSynopsys() ?></td>
            <td><?= $films->getAffiche() ?></td></tr>
        </tbody>
    </table>
</p>
