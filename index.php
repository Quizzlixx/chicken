<?php
/**
 * Kerrie Low
 * 1.15.2020
 * Full Stack Software Development
 * http://www.klow.greenriverdev.com/328/chicken/
 * Modified: 2.10.2020
 * Controller Classes
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// instantiate F3
$f3 = Base::instance();

// instantiate a controller object
$controller = new ChickenController($f3);

// define a default route
$f3->route('GET /', function() {
    // Better to use when you need it multiple times
//    global $controller;
//    $controller->home();

    // better to use when you only need it once
    $GLOBALS['controller']->home();
});

$f3->route('GET /eggs', function() {
    $GLOBALS['controller']->eggs();
});

// run f3
$f3->run();