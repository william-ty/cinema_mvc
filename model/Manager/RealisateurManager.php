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

    public function addRealisateur($prenomRealisateur, $nomRealisateur, $dateNaissance, $sexe){
        $sql = "INSERT INTO Realisateur (prenomRealisateur, nomRealisateur, dateNaissance, sexe)
                    VALUES (:prenomRealisateur, :nomRealisateur, :dateNaissance, :sexe)";
        return self::create($sql, ["prenomRealisateur"=>$prenomRealisateur, "nomRealisateur"=>$nomRealisateur, "dateNaissance"=>$dateNaissance, "sexe"=>$sexe]);
    }

    public function deleteRealisateur($id){
        $sqlUpdate = "UPDATE film SET realisateur_id = null WHERE id = :id";
        $sqlDelete = "DELETE FROM realisateur WHERE id = :id";
            self::update($sqlUpdate, ["id" => $id]);
            self::delete($sqlDelete, ["id" => $id]);
    }
    
    
}
