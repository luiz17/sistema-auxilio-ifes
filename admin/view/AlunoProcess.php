<?php

/**
 * Config
 */
require_once '/../util/config.php';

/**
 * @var userAction ação tomada pelo usuário através da requisição http
 */
$userAction = isset($_GET['action']) ? $_GET['action'] : 'c';

/**
 * Controladora
 */
require_once '/../control/AlunoControl.php';
$ctr = new Control\AlunoControl();

switch ($userAction):
    case 'c':

    	// Array de campos
    	$field_datas = unserialize(ALUNO_FIELDS);
        
        // Array de dados
        $args = array();
        foreach ($field_datas as $field => $value):
        	$args[] = array($value['id'] => $_POST[ $value['id'] ]);
        endforeach;
        
        $ctr->insert($args);
        
        break;
    default:
endswitch;


