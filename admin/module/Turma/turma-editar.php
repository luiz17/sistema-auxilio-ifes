<?php 

    // ID
    if( !empty($_GET['id']) ) {
        
        $id = $_GET['id'];

        /**
         * Inicializando core
         */
        require_once __ROOT__.'/admin/core/Core.php';
        $core = new Core();

        /**
         * Lista de turmas cadastrados 
         */
        $turma = $core->get($id, 'TB_TURMA');

    }

?>
<div class="row">

    <div class="col-sm-12">

        <h1 class="page-title">Editar Turma</h1>

    </div>

    <div class="col-sm-6">
    	<?php
			require 'util/breadcrumb.php';;
			$breadcrumb = new breadcrumb;
			echo $breadcrumb->show_breadcrumb();
		?>
    </div>

</div>

<div class="row">
    
    <div class="com-sm-12">
        
         <?php 

            $args = unserialize(TURMA_FIELDS);

            $args[] = array(
                'name' => 'Salvar',
                'id' => 'salvar',
                'type' => 'submit'
            );
         
            require_once 'util/Fields.php';
            Fields::startFields($args, Mapping::getModuleURL('Turma', 'process', array('action'=>'salvar','id'=>$id)), 'POST', $turma[0]);

        ?>

    </div>

</div>