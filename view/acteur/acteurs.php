<?php  
    $acteurs = $data ["acteurs"];
?>

<a class="linkbutton proceed" href="?ctrl=acteur&method=newActeur">Ajouter un acteur</a>

<h2>Liste des acteurs</h2>

<table>
    <thead>
        <tr>
            <th>Acteur</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($acteurs as $acteur) { ?>
                <tr>
                    <td><a href="index.php?ctrl=acteur&method=detailActeur&id=<?= $acteur->getId() ?>"><?= $acteur?></a></td>
                    <td><?= $acteur->getDateNaissance() ?></td>
                    <td><?= $acteur->getSexe() ?></td>
                    <td>
                        <a href="index.php?ctrl=acteur&method=editActeur&id=<?= $acteur->getId() ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="index.php?ctrl=acteur&method=deleteActeur&id=<?= $acteur->getId() ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
