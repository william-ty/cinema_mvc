<?php

namespace Controller;

use Model\Manager\RealisateurManager;


class RealisateurController{

    public function allRealisateurs() {
        
        $manRealisateur = new RealisateurManager();
        $realisateurs = $manRealisateur->findAll();

        return [
            "view" => "Realisateur/realisateurs.php",
            "data" => [
                "realisateurs" => $realisateurs
            ],
            "titrepage" => "Liste des realisateurs"
        ];
    }

    public function detailRealisateur($id){

        $manRealisateur = new RealisateurManager();

        $realisateur = $manRealisateur->findOneById($id);

        return [
            "view" => "Realisateur/detailRealisateur.php",
            "data" => [
                "realisateur" => $realisateur,
            ],
            "titrepage" => "Détail realisateur"
        ];
    }
}