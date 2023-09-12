@extends('layouts.master');

@section('title')
    Editer l'article {{ $article->title }}
@endsection

@section('content')
    <form action="/articles/{{ $article->id }}/edit" method="post" enctype="multipart/form-data">
        @include('profile.partials.article-form');
        <button type="submit" class="btn btn-warning bg-gradient py-2 w-100">Save</button>
    </form>
@endsection
