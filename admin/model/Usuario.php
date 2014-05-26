<?php
namespace Model;


    class Usuario {

//ATRIBUTOS
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

//CONSTRUTOR
            function __construct(){
                
            }
            
            function __construct ($idAcesso, $nome, $email, $senha, $rg, $cpf, 
                    $naturalidade, $etnia, $estadoCivil, $dataNascimento, $endereco, 
                    $cidade, $bairro, $uf, $cep, $pontoReferencia, $telefone, $celular, $cargo){

                    $this->idAcesso = $idAcesso;
                    $this->nome = $nome;
                    $this->email = $email;
                    $this->senha = $senha;
                    $this->rg = $rg;
                    $this->cpf = $cpf;
                    $this->naturalidade = $naturalidade;
                    $this->etnia = $etnia;
                    $this->estadoCivil = $estadoCivil;
                    $this->dataNascimento = $dataNascimento;
                    $this->endereco = $endereco;
                    $this->cidade = $cidade;
                    $this->bairro = $bairro;
                    $this->uf = $uf;
                    $this->cep = $cep;
                    $this->pontoReferencia = $pontoReferencia;
                    $this->telefone = $telefone;
                    $this->celular = $celular;
                    $this->cargo = $cargo;
            }
//MÉTODOS
            public function getIdUsuario() {
                return $this->idUsuario;
            }

            public function setIdUsuario($idUsuario) {
                $this->idUsuario = $idUsuario;
            }

            public function getIdAcesso() {
                return $this->idAcesso;
            }

            public function setIdAcesso($idAcesso) {
                $this->idAcesso = $idAcesso;
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

            public function getEstadoCivil() {
                return $this->estadoCivil;
            }

            public function setEstadoCivil($estadoCivil) {
                $this->estadoCivil = $estadoCivil;
            }

            public function getDataNascimento() {
                return $this->dataNascimento;
            }

            public function setDataNascimento($dataNascimento) {
                $this->dataNascimento = $dataNascimento;
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

            public function getPontoReferencia() {
                return $this->pontoReferencia;
            }

            public function setPontoReferencia($pontoReferencia) {
                $this->pontoReferencia = $pontoReferencia;
            }

            public function getTelefone() {
                return $this->telefone;
            }

            public function setTelefone($telefone) {
                $this->telefone = $telefone;
            }

            public function getCelular() {
                return $this->celular;
            }

            public function setCelular($celular) {
                $this->celular = $celular;
            }

            public function getCargo() {
                return $this->cargo;
            }

            public function setCargo($cargo) {
                $this->cargo = $cargo;
            }

    }

?>
