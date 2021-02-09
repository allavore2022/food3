<?php
/** Create a food order form */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require autoload file
require_once('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {

    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define an order route
$f3->route('GET /order', function() {

    //Display a view
    $view = new Template();
    echo $view->render('views/form1.html');
});

//Define an order2 route
$f3->route('POST /order2', function() {

    //Add data from form1 to Session array
    //var_dump($_POST);
    if(isset($_POST['food'])) {
        $_SESSION['food'] = $_POST['food'];
    }
    if(isset($_POST['meal'])) {
        $_SESSION['meal'] = $_POST['meal'];
    }

    //Display a view
    $view = new Template();
    echo $view->render('views/form2.html');
});

//Define a summary route
$f3->route('POST /summary', function() {

    //echo "<p>POST:</p>";
    //var_dump($_POST);

    //echo "<p>SESSION:</p>";
    //var_dump($_SESSION);

    //Add data from form2 to Session array
    if(isset($_POST['conds'])) {
        $_SESSION['conds'] = implode(", ", $_POST['conds']);
    }

    //Display a view
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run Fat-Free
$f3->run();