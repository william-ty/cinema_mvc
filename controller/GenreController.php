<?php

namespace Controller;

use Model\Manager\GenreManager;
use Model\Manager\FilmManager;


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
}