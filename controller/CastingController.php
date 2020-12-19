<?php

namespace Controller;

use Model\Manager\CastingManager;
use Model\Manager\ActeurManager;
use Model\Manager\RoleManager;
use Model\Manager\FilmManager;
use App\Session;
use App\Router;

class CastingController{

    public function newCasting(){

        $manActeurs = new ActeurManager();
        $manRoles = new RoleManager();
        $manFilms = new FilmManager();

        $acteurs = $manActeurs->findAll();
        $roles = $manRoles->findAll();
        $films = $manFilms->findAll();

        return [
            "view" => "Casting/newCasting.php",
            "data" => [
                "acteurs" => $acteurs,
                "roles" => $roles,
                "films" => $films
            ],
            "titrepage" => "Ajouter un casting"
        ];
    }

    public function addCasting(){
        if(!empty($_POST)){

            $films = filter_input(INPUT_POST, "films", FILTER_SANITIZE_STRING);
            $acteurs = filter_input(INPUT_POST, "acteurs", FILTER_SANITIZE_STRING);
            $roles = filter_input(INPUT_POST, "roles", FILTER_SANITIZE_STRING);

            if($films && $acteurs && $roles){

                $manCasting = new CastingManager();
                $manCasting->addCasting($films, $acteurs, $roles);

                Session::addFlash("sucess", "Nouveau genre ajouté avec succès !");
                Router::redirectTo("genre", "allGenres");
            }else{
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home", "index");
        }
    }
}
