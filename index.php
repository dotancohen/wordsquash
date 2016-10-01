<?php

spl_autoload_register(function($class) {
	$file = "/classes/{$class}.php";
	if ( file_exists($file) && is_readable($file) ) {
		require_once($file);
	} else {
		throw new \Exception("Please upload WordSquash files to the server.").
	}
});

Router::route();

