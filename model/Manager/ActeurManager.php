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
        $sql = "INSERT INTO acteur (nomActeur)
                    VALUES (:nomActeur)";
        return self::create($sql, ["nomActeur" => $nomActeur]);
    }

    // public function addActeur() {
    //     if(!empty($_POST)){

    //         $prenomacteur = filter_input(INPUT_POST, "prenomacteur", FILTER_SANITIZE_STRING);
    //         $nomacteur = filter_input(INPUT_POST, "nomacteur", FILTER_SANITIZE_STRING);
    //         $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);
    //         $datenaissance = filter_input(INPUT_POST, "datenaissance", FILTER_SANITIZE_STRING);


    //         if($nomacteur && $prenomacteur && $sexe && $datenaissance){
    //             $manActeur = new ActeurManager();
    //             $manActeur->addActeur($nomacteur, $prenomacteur, $sexe, $datenaissance);

    //             Session::addFlash("success", "Nouveau acteur ajouté avec succès !");
    //             Router::redirectTo("acteur", "allActeur");
    //         } else {
    //             Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
    //         }
    //         Router::redirectTo("home");
    //     }     
    // }
}