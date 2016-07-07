<?php
require 'vendor/pug-php/pug/src/Pug/Pug.php';
require 'config.php';
use \Pug\Pug as Pug;

class View {
	public function __construct($obj) {
	    $this->path = $obj['path'];
        $pug = new Pug(array(
		    'prettyprint' => true,
		    'extension' => '.pug',
		    'cache' => '../cache/'
		));
    	$this->pug = $pug;
	}

	public function render($file) {
		$filepath = $this->path . $file;
		echo $this->pug->render($filepath);
	}

	public function get($file) {
		$filepath = $this->path . $file;
		return $this->pug->render($filepath);
	}
}