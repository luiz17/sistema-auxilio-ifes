<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Control;

require_once( '../autoload.php' );

use Model\Usuario;
use Dao\UsuarioDao;

class usuarioControl {
$table = 'usuario';

   public function insert(Usuario $usuario){
   $dados[] = array(  'idAcesso' => $usuario->,
                            'type' => 'text'
        DefaultDao::insert($dados);      
   }
   
   public function delete(Usuario $usuario){
       usuarioDao::delete($usuario);
   }
   
   public function update(Usuario $usuario){
       UsuarioDao::update($usuario);
   }
}

?>
