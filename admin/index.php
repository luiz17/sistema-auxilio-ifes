<?php

    // Head
    require_once 'include/head.php'; 

    // Ação do usuário
    if ( !empty( $_GET['page'] ) ) {

        $user_action = $_GET['page'];

        switch ($user_action) {
            case 'aluno':
                Mapping::requireModulePath('Aluno');
                break;
            case 'editar':

                // Verifica o ID
                if( !empty($_GET['id']) ) {
                    $id = $_GET['id'];
                    Mapping::requireModulePath('Aluno', 'editar');
                } else {
                    Mapping::requireModulePath('Aluno');
                }
                
                break;
            
            default:
                // 404
                break;
        }

    } else {

        Mapping::requireModulePath('Home');

    }

    // Footer
    require_once 'include/footer.php'; 