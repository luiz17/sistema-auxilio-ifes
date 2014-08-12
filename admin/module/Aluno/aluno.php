<?php 

	// Ação do usuário
	if ( !empty( $_GET['action'] ) ) {

		$user_action = $_GET['action'];

		switch ($user_action) {
			case 'cadastrar':
				require_once 'aluno-cadastrar.php';
				break;
			case 'editar':

				// Verifica o ID
				if( !empty($_GET['id']) ) {
                    Mapping::requireModulePath('Aluno', 'editar');
				} else {
                    Mapping::requireModulePath('Aluno', 'list');
				}
				
				break;
			
			default:
				Mapping::requireModulePath('Aluno', 'list');
				break;
		}

	} else {

		Mapping::requireModulePath('Aluno', 'list');

	}