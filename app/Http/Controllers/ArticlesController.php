<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    //
    public function articles(Article $article)
    {

        $articles = Article::all()->sortByDesc('created_at');

        return view('layouts.articles', compact('articles'));

    }
    public function show($id)
    {

        $article = Article::with([
            'comments' => function ($query) {
                $query->with('user');
            }
        ])->findOrFail($id);

        return view('articles.show', compact('article'));

    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        Article::create($request->all());
        return redirect('/aritcles')->with(['success_message' => 'L\'article a été crée avec succès ! ']);


    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // vérification des permissions plus tard
        // validation
        $article->update($request->all());

    }

    public function delete(Article $article)
    {
        // Vérification des permissions plus tard
        $article->delete();

    }





}