<?php
require '../libs/Smarty.class.php';
class SM {

	protected static $instance;

	protected function __construct() {}

	public static function getInstance() {

		if(empty(self::$instance)) {
        
       		try {
				
				self::$instance = new Smarty;
				self::$instance->template_dir = '../templates/';
				self::$instance->compile_dir = '../templates_c/';
				self::$instance->config_dir = '../configs/';
				self::$instance->cache_dir = '../cache/';

			}catch(Exception $e) {
				echo $e->getMessage();
			}
			

		}

		return self::$instance;
	}

	
}

?>