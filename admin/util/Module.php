<?php

Class Module {

	private $module_name;

	function __construct($module_name) {

		$this->module_name = $module_name;
		
		$this->startModule();
	}

	public function startModule() {

		// Config
        $config = require_once(__MODULE_PATH__."/$this->module_name/config.php");
        define (strtoupper($this->module_name)."_FIELDS", serialize ( $config ));

    }
}