<?php


spl_autoload_register();

//$DOCUMENT_ROOT="../";
//function loadModel($class) {
 //$path = $DOCUMENT_ROOT . '/models/';
 //require_once $path . $class .'.php';
//}

//function loadView($class) {
 //$path = $DOCUMENT_ROOT . '/views/';
 //require_once $path . $class .'.php';
//}

//spl_autoload_register('loadModel');
//spl_autoload_register('loadView');

$home = new classes\home();
echo $home->get() ." <br>";

$home = new views\home();
echo $home->get()."<br>";

$home = new models\home();
echo $home->get()."<br>";

$all = new classes\all();
echo $all->get()."<br>";

$all = new views\all();
echo $all->get()."<br>";

$all = new models\all();
echo $all->get();

/*Output
classes/home.php
views/home.php
models/home.php
classes/all.php
views/all.php
models/all.php*/
