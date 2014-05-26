<?php require_once 'gui/header.php'; ?>

<main>

    <div class="wrapper page" id="page">

        <?php include('gui/menu.phtml') ?>

        <div class="content" id="content">

            <div class="row">

                <div class="col-sm-6">

                    <h1 class="page-title">Interfaces</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Library</a></li>
                        <li class="active">Data</li>
                    </ol>

                </div>

            </div>

            <?php for ($i = 0; $i < 3; $i++) { ?>

                <div class="row">

                    <div class="col-sm-6 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A reiciendis officia temporibus sit veniam veritatis corporis quibusdam illum nam nesciunt. Tempora, atque nesciunt iste sint laborum ex quis culpa ea.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, odio, assumenda amet id magnam perspiciatis ratione ducimus voluptate quos quam nostrum qui cum dignissimos ullam natus laudantium animi commodi eum.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, at, voluptatem, nam, consectetur eos earum ea quas sequi eum magni obcaecati veritatis id debitis consequatur nobis ipsum libero distinctio quo.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vitae, neque totam placeat quisquam recusandae dolorem ducimus rem nesciunt iusto debitis quos accusamus cum dolorum fuga beatae nobis exercitationem molestias.
                            </div>
                        </div>
                    </div>

                </div>

            <?php } ?>

            <?php require_once 'gui/footer.php'; ?>   

        </div>

    </div>

</main>

<?php require_once 'gui/endpage.phtml'; ?>