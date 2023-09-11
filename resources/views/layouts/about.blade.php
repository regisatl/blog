<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About</title>

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

    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/about-us">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/articles">Articles</a>
        </li>
    </ul>

    <div class="mt-5">
        <h2 class="text-center text-dark mb-5">A propos de nous !</h2>
        <div class="d-flex justify-content-between">
            <div class="card col-sm-4 px-1 mx-1 text-center">
                <h3 class="card-header mb-3">A propos 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </div>
            <div class="card col-sm-4 px-1 mx-1 text-center">
                <h3 class="card-header mb-3">A propos 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </div>
            <div class="card col-sm-4 px-1 mx-1 text-center">
                <h3 class="card-header mb-3">A propos 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </div>
        </div>
    </div>

</body>
</body>

</html>
