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
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto">
                    <i class="bi-person-circle me-1"></i>My Profile
                </a>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <img src="{{ Vite::asset('resources/images/llogo.png') }}" alt="Gambar" width="55"
                            height="70">
                        <h4>Edit Produk</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Gambar Produk</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                name="image" id="image" value="{{ old('image', $product->image) }}"
                                placeholder="Enter Product Image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                name="name" id="name" value="{{ old('name', $product->name) }}"
                                placeholder="Enter Product Name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                                name="price" id="price" value="{{ old('price', $product->price) }}"
                                placeholder="Enter Price">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label">Stok</label>
                            <input class="form-control @error('stock') is-invalid @enderror" type="text"
                                name="stock" id="stock" value="{{ old('stock', $product->stock) }}"
                                placeholder="Enter Stock">
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('products.index') }}" class="btn btn-dark btn-lg mt-3">
                            <i class="bi-arrow-left-circle me-2"></i> Cancel
                        </a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i
                                class="bi-check-circle me-2"></i>Save</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
