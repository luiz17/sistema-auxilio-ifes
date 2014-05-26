<?php require_once 'gui/header.php'; 

    $args = array();
                    
    $args[] = array(
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text'
    );

    $args[] = array(
        'name' => 'Cadastrar',
        'id' => 'cadastrar',
        'type' => 'submit'
    );
                
?>

<main>

    <div class="wrapper page" id="page">

        <?php include('gui/menu.phtml') ?>

        <div class="content" id="content">

            <div class="row">

                <div class="col-sm-6">

                    <h1 class="page-title">Aluno</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Library</a></li>
                        <li class="active">Data</li>
                    </ol>

                </div>

                <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, quaerat eligendi ad ipsum sit culpa porro fuga atque delectus nostrum sapiente cupiditate quidem praesentium molestiae labore laboriosam voluptatum iste? Quos?</div>

                <div class="col-sm-12">
                    
                    <?php Util\Fields::startFields($args, 'view/AlunoProcess.php?action=c', 'POST') ?>

                </div>
                
            </div>

            <?php require_once 'gui/footer.php'; ?>   

        </div>

    </div>

</main>

<?php require_once 'gui/endpage.phtml'; ?>