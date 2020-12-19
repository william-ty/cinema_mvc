<?php

namespace Model\Manager;

use App\AbstractManager;

class RoleManager extends AbstractManager{

    private static $className = "Model\Entity\Role";

    public function __construct()
    {
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * FROM role";

        return self::getResults(
            self::select($sql,null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * FROM role WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),

             // select($sql, $params = null, $multiple = true
            self::$className
        );
    }

    public function addRole($nomRole){
        $sql = "INSERT INTO role (nomRole)
                    VALUES (:nomRole)";
        return self::create($sql, ["nomRole" => $nomRole]);
    }
}
