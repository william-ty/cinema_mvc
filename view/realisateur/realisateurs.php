<?php  
    $realisateurs = $data ["realisateurs"];
    // var_dump($realisateurs);

?>

<h2>Liste des realisateurs</h2>

<a class="linkbutton proceed" href="?ctrl=realisateur&method=newRealisateur">Ajouter un realisateur</a>

<table>
    <thead>
        <tr>
            <th>Realisateur</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($realisateurs as $realisateur) { ?>
                <tr>
                    <td><a href="index.php?ctrl=realisateur&method=detailRealisateur&id=<?= $realisateur->getId() ?>"<?= $realisateur ?>"><?= $realisateur?></a></td>
                    <td><?= $realisateur->getDateNaissance() ?></td>
                    <td><?= $realisateur->getSexe() ?></td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
