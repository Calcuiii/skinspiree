<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
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
    </nav>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <img src="{{ Vite::asset('resources/images/llogo.png') }}" alt="Gambar" width="55" height="70">
                    <h4>Detail Produk</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <h5>{{ $product->image }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <h5>{{ $product->name }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <h5>{{ $product->price }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="stock" class="form-label">Stok</label>
                        <h5>{{ $product->stock }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('products.index') }}" class="btn btn-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle
        me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html
