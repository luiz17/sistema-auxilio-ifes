<?php

/**
 * Inicializando core
 */
require_once __ROOT__.'/admin/core/Core.php';
$core = new Core();

/**
 * Lista de alunos cadastrados 
 */
$lista_alunos = $core->getAll('TB_ALUNO');

?>
<div class="row">

    <div class="col-sm-6">

        <h1 class="page-title">Aluno</h1>

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
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista_alunos as $aluno): ?>
            <tr>
                <td><?= $aluno['aluno_id'] ?></td>
                <td><?= $aluno['matricula'] ?></td>
                <td><?= $aluno['nome'] ?></td>
                <td>
                    <a href="<?= Mapping::getModuleURL('Aluno', 'index', array('action'=>'editar' ,'id'=>$aluno['aluno_id']) ) ?>">Editar</a>
                    <a href="<?= Mapping::getModuleURL('Aluno', 'process', array('action'=>'deletar' ,'id'=>$aluno['aluno_id']) ) ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

    </div>

</div>