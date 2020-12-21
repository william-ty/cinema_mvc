<?php  
    $realisateurs = $data ["realisateurs"];
?>

<a class="linkbutton proceed" href="?ctrl=realisateur&method=newRealisateur">Ajouter un realisateur</a>

<h2>Liste des realisateurs</h2>

<table>
    <thead>
        <tr>
            <th>Realisateur</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($realisateurs as $realisateur) { ?>
                <tr>
                    <td><a href="index.php?ctrl=realisateur&method=detailRealisateur&id=<?= $realisateur->getId() ?>"<?= $realisateur ?>"><?= $realisateur?></a></td>
                    <td><?= $realisateur->getDateNaissance() ?></td>
                    <td><?= $realisateur->getSexe() ?></td>
                    <td>
                        <a href="index.php?ctrl=realisateur&method=editRealisateur&id=<?= $realisateur->getId() ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="index.php?ctrl=realisateur&method=deleteRealisateur&id=<?= $realisateur->getId() ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
