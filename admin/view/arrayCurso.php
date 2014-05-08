<?php 
	$fields = array();
	 
		$fields[] = array(
					"title" => "Nome",
					"id"	=> "nome",
					"type" 	=> "text"
		);

		$fields[] = array(
					"title" => "Período",
					"id"	=> "periodo",
					"type" 	=> "text"
		);
	 
		echo '<pre>';
		print_r($fields);
		echo '</pre>';

 ?>