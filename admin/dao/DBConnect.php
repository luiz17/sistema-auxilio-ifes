<?php

	Class DBConnect {

		public static function openConnect() {

			try{
			    // Faz conexão com banco de daddos
			    $pdo = new PDO("mysql:host=127.0.0.1;dbname=sistema_auxilio;", "root", "");

			} catch(PDOException $e){
			    // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
			    echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
			    die;
			}
		}
	}

?>