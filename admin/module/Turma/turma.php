<?php 

	// Ação do usuário
	if ( !empty( $_GET['action'] ) ) {

		$user_action = $_GET['action'];

		switch ($user_action) {
			case 'cadastrar':
				require_once 'turma-cadastrar.php';
				break;
			case 'editar':

				// Verifica o ID
				if( !empty($_GET['id']) ) {
                    Mapping::requireModulePath('Turma', 'editar');
				} else {
                    Mapping::requireModulePath('Turma', 'list');
				}
				
				break;
			
			default:
				Mapping::requireModulePath('Turma', 'list');
				break;
		}

	} else {

		Mapping::requireModulePath('Turma', 'list');

	}