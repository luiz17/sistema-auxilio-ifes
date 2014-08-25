<?php 

	// Ação do usuário
	if ( !empty( $_GET['action'] ) ) {

		$user_action = $_GET['action'];

		switch ($user_action) {
			case 'cadastrar':
				Mapping::requireModulePath('Auxilio', 'cadastrar');
				break;
			case 'editar':

				// Verifica o ID
				if( !empty($_GET['id']) ) {
                    Mapping::requireModulePath('Auxilio', 'editar');
				} else {
                    Mapping::requireModulePath('Auxilio', 'list');
				}
				
				break;
			
			default:
				Mapping::requireModulePath('Auxilio', 'list');
				break;
		}

	} else {

		Mapping::requireModulePath('Auxilio', 'list');

	}