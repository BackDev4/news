<?php

require '../App/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);
$controller = $parts[1] ? ucfirst($parts[1]) : 'Index';

try {

    $controller = $_GET['controller'] ?? 'Index';
    $class = '\App\Controllers\\' . $controller;
    $controller = new $class;
    $controller();

} catch (\App\DbExeption $error) {
    echo 'Ошибка БД при выполнении запроса "' . $error->getQuery() . '":' . $error->getMessage();
} catch (\App\Errors $errors) {
    foreach ($errors->all() as $error){
        echo $errors->getMessage();
        echo '<br>';
    }
}

