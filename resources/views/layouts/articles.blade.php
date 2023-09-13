<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Articles</title>

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
            <a class="nav-link active" href="/articles">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/articles/create">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact</a>
        </li>
    </ul>

    <div class="mt-3">

        <h2 class="text-center text-dark mb-5 fw-semibold">The articles !</h2>

        <div class="row">
            @if ($articles)
                @foreach ($articles as $article)
                    <div class="col-sm-6">
                        @include('articles.index')
                    </div>
                @endforeach
            @else
                @include('articles.no-articles')
            @endif
        </div>

    </div>

</body>
</body>

</html>
