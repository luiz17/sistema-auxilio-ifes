<?php

/**
 * Inicializando core
 */
require_once __ROOT__.'/admin/core/Core.php';
$core = new Core();

/**
 * Lista de turmas cadastrados 
 */
$lista_turmas = $core->getAll('TB_TURMA');

?>
<div class="row">

    <div class="col-sm-6">

        <h1 class="page-title">Turma</h1>

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
                <th>Ano</th>
                <th>Curso</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista_turmas as $turma): ?>
            <tr>
                <td><?= $turma['turma_id'] ?></td>
                <td><?= $turma['nome'] ?></td>
                <td><?= $turma['ano'] ?></td>
                <td><?= $turma['curso_id'] ?></td>
                <td>
                    <a href="<?= Mapping::getModuleURL('Turma', 'index', array('action'=>'editar' ,'id'=>$turma['turma_id']) ) ?>">Editar</a>
                    <a href="<?= Mapping::getModuleURL('Turma', 'process', array('action'=>'deletar' ,'id'=>$turma['turma_id']) ) ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

    </div>

</div>