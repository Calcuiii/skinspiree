<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
    <style>
        .navbar.navbar-dark {
            background-color: rgb(110, 108, 71);
            color: white;
        }

        .btn {
            background-color: rgb(61, 58, 34);
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            /* Full height of the viewport */
        }

        video {
            width: 100%;
            height: 100%;
            /* Set sesuai dengan tinggi navbar */
            object-fit: cover;
            /* Agar video tetap terpotong secara proporsional */
        }

        .text-overlay {
            position: absolute;
            left: 650px;
            top: 20px;
            color: rgb(255, 252, 214);
            padding: 0px;
            /* Mengurangi padding agar tidak terlalu besar */
            border-radius: 5px;
            font-size: 60px;
            display: flex;
            flex-direction: column;
            /* Mengatur gambar di atas tulisan */
            align-items: center;
        }

        .text-container-brand {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 16px;
        }

        .table-overlay {
            position: absolute;
            top: 10rem;
            left: 0;
            width: 100%;
            z-index: 1;
            padding: 20px;
            display: flex;
            justify-content: center;

            /* Optional background for table */
        }

        .btn-primary:hover {
            background-color: rgb(61, 58, 34);
            /* Warna biru */
            border-color: rgb(61, 58, 34);
            /* Mengubah border menjadi biru */

        }

        .table-foot {
            margin-top: 17rem;

        }

        .nastedBottom {
            vertical-align: top;
            color: white;
            background-color: rgb(110, 108, 71);
        }

        .footer1 {
            display: flex;
            align-items: center;
            /* Agar logo dan teks sejajar secara vertikal */
            gap: 5px;
            /* Memberikan jarak antara logo dan teks */
            margin-right: 50px;
            margin-left: 50px;
            margin-top: 50px;
        }

        .description {
            margin-top: 10px;
            margin-left: 50px;
            margin-right: 5rem;
        }


        .footer2 {
            margin-top: 50px;
            margin-left: 50px;
        }

        .footer3 {
            margin-top: 70px;
            margin-right: 8rem;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icons .icon {
            font-size: 24px;
            /* Ukuran ikon */
            color: white;
            /* Warna default ikon */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons .icon:hover {
            color: rgb(110, 108, 71);
            /* Warna saat hover */
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
    <div class="video-container">
        <video autoplay muted loop>
            <source src="{{ Vite::asset('resources/video/video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="text-overlay">
            <div class="text-container">
                <b>Products</b>
            </div>
            <div class="text-container-brand">
                <b>By Skinspire Skincare</b>
            </div>

        </div>

        <div class="table-overlay">
            <div class="container mt-4">
                <div class="row mb-0">
                    <div class="col-lg-9 col-xl-10">
                        <h4 class="mb-3">{{ $pageTitle }}</h4>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <div class="d-grid gap-2">
                            <a href="{{ route('products.create') }}"
                                class="btn btn-outline-light my-2 ms-md-auto">Tambah Produk</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                    <thead>
                        <tr>
                            <th>Gambar Produk</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="rounded" width="100">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                            class="btn btn-outline-light btn-sm me-2"><i
                                                class="bi-person-lines-fill"></i></a>
                                        <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                            class="btn btn-outline-light btn-sm me-2"><i
                                                class="bi-pencil-square"></i></a>
                                        <div>
                                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-light btn-sm me-2"><i
                                                        class="bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <tr>
            <td>
                <table class="table-foot">
                    <tr class="nastedBottom">
                        <td>
                            <div class="footer1">
                                <img src="{{ Vite::asset('resources/images/llogo.png') }}" alt="Gambar"
                                    width="55" height="70">
                                <h3><strong>Skinspire Skincare</strong></h3>
                            </div>
                            <div class="description">
                                <p>
                                    Temukan ekspresi kecantikanmu dengan produk Skinspire Skincare, skincare yang dapat
                                    digunakan untuk
                                    berbagai jenis kulit, merawat kesehatan kulit, dan membuat kulit lebih cerah. Dengan
                                    menggunakan bahan
                                    alami berkualitas tinggi, Skinspire Skincare dirancang untuk memberikan perawatan
                                    terbaik bagi kulitmu.
                                    Produk ini tidak hanya membantu menjaga kelembapan alami kulit, tetapi juga
                                    melindungi dari pengaruh
                                    buruk lingkungan. Rasakan sensasi kulit yang lebih sehat, bercahaya, dan terawat
                                    dengan Skinspire
                                    Skincare, solusi sempurna untuk kebutuhan kulitmu

                                </p>
                            </div>

                            <div class="footer2">
                                <h4>Follow Us</h4>
                                <div class="social-icons">
                                    <a href="https://www.instagram.com" target="_blank" class="icon">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.twitter.com" target="_blank" class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.tiktok.com" target="_blank" class="icon">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                    <a href="https://www.youtube.com" target="_blank" class="icon">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="https://www.facebook.com" target="_blank" class="icon">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="footer3">
                                <h4>Layanan Informasi</h4>
                                <p>Jl. Ketintang No. 156, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur 60231</p>
                                <p>E-mail: skinspireSkincare@gmail.com</p>
                                <p>Telepon: +6281-2345-6789</p>
                        </td>

                    </tr>
                </table>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
