<?php 

	// Ação do usuário
	if ( !empty( $_GET['action'] ) ) {

		$user_action = $_GET['action'];

		switch ($user_action) {
			case 'cadastrar':
				Mapping::requireModulePath('Curso', 'cadastrar');
				break;
			case 'editar':

				// Verifica o ID
				if( !empty($_GET['id']) ) {
                    Mapping::requireModulePath('Curso', 'editar');
				} else {
                    Mapping::requireModulePath('Curso', 'list');
				}
				
				break;
			
			default:
				Mapping::requireModulePath('Curso', 'list');
				break;
		}

	} else {

		Mapping::requireModulePath('Curso', 'list');

	}