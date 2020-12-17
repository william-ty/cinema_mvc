<?php

namespace Controller;

use Model\Manager\FilmManager;
use Model\Manager\RealisateurManager;
use Model\Manager\GenreManager;


class FilmController{

    public function allFilms() {
        
        $manFilm = new FilmManager();
        $films = $manFilm->findAll();

        return [
            "view" => "Film/films.php",
            "data" => [
                "films" => $films
            ],
            "titrepage" => "Liste des films"
        ];
    }

    public function detailFilm($id){

        $manFilm = new FilmManager();

        $film = $manFilm->findOneById($id);
        // $realisateurs = $manFilm->findRealisateur($id);

        return [
            "view" => "Film/detailFilm.php",
            "data" => [
                "film" => $film,
                // "realisateur" => $realisateurs,
            ],
            "titrepage" => "Détail film"
        ];
    }

    public function newFilm(){

        $manRealisateur = new RealisateurManager();
        $realisateurs = $manRealisateur->findAll();
        $manGenre = new GenreManager();
        $genres = $manGenre->findAll();

        return [
            "view" => "Film/newFilm.php",
            "data" => [
                "realisateurs" => $realisateurs,
                "genres" => $genres
            ],
            "titrepage" => "Ajouter un film"
        ];
    }

    // public function addFilm(){
    //     if(!empty($_POST)){
    //         $
    //     }
    // }
}