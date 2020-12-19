<?php

namespace Controller;

use Model\Manager\RealisateurManager;
use App\Session;
use App\Router;

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
    
    public function newRealisateur(){

        return [
            "view" => "Realisateur/newRealisateur.php",
            "titrepage" => "Ajouter un realisateur"
        ];
    }

    public function addRealisateur() {
        if(!empty($_POST)){

            $prenomRealisateur = filter_input(INPUT_POST, "prenomRealisateur", FILTER_SANITIZE_STRING);
            $nomRealisateur = filter_input(INPUT_POST, "nomRealisateur", FILTER_SANITIZE_STRING);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_STRING);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

            if($nomRealisateur && $prenomRealisateur && $dateNaissance && $sexe){
                $manRealisateur = new RealisateurManager();
                $manRealisateur->addRealisateur($nomRealisateur, $prenomRealisateur, $dateNaissance, $sexe);

                Session::addFlash("success", "Nouveau realisateur ajouté avec succès !");
                Router::redirectTo("realisateur", "allRealisateurs");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }     
    }
}