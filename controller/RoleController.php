<?php

namespace Controller;

use Model\Manager\RoleManager;
use App\Session;
use App\Router;

class RoleController{

    public function allRoles() {
        
        $manRole = new RoleManager();
        $roles = $manRole->findAll();

        return [
            "view" => "Role/roles.php",
            "data" => [
                "roles" => $roles
            ],
            "titrepage" => "Liste des roles"
        ];
    }

    public function detailRole($id){

        $manRole = new RoleManager();

        $role = $manRole->findOneById($id);
        
        return [
            "view" => "Role/detailRole.php",
            "data" => [
                "role" => $role,
            ],
            "titrepage" => "Détail role"
        ];
    }

    public function newRole(){

        return [
            "view" => "Role/newRole.php",
            "titrepage" => "Ajouter un role"
        ];
    }

    public function addRole(){
        if(!empty($_POST)){

            $nomRole = filter_input(INPUT_POST, "nomRole", FILTER_SANITIZE_STRING);
            
            if($nomRole){
                $manRole = new RoleManager();
                $manRole->addRole($nomRole);
                
                Session::addFlash("sucess", "Nouveau role ajouté avec succès !");
                Router::redirectTo("role", "allRoles");
            }else{
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home", "index");
        }
    }

    public function deleteRole($id){
        $manRole = new RoleManager();
        $role = $manRole->findOneById($id);
        $manRole->deleteRole($id);
        Router::redirectTo("role", "allRoles");
    }

    public function editRole($id){
        $manRole = new RoleManager();
        $role = $manRole->findOneById($id);

        return [
            "view" => "role/editRole.php",
            "data" => [
                "role" => $role,
            ],
            "titrepage" => "Modifier le role"
        ];
    }

    public function updateRole($id){
        if(!empty($_POST)){

            $nomRole = filter_input(INPUT_POST, "nomRole", FILTER_SANITIZE_STRING);

            if($nomRole){
                $manRole = new RoleManager();
                $manRole->updateRole($id, $nomRole);

                Session::addFlash("success", "Role modifié avec succès !");
                Router::redirectTo("role", "allRoles");
            } else {
                Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
            }
            Router::redirectTo("home");
        }     
    }
}