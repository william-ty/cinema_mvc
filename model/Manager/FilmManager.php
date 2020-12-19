<?php

namespace Model\Manager;

use App\AbstractManager;

class FilmManager extends AbstractManager{

    private static $className = "Model\Entity\Film";

    public function __construct()
    {
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * FROM film";

        return self::getResults(
            self::select($sql,null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * FROM film WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }

    // récupère la liste films par realisateur
    public function findFilmsByRea($id){
        $sql = "SELECT *
                FROM film
                WHERE realisateur_id = :id";

        return self::getResults(
            self::select($sql, ["id" => $id], true),
            self::$className
        );
    }

    public function addFilm($titre, $realisateur, $duree, $dateSortie, $note, $synopsys, $affiche){
        $sql = "INSERT INTO film (titre, realisateur_id, duree, dateSortie, note, synopsys, affiche)
                VALUES (:titre, :realisateur_id, :duree, :dateSortie, :note, :synopsys, :affiche)";
        return self::create($sql, ["titre"=>$titre, "realisateur_id"=>$realisateur, "duree"=>$duree, "dateSortie"=>$dateSortie, "note"=>$note, "synopsys"=>$synopsys, "affiche"=>$affiche]);
    }
}
