<?php

namespace Model\Manager;

use App\AbstractManager;

class GenreManager extends AbstractManager{

    private static $className = "Model\Entity\Genre";

    public function __construct()
    {
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * FROM genre";

        return self::getResults(
            self::select($sql,null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * FROM genre WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }

    public function findByFilm($id){
        $sql = "SELECT *
                    FROM categorie_film
                    WHERE film_id = :id";
        return self::getResults(
            self::select($sql, ["id" => $id], true), "Model\Entity\GenreFilm"
        );
    }

    public function addGenre($libelleGenre){
        $sql = "INSERT INTO genre (libelleGenre)
                    VALUES (:libelleGenre)";
        return self::create($sql, ["libelleGenre" => $libelleGenre]);
    }

    public function deleteGenre($id){
        $sql = "DELETE FROM genre WHERE id = :id";
        return self::getOneOrNullResult(
            self::delete($sql, ["id" => $id], false),
            self::$className
        );
    }

    public function updateGenre($id, $libelleGenre){
        $sql = "UPDATE genre SET libelleGenre = :libelleGenre WHERE id = :id";
        self::update($sql, ["id"=>$id, "libelleGenre"=>$libelleGenre]);
    }
}
