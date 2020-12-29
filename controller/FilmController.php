<?php

namespace Controller;

use Model\Manager\FilmManager;
use Model\Manager\RealisateurManager;
use Model\Manager\GenreManager;
use Model\Manager\CastingManager;
use App\Session;
use App\Router;


class FilmController{

    public function allFilms() {
        
        $manFilm = new FilmManager();
        $manGenre = new GenreManager();
        $id = "";
        $films = $manFilm->findAll();
        $genres = $manGenre->findByFilm($id);

        return [
            "view" => "Film/films.php",
            "data" => [
                "films" => $films,
                "genres" => $genres
            ],
            "titrepage" => "Liste des films"
        ];
    }

    public function detailFilm($id){

        $manFilm = new FilmManager();
        $manCasting = new CastingManager();
        $film = $manFilm->findOneById($id);
        $castings = $manCasting->findCastingByFilmId($id);

        return [
            "view" => "Film/detailFilm.php",
            "data" => [
                "film" => $film,
                "castings" => $castings,
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

    public function addFilm(){
        if(!empty($_POST)){
            $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_STRING);
            $realisateur = filter_input(INPUT_POST, "realisateur", FILTER_SANITIZE_STRING);
            // $genre = filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_STRING);
            $dateSortie = filter_input(INPUT_POST, "dateSortie", FILTER_SANITIZE_STRING);
            $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_STRING);
            $synopsys = filter_input(INPUT_POST, "synopsys", FILTER_SANITIZE_STRING);
            $affiche = filter_input(INPUT_POST, "affiche", FILTER_SANITIZE_STRING);

            // var_dump($titre);
            // var_dump($realisateur);
            // var_dump($genre);
            // var_dump($duree);
            // var_dump($dateSortie);
            // var_dump($note);
            // var_dump($synopsys);

            if($titre && $realisateur && $duree && $dateSortie && $note && $synopsys && $affiche){
                $manFilm = new FilmManager();
                $manFilm->addFilm($titre, $realisateur, $duree, $dateSortie, $note, $synopsys, $affiche);

                Session::addFlash("success", "Nouveau film ajouté avec succès !");
                Router::redirectTo("film", "allFilms");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }
    }

    public function deleteFilm($id){
        $manFilm = new FilmManager();
        $film = $manFilm->findOneById($id);
        $manFilm->deleteFilm($id);
        Router::redirectTo("film", "allFilms");
    }

    public function editFilm($id){
        $manFilm = new FilmManager();
        $film = $manFilm->findOneById($id);
        $manRealisateur = new RealisateurManager();
        $realisateurs = $manRealisateur->findAll();
        $manGenre = new GenreManager();
        $genres = $manGenre->findAll();

        return [
            "view" => "Film/editFilm.php",
            "data" => [
                "film" => $film,
                "realisateurs" => $realisateurs,
                "genres" => $genres,
            ],
            "titrepage" => "Modifier le film"
        ];
    }

    public function updateFilm(){
        if(!empty($_POST)){

            $prenomFilm = filter_input(INPUT_POST, "prenomFilm", FILTER_SANITIZE_STRING);
            $nomFilm = filter_input(INPUT_POST, "nomFilm", FILTER_SANITIZE_STRING);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_STRING);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

            if($nomFilm && $prenomFilm && $dateNaissance && $sexe){
                $manFilm = new FilmManager();
                $manFilm->updateFilm($nomFilm, $prenomFilm, $dateNaissance, $sexe);

                Session::addFlash("success", "Film modifié avec succès !");
                Router::redirectTo("film", "allFilms");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }     
    }
}