<?php


namespace App\Controllers;

use App\Controller;
use App\View;
use App\Models\Article;

class Index extends Controller
{

    protected function handle()
    {

        $this->view->articles = \App\Models\Article::findAll();
        echo $this->view->render('../templates/index.php');

    }
}
