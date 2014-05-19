<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Control;

use Model\Aluno;
use Dao\AlunoDao;

/**
 * Description of AlunoControl
 *
 * @author 2012122760110
 */
class AlunoControl {

    public static function insert($nome) {

        // Cria um objeto aluno
        $aluno = new Aluno();
        $aluno->setNome($nome);
        $aluno->setMatricula(2014516885490);
        $aluno->setEmail('luiz@teste.com');
        $aluno->setSenha('123456');
        $aluno->setRg('123456789');
        $aluno->setCpf('123456789');
        $aluno->setTurma_id(1);
        $aluno->setData_nascimento('2014-02-02');
        $aluno->setSexo('M');
        $aluno->setNaturalidade('Brasileiro');
        $aluno->setEtnia('teste-etnia');
        $aluno->setEstado_civil('teste-ec');
        $aluno->setEndereco('teste-endereco');
        $aluno->setCidade('teste-cidade');
        $aluno->setBairro('teste-bairro');
        $aluno->setUf('ES');
        $aluno->setCep(29784561);
        $aluno->setPonto_referencia('teste-PR');
        $aluno->setTelefone(37114899);
        $aluno->setTelefone_trabalho(37448966);
        $aluno->setCelular(39884577);
        $aluno->setAcesso(1);
        
        echo 'tudo certo';

        $dao = new AlunoDao;
        $dao->insert($aluno);
    }

}

?>
