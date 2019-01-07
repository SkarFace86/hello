<?php
/**
 * Created by PhpStorm.
 * User: Brandon Skar
 * Date: 1/7/2019
 * Time: 11:20 AM
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require fat-free
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo '<h1>Hello world!</h1>';
});

//Run fat-free
$f3->run();
