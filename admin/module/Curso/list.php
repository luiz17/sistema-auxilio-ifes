<?php

/**
 * Inicializando core
 */
require_once __ROOT__.'/admin/core/Core.php';
$core = new Core();

/**
 * Lista de Cursos cadastrados 
 */
$lista_Cursos = $core->getAll('TB_CURSO');

?>
<div class="row">

    <div class="col-sm-6">

        <h1 class="page-title">Curso</h1>

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
            <?php foreach ($lista_Cursos as $Curso): ?>
            <tr>
                <td><?= $Curso['curso_id'] ?></td>
                <td><?= $Curso['nome'] ?></td>
                <td>
                    <a href="<?= Mapping::getModuleURL('Curso', 'index', array('action'=>'editar' ,'id'=>$Curso['curso_id']) ) ?>">Editar</a>
                    <a href="<?= Mapping::getModuleURL('Curso', 'process', array('action'=>'deletar' ,'id'=>$Curso['curso_id']) ) ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

    </div>

</div>