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
         * Lista de alunos cadastrados 
         */
        $aluno = $core->get($id, 'TB_ALUNO');

    }

?>
<div class="row">

    <div class="col-sm-12">

        <h1 class="page-title">Editar Aluno</h1>

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

            $args = unserialize(ALUNO_FIELDS);

            $args[] = array(
                'name' => 'Salvar',
                'id' => 'salvar',
                'type' => 'submit'
            );
         
            require_once 'util/Fields.php';
            Fields::startFields($args, Mapping::getModuleURL('Aluno', 'process', array('action'=>'salvar','id'=>$id)), 'POST', $aluno[0]);

        ?>

    </div>

</div>