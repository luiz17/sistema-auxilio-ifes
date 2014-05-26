<?php
/**
 * Classe geradora de campos automáticos.
 */

namespace Util;

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
            
            echo '<form action="'.$action.'" method="'.$method.'">';
            
            foreach($args as $field):

                switch ( $field['type'] ) {
                    case 'text':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="text" name="'.$field['id'].'"></div>';
                    break;
                
                    case 'password':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="password" name="'.$field['id'].'"></div>';
                    break;
                
                    case 'submit':
                        echo '<div><input type="submit" name="'.$field['id'].'" value="'.$field['name'].'"></div>';
                    break;
                    
                    case 'textarea':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><textarea name="'.$field['id'].'"></textarea>';
                    break;
                
                    case 'hidden':
                        echo '<input type="hidden" name="'.$field['id'].'" value="'.$field['value'].'">';
                    break;
                } // end switch
            
            endforeach;
            
            echo '</form>';

        endif;
    }
}

?>
