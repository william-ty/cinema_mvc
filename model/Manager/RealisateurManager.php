<?php

namespace Model\Manager;

use App\AbstractManager;

class RealisateurManager extends AbstractManager{

    private static $className = "Model\Entity\Realisateur";

    public function __construct()
    {
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * FROM realisateur";

        return self::getResults(
            self::select($sql,null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * FROM realisateur WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),

             // select($sql, $params = null, $multiple = true
            self::$className
        );
    }
}
