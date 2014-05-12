<?php
require_once ('autoload.php'); 
use 'Model\Curso.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cursoDAO
 *
 * @author Ruan
 */
class CursoDAO {
    //put your code here
    
    function __construct() {
        
    }
    
    public function insert(Curso $curso) {
        
//        $sql = "insert into Curso (nome, periodo)values(".$curso->getNome.", ".$curso->getPeriodo.")";
//        mysql_query($sql);
    }
    
    public function update (Curso $nCurso) {
//        $sql = "update Curso set nome = ".$ncurso->getNome.", periodo = ".$ncurso->getPeriodo.") where curso.idCurso = ".$ncurso->getCurso_id;
//        mysql_query($sql);
    }
    
    public function delete(Curso $curso) {
        
        
    }
    
    public function consult($pesqConsulta) {
        
        
    }
    
    public function disable(urso $curso) {
        
        
    }
    
}
