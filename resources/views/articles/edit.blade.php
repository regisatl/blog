<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

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
            <a class="nav-link active" href="/articles/create">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact</a>
        </li>
    </ul>

    <div class="mt-3">

        <h2 class="text-center text-dark mb-5 fw-semibold">Edit article</h2>

        <form action="/articles/{{ $article->id }}/edit" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="title" placeholder="Enter the title" name="title"
                    value="{{ old('title', isset($article->title) ? $article->title : null) }}">
                <label for="title">Entez the title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="description" placeholder="Enter the description" name="body"> {{ old('body', isset($article->body) ? $article->body : null) }} </textarea>
                <label for="description">Entez the description</label>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control form-control-lg" id="image" name="image">
                <label class="input-group-text" for="image">Upload</label>
            </div>
            <button type="submit" class="btn btn-warning bg-gradient py-3 w-100 fw-bold">Save changed</button>
        </form>
    </div>
</body>

</html>
