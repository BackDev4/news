<?php

require 'autoload.php';

$article = new \App\Models\Article();

$article->title = 'Загаловок новости';
$article->content = 'Что-то';

$article->insert();

var_dump($article);


