<?php

    // Configurações
    require_once 'util/config.php';

?>
<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <title>Painel</title>
        <meta name="description" content="Painel do sistema">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link rel="apple-touch-icon" href="skin/img/apple-touch-icon.png">
        <link rel="shortcut icon" href="skin/img/favicon.ico">

        <!-- Style -->
        <link rel="stylesheet" href="skin/css/style.min.css">

        <script type="text/javascript" src="skin/js/lib/modernizr.js"></script>

    </head>
    <body>

    <?php require_once 'include/header.phtml'; ?>

    <main>

        <div class="wrapper page" id="page">

            <?php require_once 'include/menu.phtml'; ?>

            <div class="content" id="content">