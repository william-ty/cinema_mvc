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

    // récupère la liste salariés par entreprise
    public function findRealisateur($id){
        $sql = "SELECT *
                FROM film
                WHERE realisateur_id = :id";

        return self::getResults(
            self::select($sql, ["id" => $id], true),
            self::$className
        );
    }
}
