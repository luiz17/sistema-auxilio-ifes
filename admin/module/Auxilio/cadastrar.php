<div class="row">

    <div class="col-sm-12">

        <h1 class="page-title">Cadastrar Auxílio</h1>

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

            $args = unserialize(AUXILIO_FIELDS);

            $args[] = array(
                'name' => 'Cadastrar',
                'id' => 'cadastrar',
                'type' => 'submit'
            );
         
            require_once 'util/Fields.php';
            Fields::startFields($args, Mapping::getModuleURL('Auxilio', 'process', array( 'action' => 'cadastrar') ), 'POST');

        ?>

    </div>

</div>