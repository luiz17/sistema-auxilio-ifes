<?php

namespace Model;

class Aluno {

    private $aluno_id;
    private $nome;
    private $matricula;
    private $email;
    private $senha;
    private $rg;
    private $cpf;
    private $turma_id;
    private $data_nascimento;
    private $sexo;
    private $naturalidade;
    private $etnia;
    private $estado_civil;
    private $endereco;
    private $cidade;
    private $bairro;
    private $uf;
    private $cep;
    private $ponto_referencia;
    private $telefone;
    private $telefone_trabalho;
    private $celular;
    private $procedencia;
    private $proveniencia;
    private $bolsa_estudos;
    private $bolsa_estudos_porcentagem;
    private $renda;
    private $renda_percapita;
    private $acompanhamento;
    private $conta_bancaria_id;
    private $hb_habitacao;
    private $hb_valor;
    private $hb_pessoa_responsavel;
    private $hb_telefone_contato;
    private $hb_tipo_habitacao;
    private $hb_natureza_vinculo;
    private $hb_natureza_vinculo_valor;
    private $hb_qtd_comodos;
    private $hb_computador;
    private $hb_internet;
    private $hb_gasto_agua;
    private $hb_gasto_luz;
    private $hb_gasto_telefone;
    private $hb_gasto_emprestimo;
    private $hb_gasto_prestacoes;
    private $hb_gasto_celular;
    private $hb_gasto_alimentacao;
    private $hb_gasto_mensalidades;
    private $hb_gasto_condominio;
    private $hb_gasto_outros;
    private $ep_atividade_complementar;
    private $ep_trabalha;
    private $ep_trabalhou;
    private $ep_vinculo_trabalhista;
    private $ep_funcao;
    private $ep_outras_rendas;
    private $ep_procedencia;
    private $banco_conta;
    private $banco_agencia;
    private $banco_operacao;
    private $banco_numero;
    private $saude_convenio;
    private $saude_convenio_valor;
    private $saude_dificuldade_enxergar;
    private $saude_oculos;
    private $saude_recebe_medicamento;
    private $saude_medicamento_gastos;
    private $acesso;


    public function getAluno_id() {
        return $this->aluno_id;
    }

    public function setAluno_id($aluno_id) {
        $this->aluno_id = $aluno_id;
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getTurma_id() {
        return $this->turma_id;
    }

    public function setTurma_id($turma_id) {
        $this->turma_id = $turma_id;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getEtnia() {
        return $this->etnia;
    }

    public function setEtnia($etnia) {
        $this->etnia = $etnia;
    }

    public function getEstado_civil() {
        return $this->estado_civil;
    }

    public function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getUf() {
        return $this->uf;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getPonto_referencia() {
        return $this->ponto_referencia;
    }

    public function setPonto_referencia($ponto_referencia) {
        $this->ponto_referencia = $ponto_referencia;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone_trabalho() {
        return $this->telefone_trabalho;
    }

    public function setTelefone_trabalho($telefone_trabalho) {
        $this->telefone_trabalho = $telefone_trabalho;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getProcedencia() {
        return $this->procedencia;
    }

    public function setProcedencia($procedencia) {
        $this->procedencia = $procedencia;
    }

    public function getProveniencia() {
        return $this->proveniencia;
    }

    public function setProveniencia($proveniencia) {
        $this->proveniencia = $proveniencia;
    }

    public function getBolsa_estudos() {
        return $this->bolsa_estudos;
    }

    public function setBolsa_estudos($bolsa_estudos) {
        $this->bolsa_estudos = $bolsa_estudos;
    }

    public function getBolsa_estudos_porcentagem() {
        return $this->bolsa_estudos_porcentagem;
    }

    public function setBolsa_estudos_porcentagem($bolsa_estudos_porcentagem) {
        $this->bolsa_estudos_porcentagem = $bolsa_estudos_porcentagem;
    }

    public function getRenda() {
        return $this->renda;
    }

    public function setRenda($renda) {
        $this->renda = $renda;
    }

    public function getRenda_percapita() {
        return $this->renda_percapita;
    }

    public function setRenda_percapita($renda_percapita) {
        $this->renda_percapita = $renda_percapita;
    }

    public function getAcompanhamento() {
        return $this->acompanhamento;
    }

    public function setAcompanhamento($acompanhamento) {
        $this->acompanhamento = $acompanhamento;
    }

    public function getConta_bancaria_id() {
        return $this->conta_bancaria_id;
    }

    public function setConta_bancaria_id($conta_bancaria_id) {
        $this->conta_bancaria_id = $conta_bancaria_id;
    }

    public function getHb_habitacao() {
        return $this->hb_habitacao;
    }

    public function setHb_habitacao($hb_habitacao) {
        $this->hb_habitacao = $hb_habitacao;
    }

    public function getHb_valor() {
        return $this->hb_valor;
    }

    public function setHb_valor($hb_valor) {
        $this->hb_valor = $hb_valor;
    }

    public function getHb_pessoa_responsavel() {
        return $this->hb_pessoa_responsavel;
    }

    public function setHb_pessoa_responsavel($hb_pessoa_responsavel) {
        $this->hb_pessoa_responsavel = $hb_pessoa_responsavel;
    }

    public function getHb_telefone_contato() {
        return $this->hb_telefone_contato;
    }

    public function setHb_telefone_contato($hb_telefone_contato) {
        $this->hb_telefone_contato = $hb_telefone_contato;
    }

    public function getHb_tipo_habitacao() {
        return $this->hb_tipo_habitacao;
    }

    public function setHb_tipo_habitacao($hb_tipo_habitacao) {
        $this->hb_tipo_habitacao = $hb_tipo_habitacao;
    }

    public function getHb_natureza_vinculo() {
        return $this->hb_natureza_vinculo;
    }

    public function setHb_natureza_vinculo($hb_natureza_vinculo) {
        $this->hb_natureza_vinculo = $hb_natureza_vinculo;
    }

    public function getHb_natureza_vinculo_valor() {
        return $this->hb_natureza_vinculo_valor;
    }

    public function setHb_natureza_vinculo_valor($hb_natureza_vinculo_valor) {
        $this->hb_natureza_vinculo_valor = $hb_natureza_vinculo_valor;
    }

    public function getHb_qtd_comodos() {
        return $this->hb_qtd_comodos;
    }

    public function setHb_qtd_comodos($hb_qtd_comodos) {
        $this->hb_qtd_comodos = $hb_qtd_comodos;
    }

    public function getHb_computador() {
        return $this->hb_computador;
    }

    public function setHb_computador($hb_computador) {
        $this->hb_computador = $hb_computador;
    }

    public function getHb_internet() {
        return $this->hb_internet;
    }

    public function setHb_internet($hb_internet) {
        $this->hb_internet = $hb_internet;
    }

    public function getHb_gasto_agua() {
        return $this->hb_gasto_agua;
    }

    public function setHb_gasto_agua($hb_gasto_agua) {
        $this->hb_gasto_agua = $hb_gasto_agua;
    }

    public function getHb_gasto_luz() {
        return $this->hb_gasto_luz;
    }

    public function setHb_gasto_luz($hb_gasto_luz) {
        $this->hb_gasto_luz = $hb_gasto_luz;
    }

    public function getHb_gasto_telefone() {
        return $this->hb_gasto_telefone;
    }

    public function setHb_gasto_telefone($hb_gasto_telefone) {
        $this->hb_gasto_telefone = $hb_gasto_telefone;
    }

    public function getHb_gasto_emprestimo() {
        return $this->hb_gasto_emprestimo;
    }

    public function setHb_gasto_emprestimo($hb_gasto_emprestimo) {
        $this->hb_gasto_emprestimo = $hb_gasto_emprestimo;
    }

    public function getHb_gasto_prestacoes() {
        return $this->hb_gasto_prestacoes;
    }

    public function setHb_gasto_prestacoes($hb_gasto_prestacoes) {
        $this->hb_gasto_prestacoes = $hb_gasto_prestacoes;
    }

    public function getHb_gasto_celular() {
        return $this->hb_gasto_celular;
    }

    public function setHb_gasto_celular($hb_gasto_celular) {
        $this->hb_gasto_celular = $hb_gasto_celular;
    }

    public function getHb_gasto_alimentacao() {
        return $this->hb_gasto_alimentacao;
    }

    public function setHb_gasto_alimentacao($hb_gasto_alimentacao) {
        $this->hb_gasto_alimentacao = $hb_gasto_alimentacao;
    }

    public function getHb_gasto_mensalidades() {
        return $this->hb_gasto_mensalidades;
    }

    public function setHb_gasto_mensalidades($hb_gasto_mensalidades) {
        $this->hb_gasto_mensalidades = $hb_gasto_mensalidades;
    }

    public function getHb_gasto_condominio() {
        return $this->hb_gasto_condominio;
    }

    public function setHb_gasto_condominio($hb_gasto_condominio) {
        $this->hb_gasto_condominio = $hb_gasto_condominio;
    }

    public function getHb_gasto_outros() {
        return $this->hb_gasto_outros;
    }

    public function setHb_gasto_outros($hb_gasto_outros) {
        $this->hb_gasto_outros = $hb_gasto_outros;
    }

    public function getEp_atividade_complementar() {
        return $this->ep_atividade_complementar;
    }

    public function setEp_atividade_complementar($ep_atividade_complementar) {
        $this->ep_atividade_complementar = $ep_atividade_complementar;
    }

    public function getEp_trabalha() {
        return $this->ep_trabalha;
    }

    public function setEp_trabalha($ep_trabalha) {
        $this->ep_trabalha = $ep_trabalha;
    }

    public function getEp_trabalhou() {
        return $this->ep_trabalhou;
    }

    public function setEp_trabalhou($ep_trabalhou) {
        $this->ep_trabalhou = $ep_trabalhou;
    }

    public function getEp_vinculo_trabalhista() {
        return $this->ep_vinculo_trabalhista;
    }

    public function setEp_vinculo_trabalhista($ep_vinculo_trabalhista) {
        $this->ep_vinculo_trabalhista = $ep_vinculo_trabalhista;
    }

    public function getEp_funcao() {
        return $this->ep_funcao;
    }

    public function setEp_funcao($ep_funcao) {
        $this->ep_funcao = $ep_funcao;
    }

    public function getEp_outras_rendas() {
        return $this->ep_outras_rendas;
    }

    public function setEp_outras_rendas($ep_outras_rendas) {
        $this->ep_outras_rendas = $ep_outras_rendas;
    }

    public function getEp_procedencia() {
        return $this->ep_procedencia;
    }

    public function setEp_procedencia($ep_procedencia) {
        $this->ep_procedencia = $ep_procedencia;
    }

    public function getBanco_conta() {
        return $this->banco_conta;
    }

    public function setBanco_conta($banco_conta) {
        $this->banco_conta = $banco_conta;
    }

    public function getBanco_agencia() {
        return $this->banco_agencia;
    }

    public function setBanco_agencia($banco_agencia) {
        $this->banco_agencia = $banco_agencia;
    }

    public function getBanco_operacao() {
        return $this->banco_operacao;
    }

    public function setBanco_operacao($banco_operacao) {
        $this->banco_operacao = $banco_operacao;
    }

    public function getBanco_numero() {
        return $this->banco_numero;
    }

    public function setBanco_numero($banco_numero) {
        $this->banco_numero = $banco_numero;
    }

    public function getSaude_convenio() {
        return $this->saude_convenio;
    }

    public function setSaude_convenio($saude_convenio) {
        $this->saude_convenio = $saude_convenio;
    }

    public function getSaude_convenio_valor() {
        return $this->saude_convenio_valor;
    }

    public function setSaude_convenio_valor($saude_convenio_valor) {
        $this->saude_convenio_valor = $saude_convenio_valor;
    }

    public function getSaude_dificuldade_enxergar() {
        return $this->saude_dificuldade_enxergar;
    }

    public function setSaude_dificuldade_enxergar($saude_dificuldade_enxergar) {
        $this->saude_dificuldade_enxergar = $saude_dificuldade_enxergar;
    }

    public function getSaude_oculos() {
        return $this->saude_oculos;
    }

    public function setSaude_oculos($saude_oculos) {
        $this->saude_oculos = $saude_oculos;
    }

    public function getSaude_recebe_medicamento() {
        return $this->saude_recebe_medicamento;
    }

    public function setSaude_recebe_medicamento($saude_recebe_medicamento) {
        $this->saude_recebe_medicamento = $saude_recebe_medicamento;
    }

    public function getSaude_medicamento_gastos() {
        return $this->saude_medicamento_gastos;
    }

    public function setSaude_medicamento_gastos($saude_medicamento_gastos) {
        $this->saude_medicamento_gastos = $saude_medicamento_gastos;
    }
    
    public function getAcesso() {
        return $this->acesso;
    }

    public function setAcesso($acesso) {
        $this->acesso = $acesso;
    }

}

?>
