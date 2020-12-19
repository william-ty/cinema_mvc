<?php
    $realisateur = $data["realisateur"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=realisateur&method=allRealisateurs">Retour à la liste des realisateurs</a>
<a class="linkbutton proceed" href="?ctrl=realisateur&method=newRealisateur">Ajouter un realisateur</a>

<h2><?= $realisateur ?></h2>

<p>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
            </tr>
        </thead>
        <tbody>
            <?="<tr><td>".$realisateur->getNomRealisateur()."</td>";?>
            <?="<td>".$realisateur->getPrenomRealisateur()."</td>";?>
            <?="<td>".$realisateur->getDateNaissance()."</td>";?>
            <?="<td>".$realisateur->getSexe()."</td></tr>";?>
        </tbody>
    </table>
</p>
