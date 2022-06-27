<?php

require 'autoload.php';

$data = \App\Models\Article::findAll();

var_dump($data);


