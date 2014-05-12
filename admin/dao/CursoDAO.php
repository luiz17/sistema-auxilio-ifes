<?php
namespace DAO;
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

    /**
     * Insere um novo curso
     * 
     * @param Curso $curso Objeto do tipo curso 
     */     
    public function insert(Curso $curso) {
        try { 
            $stmt = $pdo->prepare("INSERT Curso (nome, periodo) VALUES (:nome, :periodo)");
            $stmt->bindParam(':nome', $curso->getNome);
            $stmt->bindParam(':periodo', $curso->getPeriodo);
           
            $stmt->execute(); 
        
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar inserir o curso."; 
            GeraLog::getInstance()->inserirLog(" Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage()); 
            
        }
    }
    
    
    /**
     * Altera um curso
     * 
     * @param Curso $nCurso Objeto do tipo curso 
     */
    public function update (Curso $nCurso) {
    }
    
    
    /**
     * Exclui um novo curso
     * A exclusão é permitida apenas se nenhum aluno estiver matriculado.
     * @param Curso $curso Objeto do tipo curso 
     */
    public function delete(Curso $curso) {
        
        
    }
    
    /**
     * Consultar Curso
     * retorno: List
     * 
     * @param String $pesqConsulta Nome do Curso 
     */
    public function consult($pesqConsulta) {
        
        return null;
    }
    
    /**
     * Inativa Curso
     * Usado quando se deseja inativar um curso que já teve alguma movimentação de registros, por exemplo: alunos matriculados.
     * @param Curso $curso Objeto do tipo curso 
     */
    public function disable(urso $curso) {
        
        
    }
    
}