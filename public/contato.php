<?php  include 'header.php' ?>

    <section class="col-xs-12 content-main">

    	<?php  include 'breadcrumbs.php' ?>

		<h1 class="page-title">Entre em contato</h1>

		<form role="form">

			<div class="form-group col-sm-6 col-lg-4">
				<label for="exampleInputEmail1">Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Digite o seu nome completo">
			</div>

			<div class="form-group col-sm-6 col-lg-4">
				<label for="exampleInputEmail1">E-mail</label>
				<input type="text" class="form-control" name="email" placeholder="Digite o seu email">
			</div>

			<div class="form-group col-lg-12 clear">
				<label for="exampleInputEmail1">Mensagem</label>
				<textarea class="form-control" rows="7"></textarea>
			</div>

			<div class="form-group col-lg-12 txt_right">
				<button type="submit" class="btn btn-lg sty-green">Enviar contato</button>
			</div>


		</form>

	</section> <!-- /.content -->

<?php  include 'footer.php' ?>