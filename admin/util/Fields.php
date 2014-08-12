<?php
/**
 * Classe geradora de campos automáticos.
 */

Class Fields {

    /**
     * Gerador de formulário.
     * 
     * @param array  $args    Vetor de campos.
     * @param string $action  Página de action.
     * @param string $method  Tipo de método.
     */
    public static function startFields( $args, $action = '', $method = 'GET', $values = null) {

        if( is_array($args) ):
            
            echo '<form action="'.$action.'" method="'.$method.'">';
            
            foreach($args as $field):

                // Adiciona o valor para cada argumento
                if( $values != null ) {

                    $field['value'] = $values[ $field['id'] ];

                }

                switch ( $field['type'] ) {
                    case 'text':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="text" name="'.$field['id'].'" value="'.$field['value'].'"></div>';
                    break;
                
                    case 'password':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="password" name="'.$field['id'].'" value="'.$field['value'].'"></div>';
                    break;
                
                    case 'submit':
                        echo '<div><input type="submit" name="'.$field['id'].'" value="'.$field['name'].'" value="'.$field['value'].'"></div>';
                    break;
                    
                    case 'textarea':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><textarea name="'.$field['id'].'" value="'.$field['value'].'"></textarea>';
                    break;
                
                    case 'hidden':
                        echo '<input type="hidden" name="'.$field['id'].'" value="'.$field['value'].'" value="'.$field['value'].'">';
                    break;
                } // end switch
            
            endforeach;
            
            echo '</form>';

        endif;
    }
}

?>
