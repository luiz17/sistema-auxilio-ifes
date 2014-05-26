<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Dao;

use Dao\DBConnect;
use Model\Usuario;

/**
 * Description of UsuarioDao
 *
 * @author Paulo Henrique
 */
class UsuarioDao {
    //put your code here
    
    private $table = 'usuario';
    
    function __construct() {
        
    }
    
    public static function insert(Usuario $usuario){
      
        $con = new DBconnect();
        
        $stmt = $con->prepare("INSERT INTO $this->table (nome, email, senha, rg, cpf, naturaliade, etnia, estadoCivil, DataNascimento,
                endereco, cidade, bairro, uf, cep, pontoReferencia, telefone, celular, cargo)
                VALUES (:nome, :email, :senha, :rg, :cpf, :naturaliade, :etnia, :estadoCivil, :DataNascimento,
                :endereco, :cidade, :bairro, :uf, :cep, :pontoReferencia, :telefone, :celular, :cargo)");
        
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':email', $usuario->getEmail());
        $stmt->bindParam(':senha', $usuario->getSenha());
        $stmt->bindParam(':rg', $usuario->getRg());
        $stmt->bindParam(':cpf', $usuario->getCpf());
        $stmt->bindParam(':naturalidade', $usuario->getNaturalidade());
        $stmt->bindParam(':etnia', $usuario->getEtnia());
        $stmt->bindParam(':estadoCivil', $usuario->getEstadoCivil());
        $stmt->bindParam(':DataNascimento', $usuario->getDataNascimento());
        $stmt->bindParam(':endereco', $usuario->getEndereco());
        $stmt->bindParam(':cidade', $usuario->getCidade());
        $stmt->bindParam(':bairro', $usuario->getBairro());
        $stmt->bindParam(':uf', $usuario->getUf());
        $stmt->bindParam(':cep', $usuario->getCep());
        $stmt->bindParam(':pontoReferencia', $usuario->getPontoReferencia());
        $stmt->bindParam(':telefone', $usuario->getTelefone());
        $stmt->bindParam(':celular', $usuario->getCelular());
        $stmt->bindParam(':cargo', $usuario->getCargo());
        
        //$stmt->execute();
         
    }
    
    public static function delete(Usuario $usuario){
        $con = new DBconnect(); 
        $stmt = $con->prepare("DELETE FROM usuario WHERE idUsuario =".$usuario->getIdUsuario());
       
        //$stmt->execute();
    }
    
    /*
      private $idUsuario;
            private $idAcesso;//estrangeira
            private $nome; 
            private $email;
            private $senha;
            private $rg; 
            private $cpf;
            private $naturalidade;
            private $etnia;
            private $estadoCivil;
            private $dataNascimento;
            private $endereco;
            private $cidade;
            private $bairro;
            private $uf;
            private $cep;
            private $pontoReferencia;
            private $telefone;
            private $celular;
            private $cargo;
     */
       
    public static function update(Usuario $usuario){
        $con = new DBconnect();
        $stmt = $cont->prepare("UPDATE usuario SET nome =".$usuario->getNome()
                ."email =".$usuario->getEmail()
                ."senha =".$usuario->getSenha()
                ."rg =".$usuario->getRg()
                ."cpf =".$usuario->getCpf()
                ."naturalidade =".$usuario->getNaturalidade()
                ."etnia =".$usuario->getEtnia()
                ."estadoCivil".$usuario->getEstadoCivil()
                ."DataNascimento".$usuario->getDataNascimento()
                ."endereco".$usuario->getEndereco()
                ."cidade".$usuario->getCidade()
                ."bairro".$usuario->getBairro()
                ."uf".$usuario->getUf()
                ."cep".$usuario->getCep()
                ."pontoReferencia".$usuario->getPontoReferencia()
                ."telefone".$usuario->getTelefone()
                ."celular".$usuario->getCelular()
                ."cargo".$usuario->getCargo()
                );
        
        //$stmt->execute();
    }
    
}

?>
