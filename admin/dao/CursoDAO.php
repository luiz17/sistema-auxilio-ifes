<?php
namespace DAO;
require_once ('autoload.php'); 
use Model\Curso;
use Dao\DBConnect;
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
            $con = new DBConnect();
            $stmt = $con->prepare("INSERT into Curso (nome, periodo, status) VALUES (:nome, :periodo, :status)");
            $stmt->bindParam(':nome', $curso->getNome());
            $stmt->bindParam(':periodo', $curso->getPeriodo());
            $stmt->bindParam(':status', $curso->getStatus());
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
        try { 
            $con = new DBConnect();
            $stmt = $con->prepare("UPDATE Curso SET(nome = :nome, periodo = :periodo, status = :status) where curso.id = :id");
            $stmt->bindParam(':nome', $nCurso->getNome());
            $stmt->bindParam(':periodo', $nCurso->getPeriodo());
            $stmt->bindParam(':id', $nCurso->getCurso_id());
            $stmt->bindParam(':status', $nCurso->getStatus());
            $stmt->execute(); 
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar alterar o curso."; 
            GeraLog::getInstance()->inserirLog(" Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());  
        }
    }
    
    
    /**
     * Exclui um novo curso
     * A exclusão é permitida apenas se nenhum aluno estiver matriculado.
     * @param Curso $curso Objeto do tipo curso 
     */
    public function delete(Curso $curso) {
        try { 
            $con = new DBConnect();
            $stmt = $con->prepare("DELETE FROM Curso where curso.id = :id");
            $stmt->bindParam(':id', $curso->getCurso_id());
            
           
            $stmt->execute(); 
        
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar deletar curso."; 
            GeraLog::getInstance()->inserirLog(" Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage()); 
            
        }
    }
    
    /**
     * Consultar Curso
     * retorno: List
     * 
     * @param String $pesqConsulta Nome do Curso 
     */
    public function consult($pesqConsulta) {
        try { 
            $con = new DBConnect();
            $stmt = $con->prepare("SELECT * FROM Curso where CURSO.nome = :nome");
            $stmt->bindParam(':nome', $pesqConsulta);
           
            $stmt->execute(); 
        
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar consultar o curso."; 
            GeraLog::getInstance()->inserirLog(" Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage()); 
            
        }
    }
    
    /**
     * Inativa Curso
     * Usado quando se deseja inativar um curso que já teve alguma movimentação de registros, por exemplo: alunos matriculados.
     * @param Curso $curso Objeto do tipo curso 
     */
    public function disable(urso $curso) {
        
        
    }
    
}