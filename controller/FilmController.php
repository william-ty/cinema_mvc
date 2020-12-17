<?php

namespace Controller;

use Model\Manager\FilmManager;


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
        $realisateurs = $manFilm->findRealisateur($id);

        return [
            "view" => "Film/detailFilm.php",
            "data" => [
                "film" => $film,
                "realisateur" => $realisateurs,
            ],
            "titrepage" => "Détail film"
        ];
    }
}