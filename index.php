<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-Free framework (f3)
$f3 = Base::instance();  //instance method

//Define a default route-invoking route method
$f3->route('GET /', function() {
    echo "Pet Home";

});

//run Fat-Free
$f3->run();