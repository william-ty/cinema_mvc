<?php

namespace Model\Manager;

use App\AbstractManager;

class CastingManager extends AbstractManager{

    private static $className = "Model\Entity\Casting";

    public function __construct()
    {
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * FROM casting";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * FROM casting WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
    
    public function addCasting($acteurs, $role, $films){
        $sql = "INSERT INTO casting (acteur_id, role_id, film_id)
                    VALUES (:films, :acteurs, :roles)";
        return self::create($sql, [
                "acteurs"=>$acteurs,
                "role"=>$role,
                "films"=>$films
            ]);
    }

    public function findCastingByFilmId($id){
        $sql = "SELECT * FROM casting WHERE film_id = :id";

        return self::getResults(
            self::select($sql, ["id" => $id], true),
            self::$className
        );
    }
}