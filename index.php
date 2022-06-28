<?php

require 'autoload.php';

$view = new \App\View();

$view->articles = \App\Models\Article::findAll();

$view['foo'] = 'bar';
$view['baz'] = 42;

echo count($view);

echo $view->render('templates\index.php');


