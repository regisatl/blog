<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
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

<body>

    <div class="container mt-3">

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

        <h2 class="text-center text-dark">Contact us !</h2>

        <div class="container">

            <form action="" method="post">

                <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" id="fname" name="firstname"
                        placeholder="Your name..">
                    <label for="fname">First Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lname" name="lastname"
                        placeholder="Your last name..">
                    <label for="lname">Last Name</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    <label for="country">Country</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea id="subject" class="form-control" name="subject" placeholder="Write something.."></textarea>
                    <label for="subject">Subject</label>
                </div>

                <button type="submit" class="btn btn-success py-3 bg-gradient w-100">Submit</button>

            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
