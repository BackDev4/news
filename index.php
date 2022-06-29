<?php

require 'autoload.php';

$view= new \App\View();
$view->assign('articles', \App\Models\Article::findAll() );
$view->display('templates\index.php');


