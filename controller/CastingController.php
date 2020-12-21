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

            $acteur = filter_input(INPUT_POST, "acteur", FILTER_SANITIZE_STRING);
            $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_STRING);
            $film = filter_input(INPUT_POST, "film", FILTER_SANITIZE_STRING);

            if($acteur && $role && $film){

                $manCasting = new CastingManager();
                $manCasting->addCasting($acteur, $role, $film);

                Session::addFlash("sucess", "Nouveau casting ajouté avec succès !");
                Router::redirectTo("role", "allRoles");
            }else{
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home", "index");
        }
    }
}
