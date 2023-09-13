<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        * {
            font-family: Poppins;
        }
    </style>
</head>

<body class="container mt-3">

    <ul class="nav nav-tabs nav-justified mt-3 mb-5 fw-bold">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about-us">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/articles">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/articles/create">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact</a>
        </li>
    </ul>

    <div class="mt-3">

        <h2 class="text-center text-dark mb-3 fw-semibold">Edit article</h2>

        <form action="/article/{{ $article->id }}/edit" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @include('profile.partials.edit-form')
        </form>

        <form action="/article/{{ $article->id }}/delete" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger py-3 shadow-lg bg-gradient w-100">Delete article</button>
        </form>

    </div>

</body>

</html>
