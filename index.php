<?php

spl_autoload_register(function($class) {
	$file = "/classes/{$class}.php";
	if ( file_exists($file) && is_readable($file) ) {
		require_once($file);
	}
});

Router::route();

