<?php

/**
 * Inicializando core
 */
require_once __ROOT__.'/admin/core/Core.php';
$core = new Core();

/**
 * Lista cadastrados 
 */
$lista = $core->getAll('TB_AUXILIO');

?>
<div class="row">

    <div class="col-sm-6">

        <h1 class="page-title">Auxílio</h1>

    </div>

    <div class="col-sm-6">
    	<?php
			require 'util/breadcrumb.php';;
			$breadcrumb = new breadcrumb;
			echo $breadcrumb->show_breadcrumb();
		?>
    </div>

    <div class="col-sm-12">

        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $item): ?>
            <tr>
                <td><?= $item['auxilio_id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td>
                    <a href="<?= Mapping::getModuleURL('Auxilio', 'index', array('action'=>'editar' ,'id'=>$item['auxilio_id']) ) ?>">Editar</a>
                    <a href="<?= Mapping::getModuleURL('Auxilio', 'process', array('action'=>'deletar' ,'id'=>$item['auxilio_id']) ) ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

    </div>

</div>