<?php
        
	require_once( 'autoload.php' );
        
        use Model\Fields;
        
        use Control\usuarioControl;
        
        
        
        $fields = array();
        
        $fields[] = array(  'name' => 'Nome do aluno',
                            'type' => 'text'
                    );
        $fields[] = array(  'name' => 'Nome do aluno',
                            'type' => 'text'
                    );
        $fields[] = array(  'name' => 'Nome do aluno',
                            'type' => 'text'
                    );
        
       // Fields::startFields( $fields );
        
       usuarioControl::iniciarCampos();

?>