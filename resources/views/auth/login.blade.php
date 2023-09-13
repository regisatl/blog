<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}" title="Register"><span class="fas fa-sign"
                    style="font-size: 1.5rem"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}" title="Login"><span class="fas fa-sign-in"
                    style="font-size: 1.5rem"></span></a>
        </li>
    </ul>

    <div class="mt-5 pt-5">
        <h2 class="font-semibold text-dark text-center mb-3">Login</h2>

        <form action="/sign" method="post">
            @csrf
            @include('profile.partials.login-form')
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
