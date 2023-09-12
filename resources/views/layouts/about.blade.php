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

    <ul class="nav nav-tabs nav-justified mt-3 fw-bold">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/about-us">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/articles">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/articles/create">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact</a>
        </li>
    </ul>

    <div class="mt-5">
        <h2 class="text-center text-dark mb-5">About us !</h2>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some example text. Some example text. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste vitae ea, assumenda beatae nobis obcaecati aut voluptate expedita ducimus, cumque voluptas, incidunt excepturi! Doloremque eius dolore placeat, eveniet recusandae repellat?</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

</body>
</body>

</html>
