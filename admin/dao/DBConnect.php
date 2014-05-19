<?php

namespace Dao;

Class DBConnect {

    private $dbh;

    function __construct() {
        try {
            // Faz conexão com banco de daddos
            $this->dbh = new PDO("mysql:host=127.0.0.1;dbname=sistema_auxilio;", "root", "");
            return $this->dbh;
        } catch (PDOException $e) {
            // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
            echo 'Falha ao conectar no banco de dados: ' . $e->getMessage();
            die;
        }
    }
}

?>