<?php

namespace App\Controllers;

use App\Controller;


class Article extends Controller
{

//    protected function access()
//    {
//        return isset($_GET['name']) && 'Vasya' == $_GET['name'];
//    }



    protected function handle()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        echo $this->view->render(__DIR__ . '/../../templates/article.php');
    }

}
