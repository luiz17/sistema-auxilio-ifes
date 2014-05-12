<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acesso
 *
 * @author Ruan
 */
class Acesso {
    //put your code here
    private $nome;
    private $idAcesso;
    
    function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdAcesso() {
        return $this->idAcesso;
    }


}