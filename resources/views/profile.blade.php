<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    <style>
        .navbar.navbar-dark {
            background-color: rgb(110, 108, 71);
            color: white;
        }

        .btn {
            background-color: rgb(61, 58, 34);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="navbar-brand mb-0 h1">
                <img src="{{ Vite::asset('resources/images/llogo.png') }}" alt="Gambar" width="55" height="70">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto">
                        <a href="{{ route('dashboard') }}" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto">
                        <a href="{{ route('products.index') }}" class="nav-link">Product List</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto align-items-center">
                    <form class="d-flex me-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <a href="#" class="btn btn-outline-light me-3">
                            <i class="bi bi-search"></i>
                        </a>
                    </form>
                    <hr class="d-lg-none text-white-50">
                    <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto">
                        <i class="bi-person-circle me-1"></i>My Profile
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>