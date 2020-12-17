<?php

namespace Controller;

use Model\Manager\ActeurManager;


class ActeurController{

    public function allActeurs() {
        
        $manActeur = new ActeurManager();
        $acteurs = $manActeur->findAll();

        return [
            "view" => "Acteur/acteurs.php",
            "data" => [
                "acteurs" => $acteurs
            ],
            "titrepage" => "Liste des acteurs"
        ];
    }

    public function detailActeur($id){

        $manActeur = new ActeurManager();

        $acteur = $manActeur->findOneById($id);
        // $ = $manActeur->fName($id);
        
        // $Acteur = $manActeur->fName($id);

        return [
            "view" => "Acteur/detailActeur.php",
            "data" => [
                "acteur" => $acteur,
            ],
            "titrepage" => "Détail acteur"
        ];
    }

    public function newActeur(){

        return [
            "view" => "Acteur/newActeur.php",
            "titrepage" => "Ajouter un acteur"
        ];
    }

}

