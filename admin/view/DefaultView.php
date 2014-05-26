<?php

namespace View;

class DefaultView {

        /**
         * Theme - pasta local do tema ativo. 
         * @var string 
         */
	private static $theme = THEME_PATH;

        /**
         * Imprime o Head da página
         */
	public static function getHead() {

		echo '<!doctype html>
		<html lang="pt-br">
		    <head>

		        <meta charset="UTF-8">
		        <title>Painel</title>
		        <meta name="description" content="Painel do sistema">
		        <meta name="viewport" content="width=device-width, initial-scale=1">

		        <!-- Icons -->
		        <link rel="apple-touch-icon" href="'.DefaultView::$theme.'img/apple-touch-icon.png">
		        <link rel="shortcut icon" href="'.DefaultView::$theme.'img/favicon.ico">

		        <!-- Style -->
		        <link rel="stylesheet" href="'.DefaultView::$theme.'css/style.min.css">

		        <!-- Modernizr -->
		        <script src="'.DefaultView::$theme.'lib/js/modernizr.js"></script>

		    </head>
		    <body>';

	}

        /**
         * Imprime o final da página
         */
	public static function getFooter() {
		echo '<script src="'.DefaultView::$theme.'js/main.min.js"></script>
		    </body>
		</html>';
	}

}

?>
