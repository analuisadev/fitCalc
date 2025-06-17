<?php

namespace Model;

use Model\Connection;

class User
{
    private $db;

    public function __construct(){
        $this->db = Connection::getInstance();
    }

    //FUNÇÃO DE INSERÇÃO DE USUÁRIO
}

?>