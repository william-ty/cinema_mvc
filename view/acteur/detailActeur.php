<?php
    $acteur = $data["acteur"];
?>

<a class="linkbutton proceed" href="index.php?ctrl=acteur&method=allActeurs">Retour à la liste des acteurs</a>
<a class="linkbutton proceed" href="?ctrl=acteur&method=newActeur">Ajouter un acteur</a>

<h2><?= $acteur ?></h2>

<p>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
            </tr>
        </thead>
        <tbody>
            <?="<tr><td>".$acteur->getNomActeur()."</td>";?>
            <?="<td>".$acteur->getPrenomActeur()."</td>";?>
            <?="<td>".$acteur->getDateNaissance()."</td>";?>
            <?="<td>".$acteur->getSexe()."</td></tr>";?>
        </tbody>
    </table>
</p>
