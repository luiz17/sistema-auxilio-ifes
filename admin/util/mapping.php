<?php

Class Mapping {

	/**
	 * requireModuleURL Faz o require do módulo e das suas opções
	 * @param  string $module_name Nome do módulo
	 * @param  string $option      Opção do módulo
	 */
	public static function requireModulePath($module_name, $option = null) {

		if($option != null) {
			$option = '-'.$option;
		}

		require __MODULE_PATH__.'/'.$module_name.'/'.strtolower($module_name).$option.'.php';
	
	}

	/**
	 * getModuleURL Gera uma url relacionada ao módulo
	 * @param  string $module_name Nome do módulo
	 * @param  string $option      Opção do módulo
	 * @param  array  $args        Array contendo os parâmetros da URL
	 * @return string              URL
	 */
	public static function getModuleURL($module_name, $option = null, $args = null) {

		// Parâmetros
		$param = null;

		if($args != null) {

			foreach ($args as $key => $value) {
				$param = "$param&$key=$value";
			}

			$param= ltrim($param,'&');

			$param = '?'.$param;
		}

		// Opção do módulo
		if($option != null) {

			if($option == "index") {

				if($param != null) {

					$param = ltrim($param,'?');
					$param = '&'.$param;

				}

				return __ADMIN__.'?page='.strtolower($module_name).$param;

			} else {
				$option = '-'.$option;
			}
		}
		
		$url = __ADMIN__.'/module/'.$module_name.'/'.strtolower($module_name).$option.'.php'.$param;

		return $url;
	}

}