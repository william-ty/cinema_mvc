<?php  
    $acteurs = $data ["acteurs"];
    // var_dump($acteurs);

?>

<h2>Liste des acteurs</h2>

<a class="linkbutton proceed" href="?ctrl=acteur&method=newActeur">Ajouter un acteur</a>

<table>
    <thead>
        <tr>
            <th>Acteur</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // var_dump($acteurs);
        foreach ($acteurs as $acteur) { ?>
                <tr>
                    <td><a href="index.php?ctrl=acteur&method=detailActeur&id=<?= $acteur->getId() ?>"<?= $acteur ?>"><?= $acteur?></a></td>
                    <td><?= $acteur->getDateNaissance() ?></td>
                    <td><?= $acteur->getSexe() ?></td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
