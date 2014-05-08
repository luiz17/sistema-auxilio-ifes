<?php
require_once ('autoload.php'); 
use 'DAO\CursoDAO.php';
use 'Model\Curso.php';

class ControladorCurso {
    function __construct() {
    }   
    
    public function inserirCurso($nome, $periodo) {
        $curso = new Curso($nome, $periodo);
        $cursodao = new CursoDAO();
        $cursodao->inserir($curso);
    }
    
    public function AlterarCurso($id, $nome, $periodo) {
        $curso = new Curso($nome, $periodo);
        $curso->setCurso_id($id);
        
        $cursodao = new CursoDAO();
        $cursodao->alterar($curso);
    }
    
    public function excluirCurso() {
    }
    
    public function consultarCurso() {
        
    }
}
