<?php  include 'header.php' ?>

  <section class="col-xs-12 content content-main">

    <?php  include 'breadcrumbs.php' ?>

    <h1 class="page-title">User interfaces</h1>

      <div class="page-box">

        <h2>Breadcrumbs</h2>

        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Library</a></li>
          <li class="active">Data</li>
        </ol>

        <pre><span>&lt;ol class="breadcrumb"&gt;
  &lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
  &lt;li class="active"&gt;Data&lt;/li&gt;
&lt;/ol&gt;</span></pre>

      </div> <!-- /.page-box -->

      <div class="page-box">

        <h2>Pagination</h2>

        <!-- Pagination -->
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>

        <pre><span>&lt;!-- Pagination --&gt;
&lt;ul class="pagination"&gt;
  &lt;li&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</span></pre>

        <ul class="pagination pagination-lg">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>

        <pre><span>&lt;!-- Pagination Large--&gt;
&lt;ul class="pagination-lg"&gt;
  &lt;li&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</span></pre>

        <ul class="pagination pagination-sm">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="disabled"><a href="#">3</a></li>
          <li class="active"><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>

        <pre><span>&lt;!-- Pagination Small--&gt;
&lt;ul class="pagination-sm"&gt;
  &lt;li&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li class="disabled"&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</span></pre>

      </div> <!-- /.page-box -->

      <div class="page-box">

        <h2>Buttons - Options</h2>

        <button type="button" class="btn btn-default sty-default">Default Button</button>

        <button type="button" class="btn btn-default sty-yellow">Yellow Button</button>

        <button type="button" class="btn btn-default sty-red">Red Button</button>

        <button type="button" class="btn btn-default sty-green">Green Button</button>

        <button type="button" class="btn btn-default sty-pea-green">Pea Green Button</button>

        <pre><span>&lt;!-- Default Button --&gt;
&lt;button type="button" class="btn btn-default sty-default"&gt;Default Button&lt;/button&gt;</span>

<span>&lt;!-- Yellow Button --&gt;
&lt;button type="button" class="btn btn-default sty-yellow"&gt;Yellow Button&lt;/button&gt;</span>

<span>&lt;!-- Red Button --&gt;
&lt;button type="button" class="btn btn-default sty-red"&gt;Red Button&lt;/button&gt;</span>

<span>&lt;!-- Green Button --&gt;
&lt;button type="button" class="btn btn-default sty-green"&gt;Green Button&lt;/button&gt;</span>

<span>&lt;!-- Pea Green Button --&gt;
&lt;button type="button" class="btn btn-default sty-pea-green"&gt;Pea Green Button&lt;/button&gt;</span></pre>

      </div> <!-- /.page-box -->

      <div class="page-box">

      <h2>Buttons - Sizes</h2>

        <!-- Large Buttons -->
        <p>
          <button type="button" class="btn btn-lg btn-default sty-default">Large button</button>

          <button type="button" class="btn btn-lg btn-default sty-yellow">Large button</button>

          <button type="button" class="btn btn-lg btn-default sty-red">Large button</button>

          <button type="button" class="btn btn-lg btn-default sty-green">Large button</button>

          <button type="button" class="btn btn-lg btn-default sty-pea-green">Large button</button>

        </p>

        <pre><span>&lt;button type="button" class="btn btn-lg btn-default sty-default"&gt;Large button&lt;/button&gt;</span></pre>

        <!--  Default Buttons  -->
        <p>
          <button type="button" class="btn btn-default sty-default">Default button</button>

          <button type="button" class="btn btn-default sty-yellow">Default button</button>

          <button type="button" class="btn btn-default sty-red">Default button</button>

          <button type="button" class="btn btn-default sty-green">Default button</button>

          <button type="button" class="btn btn-lg btn-default sty-pea-green">Default button</button>

        </p>

        <pre><span>&lt;button type="button" class="btn btn-default sty-default"&gt;Default button&lt;/button&gt;</span></pre>


        <!-- Small Button -->
        <p>
          <button type="button" class="btn btn-sm btn-default sty-default">Small button</button>

          <button type="button" class="btn btn-sm btn-default sty-yellow">Small button</button>

          <button type="button" class="btn btn-sm btn-default sty-red">Small button</button>

          <button type="button" class="btn btn-sm btn-default sty-green">Small button</button>

          <button type="button" class="btn btn-sm btn-default sty-pea-green">Small button</button>

        </p>

        <pre><span>&lt;button type="button" class="btn btn-sm btn-default sty-default"&gt;Small button&lt;/button&gt;</span></pre>


        <!-- Extra Small button -->
        <p>
          <button type="button" class="btn btn-xs btn-default sty-default">Extra Small button</button>

          <button type="button" class="btn btn-xs btn-default sty-yellow">Extra Small button</button>

          <button type="button" class="btn btn-xs btn-default sty-red">Extra Small button</button>

          <button type="button" class="btn btn-xs btn-default sty-green">Extra Small button</button>

          <button type="button" class="btn btn-xs btn-default sty-pea-green">Extra Small button</button>

        </p>

        <pre><span>&lt;button type="button" class="btn btn-xs btn-default sty-default"&gt;Extra Small button&lt;/button&gt;</span></pre>

      </div> <!-- /.page-box -->

      <div class="page-box">

        <div class="page-box">

          <h2>Caixas de conteúdo</h2>

          <div class="media content-box">

            <a href="#">

              <div class="pull-left img-box icon moradia-icon"></div>

              <div class="media-body">

                <div class="title">

                  <h2>Título</h2>

                </div>

                <div class="description">

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, necessitatibus minima vero laudantium vel. Odit, quisquam sapiente perferendis iusto tempora ad pariatur eos repellendus nostrum deserunt molestias at voluptates ut?</p>

                </div>

              </div>

            </a>

          </div> <!-- /.content-box -->

          <pre>&lt;div class="media content-box"&gt;

  &lt;a href="#"&gt;

    &lt;div class="pull-left img-box icon moradia-icon"&gt;&lt;/div&gt;

    &lt;div class="media-body"&gt;

      &lt;div class="title"&gt;

        &lt;h2&gt;Título&lt;/h2&gt;

      &lt;/div&gt;

      &lt;div class="description"&gt;

        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, necessitatibus minima vero laudantium vel. Odit, quisquam sapiente perferendis iusto tempora ad pariatur eos repellendus nostrum deserunt molestias at voluptates ut?&lt;/p&gt;

      &lt;/div&gt;

    &lt;/div&gt;

  &lt;/a&gt;

&lt;/div&gt;</pre>

      </div> <!-- /.page-box -->

      <div class="col-xs-12 col-sm-6 box-group">
                      
        <div class="media content-box">

          <a href="#">

            <div class="pull-left img-box icon transporte-icon"></div>

            <div class="media-body">

              <div class="title">

                <h2>Nome</h2>

              </div>

              <div class="description">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, necessitatibus minima vero laudantium vel. Odit, quisquam sapiente perferendis iusto tempora ad pariatur eos repellendus nostrum deserunt molestias at voluptates ut?</p>

              </div>

            </div>

          </a>

        </div> <!-- /.content-box -->  

        <div class="media content-box">

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

        </div> <!-- /.content-box -->   

      </div> <!-- /.box-group -->

      <div class="clear"></div>

      <pre>&lt;div class="col-xs-12 col-sm-6 box-group"&gt; 

  &lt;div class="media content-box"&gt;
  [...]
  &lt;/div&gt; &lt;!-- /.content-box --&gt;  

  &lt;div class="media content-box"&gt;
  [...]
  &lt;/div&gt; &lt;!-- /.content-box --&gt;   

&lt;/div&gt; &lt;!-- /.box-group --&gt;</pre>

    </div> <!-- /.page-box -->

  </section> <!-- /.content -->

<?php  include 'footer.php' ?>