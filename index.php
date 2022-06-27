<?php

require 'autoload.php';

$data = \App\Models\User::findAll();

var_dump($data);


