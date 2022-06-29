<?php

require '../App/autoload.php';

$controller = $_GET['controller'] ?? 'Index';
$class =  '\App\Controllers\\' . $controller;

$controller = new $class;
$controller();

