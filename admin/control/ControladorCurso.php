<?php
require_once ('autoload.php'); 
use DAO\CursoDAO;
use Model\Curso;

class ControladorCurso {
    private $cursodao = null;
    
    function __construct() {
        $this->cursodao = new CursoDAO();        
    }   
    
    public function insertCurso($nome, $periodo) {
        $curso = new Curso($nome, $periodo);
        $cursodao->insert($curso);
    }
    
    public function updateCurso($id, $nome, $periodo) {
        $curso = new Curso($nome, $periodo);
        $curso->setCurso_id($id);
        $cursodao->update($curso);
    }
    
    public function deleteCurso($id, $nome, $periodo) {
        $curso = new Curso($nome, $periodo);
        $cursodao->delete($curso);
    }
    
    public function consultCurso($pesqConsulta) {
        $listCurso = $cursodao->consult($pesqConsulta);
        return $listCurso;
    }
    
    public function disableCurso($id, $nome, $periodo) { //inativarCurso
        $curso = new Curso($nome, $periodo);
        $cursodao->disable($curso);
    }
}
