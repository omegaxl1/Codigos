<?php

namespace App\Controllers;

use App\Models\Article;
use App\Libraries\View;

class ArticleController
{
    public function index ()
    {
        $articles = Article::all();

        View::render('articles/index', compact('articles'));
    }
    public function show()
    {
        $id = $_GET['id'] ?? '';
        $article = Article::find($id);

        if (!empty($article))
        {
            View::render('articles/show', compact('article'));
        }
        else
        {
            $this->index();
        }
    }
}
