<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    //
    public function articles(Article $article)
    {

        $articles = Article::all();
        return view('layouts.articles', compact('articles'));

    }
    public function show(Article $article)
    {

        return view('articles.show', compact('article'));

    }

}