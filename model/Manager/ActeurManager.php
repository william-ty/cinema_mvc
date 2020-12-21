<?php

namespace Model\Manager;

use App\AbstractManager;

class ActeurManager extends AbstractManager{

    private static $className = "Model\Entity\Acteur";

    public function __construct()
    {
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * FROM acteur";

        return self::getResults(
            self::select($sql,null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * FROM acteur WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
             // select($sql, $params = null, $multiple = true
            self::$className
        );
    }
    
    public function addActeur($prenomActeur, $nomActeur, $dateNaissance, $sexe){
        $sql = "INSERT INTO acteur (prenomActeur, nomActeur, dateNaissance, sexe)
                    VALUES (:prenomActeur, :nomActeur, :dateNaissance, :sexe)";
        return self::create($sql, ["prenomActeur"=>$prenomActeur, "nomActeur"=>$nomActeur, "dateNaissance"=>$dateNaissance, "sexe"=>$sexe]);
    }

    public function deleteActeur($id){
        $sql = "DELETE FROM acteur WHERE id = :id";
            self::delete($sql, ["id" => $id]);  
    }

    public function updateActeur($prenomActeur, $nomActeur, $dateNaissance, $sexe){
        $sql = "UPDATE FROM acteur
                    SET prenomActeur = :prenomActeur, nomActeur = :nomActeur, dateNaissance = :dateNaissance, sexe = :sexe)";
        return self::update($sql, ["prenomActeur"=>$prenomActeur, "nomActeur"=>$nomActeur, "dateNaissance"=>$dateNaissance, "sexe"=>$sexe], true);
    }
}