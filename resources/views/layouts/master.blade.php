<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    @include('profile.partials.header.head')
</head>

<body class="container mt-3">

    @include('profile.partials.navbar.master-navbar')

    <div class="mt-5">
        @include('profile.partials.messages.success')
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
    </div>

    @include('profile.partials.script.script-link')

</body>

</html>
