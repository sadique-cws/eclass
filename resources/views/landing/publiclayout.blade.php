<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }} | a complete Coaching Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm py-3 px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('public.home') }}">{{ env('APP_NAME') }}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('public.home') }}">Home</a>
                    </li>
                   @guest
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route("login") }}">Student Login</a>
                    </li>
                    <li class="nav-item">
                        <a class=" btn btn-primary" href="{{ route("public.apply") }}">Apply for Admission</a>
                    </li>
                   @endguest

                   @auth
                         <li class="nav-item">
                        <a class="nav-link" href="{{ route("public.logout") }}">logout</a>
                    </li>
                   @endauth

                </ul>
            </div>
        </div>
    </nav>


    @section('content')

    @show




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
