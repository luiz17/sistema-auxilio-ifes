<?php

/**
 * @var userAction ação tomada pelo usuário através da requisição http
 */
$userAction = isset($_GET['action']) ? $_GET['action'] : 'c';

/**
 * @var Controladora
 */
require_once '/../control/AlunoControl.php';
$ctr = new Control\AlunoControl();

switch ($userAction):
    case 'c':
        
        // Array de dados
        $args = array('nome' => $_POST['nome']);
        
        $ctr->insert($args);
        
        break;
    default:
endswitch;


