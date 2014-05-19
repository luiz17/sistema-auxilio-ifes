<?php

require_once( '../autoload.php' );

use Model\Fields;

$fields = array();

$fields[] = array('name' => 'option',
    'id' => 'option',
    'type' => 'hidden',
    'value' => 1
);

$fields[] = array('name' => 'Nome',
    'id' => 'name',
    'type' => 'text'
);

$fields[] = array('name' => 'Cadastrar',
    'id' => 'cadastrar',
    'type' => 'submit'
);

Fields::startFields($fields, 'AlunoView.php', 'POST');
?>

