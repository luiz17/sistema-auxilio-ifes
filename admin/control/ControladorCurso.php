<?php
require_once ('autoload.php'); 
use DAO\CursoDAO;
use Model\Curso;

class ControladorCurso {
    private $cursodao = null;
    
    function __construct() {
        $this->cursodao = new CursoDAO();        
    }   
    
    public function insertCurso($nome, $periodo, $status) {
        $curso = new Curso($nome, $periodo, $status);
        $this->cursodao->insert($curso);
    }
    
    public function updateCurso($id, $nome, $periodo, $status) {
        $curso = new Curso($nome, $periodo, $status);
        $curso->setCurso_id($id);
        $this->cursodao->update($curso);
    }
    
    public function deleteCurso($id, $nome, $periodo, $status) {
        $curso = new Curso($id, $nome, $periodo, $status);
        $this->cursodao->delete($curso);
    }
    
    public function consultCurso($pesqConsulta) {
        $listCurso = $this->cursodao->consult($pesqConsulta);
        return $listCurso;
    }
    
    public function disableCurso($id, $nome, $periodo, $status) { //inativarCurso
        $curso = new Curso($id, $nome, $periodo, $status);
        $this->cursodao->disable($curso);
    }
}
