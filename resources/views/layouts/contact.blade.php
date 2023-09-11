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

    <!-- Styles -->
    <style>
        * {
            font-family: Poppins;
        }
    </style>
</head>

<body>
    <div class="container mt-3">

      <ul class="nav nav-tabs mt-3 mb-5">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about-us">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/contact-us">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/article/ {{ $article->id }} ">Articles</a>
            </li>
        </ul>

        <h2 class="text-center text-dark">Contactez nous !</h2>

        <div class="container">

            <form action="">

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
                    <textarea id="subject" class="form-control" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <label for="subject">Subject</label>
                </div>

                <button type="submit" class="btn btn-success py-3 bg-gradient w-100">Submit</button>

            </form>
        </div>

    </div>

</body>
</body>

</html>
