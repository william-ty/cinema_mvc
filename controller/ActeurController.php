<?php

namespace Controller;

use Model\Manager\ActeurManager;
use App\Session;
use App\Router;


class ActeurController{

    public function allActeurs(){
        
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

        public function addActeur(){
        if(!empty($_POST)){

            $prenomActeur = filter_input(INPUT_POST, "prenomActeur", FILTER_SANITIZE_STRING);
            $nomActeur = filter_input(INPUT_POST, "nomActeur", FILTER_SANITIZE_STRING);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_STRING);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

            if($nomActeur && $prenomActeur && $dateNaissance && $sexe){
                $manActeur = new ActeurManager();
                $manActeur->addActeur($nomActeur, $prenomActeur, $dateNaissance, $sexe);

                Session::addFlash("success", "Nouvel acteur ajouté avec succès !");
                Router::redirectTo("acteur", "allActeurs");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }     
    }

    public function deleteActeur($id){
        $manActeur = new ActeurManager();
        $acteur = $manActeur->findOneById($id);
        $manActeur->deleteActeur($id);
        Router::redirectTo("acteur", "allActeurs");
    }

    public function editActeur($id){
        $manActeur = new ActeurManager();
        $acteur = $manActeur->findOneById($id);

        return [
            "view" => "Acteur/editActeur.php",
            "data" => [
                "acteur" => $acteur,
            ],
            "titrepage" => "Modifier l'acteur"
        ];
    }

    public function updateActeur(){
        if(!empty($_POST)){

            $prenomActeur = filter_input(INPUT_POST, "prenomActeur", FILTER_SANITIZE_STRING);
            $nomActeur = filter_input(INPUT_POST, "nomActeur", FILTER_SANITIZE_STRING);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_STRING);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

            if($nomActeur && $prenomActeur && $dateNaissance && $sexe){
                $manActeur = new ActeurManager();
                $manActeur->updateActeur($nomActeur, $prenomActeur, $dateNaissance, $sexe);

                Session::addFlash("success", "Acteur modifié avec succès !");
                Router::redirectTo("acteur", "allActeurs");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }     
    }
}

