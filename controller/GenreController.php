<?php

namespace Controller;

use Model\Manager\GenreManager;
use Model\Manager\FilmManager;
use App\Session;
use App\Router;


class GenreController{

    public function allGenres() {
        
        $manGenre = new GenreManager();
        $genres = $manGenre->findAll();

        return [
            "view" => "Genre/genres.php",
            "data" => [
                "genres" => $genres
            ],
            "titrepage" => "Liste des genres"
        ];
    }

    public function detailGenre($id){

        $manGenre = new GenreManager();
        $manFilm = new FilmManager();
        $genre = $manGenre->findOneById($id);
        $films = $manFilm->findFilmsByGenre($id);

        return [
            "view" => "Genre/detailGenre.php",
            "data" => [
                "genre" => $genre,
                "films" => $films,
            ],
            "titrepage" => "Détail genre"
        ];
    }

    public function newGenre(){

        return [
            "view" => "Genre/newGenre.php",
            "titrepage" => "Ajouter un genre"
        ];
    }

    public function addGenre(){
        if(!empty($_POST)){

            $libelleGenre = filter_input(INPUT_POST, "libelleGenre", FILTER_SANITIZE_STRING);

            if($libelleGenre){
                $manGenre = new GenreManager();
                $manGenre->addGenre($libelleGenre);

                Session::addFlash("sucess", "Nouveau genre ajouté avec succès !");
                Router::redirectTo("genre", "allGenres");
            }else{
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home", "index");
        }
    }
    
    public function deleteGenre($id){
        $manGenre = new GenreManager();
        $genre = $manGenre->findOneById($id);
        $manGenre->deleteGenre($id);
        Router::redirectTo("genre", "allGenres");
    }

    public function editGenre($id){
        $manGenre = new GenreManager();
        $genre = $manGenre->findOneById($id);

        return [
            "view" => "genre/editGenre.php",
            "data" => [
                "genre" => $genre,
            ],
            "titrepage" => "Modifier le genre"
        ];
    }

    public function updateGenre($id){
        if(!empty($_POST)){

            $libelleGenre = filter_input(INPUT_POST, "libelleGenre", FILTER_SANITIZE_STRING);

            if($libelleGenre){
                $manGenre = new GenreManager();
                $manGenre->updateGenre($id, $libelleGenre);

                Session::addFlash("success", "Genre modifié avec succès !");
                Router::redirectTo("genre", "allGenres");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }     
    }
}