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


$args = array();
                    
    $args[] = array(
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text'
    );
    $args[] = array(
        'name' => 'Ano',
        'id' => 'ano',
        'type' => 'text'
    );
    $args[] = array(
        'name' => 'Curso ID',
        'id' => 'curso_id',
        'type' => 'text'
    );

define ("TURMA_FIELDS", serialize ( $args ));


// Start mapping
require_once __ROOT__.'/admin/util/mapping.php';

// Start modules
require_once __ROOT__.'/admin/util/Module.php';
$mod_aluno = new Module('Aluno');