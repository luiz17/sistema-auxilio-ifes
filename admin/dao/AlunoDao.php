<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Dao;

use Dao\DBConnect;
use Model\Aluno;

/**
 * Description of AlunoDao
 *
 * @author luizventurote
 */
class AlunoDao {

    private $table = 'aluno';

    public function insert(Aluno $aluno) {
        
        echo 'teste';
        
        $con = new DBConnect();

        $stmt = $con->prepare("INSERT INTO $this->table (matricula, nome, email, senha, rg, cpf, turma_id, data_nascimento, sexo, naturalidade, etnia, estado_civil, endereco, cidade, bairro, uf, cep, ponto_referencia, telefone, telefone_trabalho, celular, acesso) VALUES (:matricula, :nome, :email, :senha, :rg, :cpf, :turma_id, :data_nascimento, :sexo, :naturalidade, :etnia, :estado_civil, :endereco, :cidade, :bairro, :uf, :cep, :ponto_referencia, :telefone, :telefone_trabalho, :celular, :acesso)");
        $stmt->bindParam(':matricula', $aluno->getMatricula());
        $stmt->bindParam(':nome', $aluno->getNome());
        $stmt->bindParam(':email', $aluno->getEmail());
        $stmt->bindParam(':senha', $aluno->getSenha());
        $stmt->bindParam(':rg', $aluno->getRg());
        $stmt->bindParam(':cpf', $aluno->getCpf());
        $stmt->bindParam(':turma_id', $aluno->getTurma_id());
        $stmt->bindParam(':data_nascimento', $aluno->getData_nascimento());
        $stmt->bindParam(':sexo', $aluno->getSexo());
        $stmt->bindParam(':naturalidade', $aluno->getNaturalidade());
        $stmt->bindParam(':etnia', $aluno->getEtnia());
        $stmt->bindParam(':estado_civil', $aluno->getEstado_civil());
        $stmt->bindParam(':endereco', $aluno->getEndereco());
        $stmt->bindParam(':cidade', $aluno->getCidade());
        $stmt->bindParam(':bairro', $aluno->getBairro());
        $stmt->bindParam(':uf', $aluno->getUf());
        $stmt->bindParam(':cep', $aluno->getCep());
        $stmt->bindParam(':ponto_referencia', $aluno->getPonto_referencia());
        $stmt->bindParam(':telefone', $aluno->getTelefone());
        $stmt->bindParam(':telefone_trabalho', $aluno->getTelefone_trabalho());
        $stmt->bindParam(':celular', $aluno->getCelular());
        $stmt->bindParam(':acesso', $aluno->getAcesso());

        //$stmt->execute();
    }

}

?>
