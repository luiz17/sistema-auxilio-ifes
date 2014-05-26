<?php

namespace Dao;

use PDO;

Class DBConnect {

    private $pdo;

    function __construct() {

        $host = "127.0.0.1";
        $dbname = "sistema_auxilio";
        $user = "root";
        $pswd = "";

        $this->pdo = new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $dbname), $user, $pswd);
    }

}

?>