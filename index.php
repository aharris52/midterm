<?php

// turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

//Start a session
session_start();

// create an instance of the base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function(){

    //echo '<h1>Welcome to my Midterm Page</h1>';
    $view = new Template();
    echo $view->render('views/home.html');
});


// survey route
$f3->route('GET|POST /survey', function($f3){

    $view = new Template();
    echo $view->render('views/survey.html');

});

// summary route
$f3->route('GET|POST /summary', function($f3){

    //echo '<h1>Welcome to my Midterm Page</h1>';
    $view = new Template();
    echo $view->render('views/summary.html');
    var_dump($_POST);
});

// run fat free
$f3->run();
