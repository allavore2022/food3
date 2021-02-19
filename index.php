<?php
/** Create a food order form */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require files
require_once('vendor/autoload.php');

//Start a session
session_start();

//Instantiate my classes
$f3 = Base::instance();
$validator = new Validate();
$dataLayer = new DataLayer();
$order = new Order();
$controller = new Controller($f3);

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {

    global $controller;
    $controller->home();
});

//Define an order route
$f3->route('GET|POST /order', function($f3) {

    global $controller;
    $controller->order();
});

//Define an order2 route
$f3->route('GET|POST /order2', function($f3) {

    global $controller;
    $controller->order2();
});

//Define a summary route
$f3->route('GET /summary', function() {

    global $controller;
    $controller->summary();
});

//Run Fat-Free
$f3->run();