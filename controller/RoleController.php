<?php

namespace Controller;

use Model\Manager\RoleManager;


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
}