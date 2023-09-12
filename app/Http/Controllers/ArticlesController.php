<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ArticlesController extends Controller
{
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
        // Vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;

        $this->validate($request, [
            'title' => 'required | string',
            'body' => 'required | string',
            'user_id' => 'required | numeric | exists:users, id',
        ]);

        dd($request->all());
    }

}