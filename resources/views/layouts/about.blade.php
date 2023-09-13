<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Black">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/79fa04224e.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        body {
            font-family: Poppins;
        }

        h2 {
            font-family: 'Archivo Black';
        }
    </style>
</head>

<body class="container mt-3">

    <ul class="nav nav-tabs nav-justified mt-3 fw-bold">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-sign"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in"
                        style="font-size: 1.5rem"></span></a>
            </li>
        @endguest

        @auth
            <li class="nav-item">
                <a class="nav-link active" href="/" title="home"><span class="fas fa-home"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about-us" title="About-us"><span class="fab fa-accessible-icon"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/articles" title="Articles"><span class="fas fa-blog"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/articles/create" title="Create article"><span class="fas fa-plus-square"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact-us" title="Contact"><span class="fas fa-mail-bulk"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}"><span class="fas fa-user"
                        style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"><span class="fas fa-sign-out-alt"
                        style="font-size: 1.5rem"></span></a>
            </li>
        @endauth

    </ul>

    <div class="mt-5">
        <h2 class="text-center text-dark mb-5">About us !</h2>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some example text. Some example text. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Iste vitae ea, assumenda beatae nobis obcaecati aut voluptate expedita ducimus,
                    cumque voluptas, incidunt excepturi! Doloremque eius dolore placeat, eveniet recusandae repellat?
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
