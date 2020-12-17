<?php
    $genre = $data["genre"];
    
?>

<a class="linkbutton proceed" href="index.php?ctrl=genre&method=allGenres">Retour à la liste des genres</a>

<h2><?= $genre ?></h2>

<p>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
            </tr>
        </thead>
        <tbody>
           <tr><td><?=$film->getTitre()?></td></tr>;
        </tbody>
    </table>
</p>
