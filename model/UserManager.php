<?php

namespace MVC\Users;

require_once ('Manager.php');

class  UserManager extends \MVC\Manager\Manager {

        public function getUsers()
    {
        $bdd = $this->connection();
        $requete = $bdd->query('SELECT * FROM users');

        return $requete;
    }

}



