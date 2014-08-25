<?php

/**
 * Pasta root
 */
define('__ROOT__', dirname(dirname(dirname(__FILE__)))); 
define("__MODULE_PATH__", __ROOT__."/admin/module");

/**
 * URLS
 */
define("__ADMIN__", "http://localhost/sistema-auxilio-ifes/admin");

// Start mapping
require_once __ROOT__.'/admin/util/mapping.php';

// Start modules
require_once __ROOT__.'/admin/util/Module.php';
$mod_aluno 	 = new Module('Aluno');
$mod_turma 	 = new Module('Turma');
$mod_curso 	 = new Module('Curso');
$mod_auxilio = new Module('Auxilio');