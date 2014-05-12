<?php
/**
 * Classe geradora de campos automáticos.
 */

namespace Model;

Class Fields {

    /**
     * Gerador de formulário.
     * 
     * @param array  $args    Vetor de campos.
     * @param string $action  Página de action.
     * @param string $method  Tipo de método.
     */
    public static function startFields( $args, $action = '', $method = 'GET') {

        if( is_array($args) ):
            
            echo '<form action"'.$action.'" method="'.$method.'">';
            
            foreach($args as $field):

                switch ( $field['type'] ) {
                    case 'text':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="text" name="'.$field['name'].'"></div>';
                    break;
                
                    case 'password':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="password" name="'.$field['name'].'"></div>';
                    break;
                
                    case 'submit':
                        echo '<div><input type="submit" name="'.$field['name'].'" value="'.$field['name'].'"></div>';
                    break;
                    
                    case 'textarea':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><textarea name="'.$field['name'].'"></textarea>';
                    break;
                } // end switch
            
            endforeach;
            
            echo '</form>';

        endif;
    }
}

?>
