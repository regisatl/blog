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

    @include('profile.partials.navbar.master-navbar')

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
