<?php

/**
 * Pasta root
 */
define('__ROOT__', dirname(dirname(dirname(__FILE__)))); 
define("__MODULE_PATH__", __ROOT__."/admin/module");

/**
 * URLS
 */
define("__ADMIN__", "http://localhost/sistema-auxilio-ifes/admin");

/**
 * Aluno attributes
 */
$args = array();
                    
    $args[] = array(
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text'
    );
    $args[] = array(
        'name' => 'Matrícula',
        'id' => 'matricula',
        'type' => 'text'
    );
    // $args[] = array(
    //     'name' => 'E-mail',
    //     'id' => 'email',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'RG',
    //     'id' => 'rg',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'CPF',
    //     'id' => 'cpf',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Data de Nascimento',
    //     'id' => 'data_nascimento',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Sexo',
    //     'id' => 'sexo',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Naturalidade',
    //     'id' => 'naturalidade',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Etnia',
    //     'id' => 'etnia',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Estado Civil',
    //     'id' => 'estado_civil',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Endereço',
    //     'id' => 'endereco',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Cidade',
    //     'id' => 'cidade',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Bairro',
    //     'id' => 'bairro',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'UF',
    //     'id' => 'uf',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'CEP',
    //     'id' => 'cep',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Ponto Referência',
    //     'id' => 'ponto_referencia',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Telefone',
    //     'id' => 'telefone',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Telefone Trabalho',
    //     'id' => 'telefone_trabalho',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Celular',
    //     'id' => 'celular',
    //     'type' => 'text'
    // );
    // $args[] = array(
    //     'name' => 'Senha',
    //     'id' => 'senha',
    //     'type' => 'text'
    // );
    $args[] = array(
        'name' => 'Turma ID',
        'id' => 'turma_id',
        'type' => 'text'
    );
    $args[] = array(
        'name' => 'Ficha ID',
        'id' => 'ficha_id',
        'type' => 'text'
    );
define ("ALUNO_FIELDS", serialize ( $args ));

// Start mapping
require_once __ROOT__.'/admin/util/mapping.php';