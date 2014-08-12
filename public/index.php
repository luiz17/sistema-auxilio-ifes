
<?php  include 'header.php' ?>

  <?php  include 'slide.php' ?>
<?php use Dao\DBConnect; ?>
  <section class="col-xs-12 content-main">

    <div class="jumbotron-main">

      <span>O <strong>IFES Campus Colatina</strong> oferece aos estudantes auxílios para ajudar na formação de novos profissionais!</span>

    </div> <!-- /.jumbotron-main -->

    <div class="row box-lista">
      
      <div class="col-xs-12 col-sm-6 box-group">
        
        <article class="media content-box">

          <a href="#">

            <div class="pull-left img-box icon transporte-icon"></div>

            <div class="media-body">

              <div class="title">

                <h2>
                    <?php/*
                        $consulta = $pdo->prepare("SELECT nome FROM parametro where id = :id;");
                        $consulta->bindParam(':id', $id);
                        $consulta->execute();
                        $linha = $consulta->fetch(PDO::FETCH_ASSOC);
                    */?>
                </h2>

              </div>

              <div class="description">
                 
                <p> 
                    <?php 
                    /*
                        $sql = "SELECT valor FROM parametro WHERE id = 1";
                        $query = mysql_query($sql);
                    */?>
                </p>

              </div>

            </div>

          </a>

        </article> <!-- /.content-box -->  

        <article class="media content-box">

          <a href="#">

            <div class="pull-left img-box icon monitoria-icon"></div>

            <div class="media-body">

              <div class="title">

                <h2>Nome</h2>

              </div>

              <div class="description">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, necessitatibus minima vero laudantium vel. Odit, quisquam sapiente perferendis iusto tempora ad pariatur eos repellendus nostrum deserunt molestias at voluptates ut?</p>

              </div>

            </div>

          </a>

        </article> <!-- /.content-box -->   

      </div> <!-- /.box-group -->

      <div class="col-xs-12 col-sm-6 box-group">
        
        <article class="media content-box">

          <a href="#">

            <div class="pull-left img-box icon alimentacao-icon"></div>

            <div class="media-body">

              <div class="title">

                <h2>Nome</h2>

              </div>

              <div class="description">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, necessitatibus minima vero laudantium vel. Odit, quisquam sapiente perferendis iusto tempora ad pariatur eos repellendus nostrum deserunt molestias at voluptates ut?</p>

              </div>

            </div>

          </a>

        </article> <!-- /.content-box -->   

        <article class="media content-box">

          <a href="#">

            <div class="pull-left img-box icon moradia-icon"></div>

            <div class="media-body">

              <div class="title">

                <h2>Nome</h2>

              </div>

              <div class="description">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, necessitatibus minima vero laudantium vel. Odit, quisquam sapiente perferendis iusto tempora ad pariatur eos repellendus nostrum deserunt molestias at voluptates ut?</p>

              </div>

            </div>

          </a>

        </article> <!-- /.content-box -->   

      </div> <!-- /.box-group -->              

    </div> <!-- /.box-lista -->

    <div class="sign-up">
      
      <div class="btn-sign-up">
        <a href="#" class="btn btn-default btn-lg sty-green">FAÇA O SEU CADASTRO</a>
      </div>

      <div class="info">

        <p><div class="mini-icon email-icon"></div>admin@ifes.edu.br</p>

      </div>
      
      <div class="info">

        <p><div class="mini-icon phone-icon"></div>(27) 3711-8576 ou (27) 3711-8576</p>

      </div>
      
      <a href="#" class="info">

        <p><div class="mini-icon help-icon"></div>Perguntas mais frequentes</p>

      </a>

    </div> <!-- /.sign-up -->

  </section> <!-- /.content -->

<?php  include 'footer.php' ?>