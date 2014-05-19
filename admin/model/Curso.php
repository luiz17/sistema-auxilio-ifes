<?php
namespace Model;
class Curso {

    private $curso_id;
    private $nome;
    private $periodo;
    private $status;
    
  
    function __construct($nome, $periodo, $status) {
        $this->nome = $nome;
        $this->periodo = $periodo;
        $this->status = $status;
    }

    
    public function getCurso_id() {
        return $this->curso_id;
    }

    public function setCurso_id($curso_id) {
        $this->curso_id = $curso_id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }




}

?>