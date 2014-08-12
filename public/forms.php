<?php  include 'header.php' ?>

  <section class="col-xs-12 content-main">

  	<?php  include 'breadcrumbs.php' ?>

    <h1 class="page-title">Formulários</h1>

    <div class="page-box">

		<h2>Formulário de exemplo</h2>

		<form role="form">

			<div class="form-group">
				<label for="exampleInputEmail1">Endereço de e-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>

			<div class="form-group">
				<label for="exampleInputFile">Enviar arquivo</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Exemplo de texto.</p>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox"> Check me out
				</label>
			</div>

			<button type="submit" class="btn btn-default">Enviar</button>

		</form>

		<pre><span>&lt;form role="form"&gt;

  &lt;div class="form-group"&gt;
	&lt;label for="exampleInputEmail1"&gt;Endereço de e-mail&lt;/label&gt;
	&lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"&gt;
  &lt;/div&gt;

  &lt;div class="form-group"&gt;
	&lt;label for="exampleInputPassword1"&gt;Senha&lt;/label&gt;
  	&lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
  &lt;/div&gt;

  &lt;div class="form-group"&gt;
	&lt;label for="exampleInputFile"&gt;Enviar arquivo&lt;/label&gt;
	  &lt;input type="file" id="exampleInputFile"&gt;
	&lt;p class="help-block"&gt;Exemplo de texto.&lt;/p&gt;
  &lt;/div&gt;

  &lt;div class="checkbox"&gt;
	&lt;label&gt;
	  &lt;input type="checkbox"&gt; Check me out
	&lt;/label&gt;
  &lt;/div&gt;

  &lt;button type="submit" class="btn btn-default"&gt;Enviar&lt;/button&gt;

&lt;/form&gt;</span></pre>

	</div> <!-- /.page-box -->

	<div class="page-box">

		<h2>Inputs</h2>

		<input type="text" class="form-control" placeholder="Text input">

		<pre>&lt;input type="text" class="form-control" placeholder="Text input"&gt;</pre>

	</div> <!-- /.page-box -->

	<div class="page-box">

		<h2>Textarea</h2>

		<textarea class="form-control" rows="3"></textarea>

		<pre>&lt;textarea class="form-control" rows="3"&gt;&lt;/textarea&gt;</pre>

		<h2>Checkboxes and radios</h2>

		<div class="checkbox">
		  <label>
		    <input type="checkbox" value="">
		    Option one is this and that&mdash;be sure to include why it's great
		  </label>
		</div>

		<div class="radio">
		  <label>
		    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
		    Option one is this and that&mdash;be sure to include why it's great
		  </label>
		</div>

		<div class="radio">
		  <label>
		    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
		    Option two can be something else and selecting it will deselect option one
		  </label>
		</div>

		<pre><span>&lt;div class="checkbox"&gt;
  &lt;label&gt;
    &lt;input type="checkbox" value=""&gt;
    Option one is this and that&mdash;be sure to include why it's great
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="radio"&gt;
  &lt;label&gt;
    &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
    Option one is this and that&mdash;be sure to include why it's great
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="radio"&gt;
  &lt;label&gt;
    &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
    Option two can be something else and selecting it will deselect option one
  &lt;/label&gt;
&lt;/div&gt;</span></pre>

	</div> <!-- /.page-box -->

	<div class="page-box">

		<h2>Inline checkboxes</h2>
		
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
		</label>

		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
		</label>

		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
		</label>

		<pre><span>&lt;label class="checkbox-inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
&lt;/label&gt;

&lt;label class="checkbox-inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
&lt;/label&gt;

&lt;label class="checkbox-inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
&lt;/label&gt;</span></pre>

	</div> <!-- /.page-box -->

	<div class="page-box">

		<h2>Selects</h2>

		<p>
			<select class="form-control">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
		</p>

		<p>
			<select multiple class="form-control">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
		</p>

		<pre><span>&lt;select class="form-control"&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;

&lt;select multiple class="form-control"&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;</span></pre>

	</div> <!-- /.page-box -->

	</section> <!-- /.content -->

<?php  include 'footer.php' ?>