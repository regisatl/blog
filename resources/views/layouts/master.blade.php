<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/79fa04224e.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        * {
            font-family: Poppins;
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
        <h1 class="font-semibold text-dark text-center">Laravel 10</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit rem accusantium ab placeat earum
            quasi,
            nam ipsam dolor eligendi explicabo, unde neque ex, fuga pariatur. Est, labore quidem optio earum iure
            maiores harum laboriosam? Officiis magnam earum laboriosam vero illo repellendus iusto quas, nisi
            aperiam,
            nesciunt ex quam repellat sunt animi tenetur! Cumque reprehenderit minima porro ducimus aspernatur
            laboriosam tempora dolore distinctio quaerat dolorum molestias possimus est, at suscipit ab recusandae
            eos!
        </p>
        @include('profile.partials.messages.success')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</body>

</html>
