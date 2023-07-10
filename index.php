<?php

require 'router.php';

$router = new Router();


// for home page
$router->get('/','homePage');

// for redirecting - create database page
$router->POST('/addDbpage','addDbpage');

// for redirecting - add table page
$router->POST('/addTabblepage','addTabblepage');






// for creat a database
$router->POST('/createDatabase','createDatabase');



$router->routes($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);