<?php

echo "<h2>Auto function in PHP </h2>";
// require "classes/first.php";
// require "classes/second.php";


function load_model($class_name)
{
	$path_to_file = 'models/' . $class_name . '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}


spl_autoload_register('load_model');


// $test = new first();

// $test1 = new second();
