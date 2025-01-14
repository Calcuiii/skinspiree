<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    <style>
        .navbar.navbar-dark {
            background-color: rgb(110, 108, 71);
            color: white;
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
            left: 500px;
            bottom: 100px;
            color: rgb(61, 58, 34);
            padding: 0px;
            /* Mengurangi padding agar tidak terlalu besar */
            border-radius: 5px;
            font-size: 60px;
            display: flex;
            flex-direction: column;
            /* Mengatur gambar di atas tulisan */
            align-items: center;
        }


        .btn {
            background-color: rgb(61, 58, 34);
        }

        .image-container {
            margin-bottom: 1px;
            /* Jarak antara gambar dan tulisan */
        }

        .text-container {
            text-align: center;
        }

        .welcome-text {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            /* Beri jarak dari video */
            margin-left: 20px;
            /* Letakkan di pinggir kiri */
            margin-bottom: 0px;
            font-size: 1.5rem;
            /* Sesuaikan ukuran font */
            font-weight: bold;
            /* Buat teks lebih tebal */
            color: #333;
            /* Warna teks */
        }

        .brand {
            display: flex;
            margin-left: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .containerDes {
            display: flex;
            /* Elemen berada di tengah secara horizontal */
            margin-top: 0px;
            /* Otomatis menyeimbangkan margin kiri dan kanan */
            margin-bottom: 5px;
            /* Lebar container sesuai konten */
        }

        .allproduct {
            padding-top: 0px;
            display: flex;
            margin: auto;
        }



        .produk {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }

        .product-name {
            display: flex;

            font-family: 14px;
            font-weight: bold;
        }

        .deskripsi {
            font-family: 12px;

        }



        .containerKu {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(110, 108, 71);
            /* Latar belakang hijau */
            padding: 0px;
        }


        .image-text-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            gap: 20px;
            /* Jarak antara gambar dan teks */
            width: 100%;
        }

        .image-text-container img {
            max-width: 400px;
            height: auto;
        }

        .text-right {
            color: white;
            max-width: 800px;
        }

        .text-right h4 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .containerKu2 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(151, 149, 100);
            /* Latar belakang hijau */
            padding: 0px;
        }

        .image-text-container2 {
            display: flex;
            flex-direction: row-reverse;
            /* Membalikkan urutan gambar dan teks */
            align-items: center;
            justify-content: flex-start;
            gap: 20px;
            /* Jarak antara gambar dan teks */
            width: 100%;
        }

        .image-text-container2 img {
            max-width: 400px;
            height: auto;
        }

        .text-right2 {
            color: white;
            max-width: 800px;
        }

        .text-right2 h4 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .nastedBottom {
            vertical-align: top;
            color: rgb(61, 58, 34);
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
            color: #333;
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
                <img src="{{ asset('images/llogo.png') }}" alt="Gambar" width="55" height="70">
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

    <video autoplay muted loop>
        <source src="{{ Vite::asset('resources/video/video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="text-overlay">
        <div class="image-container">
            <img src="{{ asset('images/llogo.png') }}" alt="Gambar" width="300" height="350">
        </div>
        <div class="text-container">
            <b>Skinspire Skincare</b>
        </div>
        <div class="button-shop">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="{{ route('products.index') }}">Detail Product
                    <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="welcome-text">
        <h3>Popular Categories</h3>
        <p class="brand">By Skinspire Skincare</p>
    </div>

    <div class="containerDes">
        <div class="allproduct">

            <div class="produk">
                <a>
                    <img src="{{ asset('images/produk1.jpg') }}" alt="Gambar" width="200">
                </a>
                <p class="product-name">Serum Skinspire</p>
                <p class="deskripsi">Merawat kelembapan <br>dan kecerahan wajah</p>
            </div>
            <div class="produk">
                <a>
                    <img src="{{ asset('images/produk2.jpg') }}" alt="Gambar" width="200">
                </a>
                <p class="product-name">Toner Skinspire</p>
                <p class="deskripsi">Menyegarkan, menyeimbangkan <br>pH kulit, dan membersihkan sisa <br>kotoran</p>
            </div>
            <div class="produk">
                <a>
                    <img src="{{ asset('images/produk3.jpg') }}" alt="Gambar" width="200">
                </a>
                <p class="product-name">Lulur Skinspire</p>
                <p class="deskripsi">Melembapkan, menghaluskan,<br> dan mencerahkan kulit</p>
            </div>
        </div>
    </div>
    <div class="containerKu">
        <div class="image-text-container">
            <img src="{{ asset('images/produk6.jpg') }}" alt="Gambar" width="400"
                height="200">
            <div class="text-right">
                <h4>Serum Skinspire</h4>
                <h6 style="color: rgb(31, 30, 30)">Description Product</h6>
                <p>Serum Wajah Skinspire dirancang khusus dengan formula bahan yang berkualitas tinggi, sehingga dapat
                    memberikan perawatan kulit yang mendalam dan efektif. Serum ini menargetkan berbagai permasalahan
                    kulit secara spesifik, seperti jerawat meradang, bruntusan, hiperpigmentasi, dan memberikan hasil
                    optimal dalam waktu singkat.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="containerKu2">
        <div class="image-text-container2">
            <img src="{{ asset('images/produk5.jpg') }}" alt="Gambar" width="400"
                height="200">
            <div class="text-right2">
                <h4>Toner Skinspire</h4>
                <h6 style="color: rgb(31, 30, 30)">Description Product</h6>
                <p>Produk perawatan kulit yang dapat menyegarkan dan menyeimbangkan pH kulit. Dengan formula ringan dan
                    bebas
                    alkohol, toner ini dapat memberikan kelembapan tambahan tanpa meninggalkan rasa lengket, cocok
                    dengan
                    berbagai jenis kulit, dan tidak meninggalkan kesan kusam di wajah.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="containerKu">
        <div class="image-text-container">
            <img src="{{ asset('images/produk4.jpg') }}" alt="Gambar" width="400"
                height="200">
            <div class="text-right">
                <h4>Lotion Skinspire</h4>
                <h6 style="color: rgb(31, 30, 30)">Description Product</h6>
                <p>Nikmati sensasi perawatan tubuh mewah dengan Lulur Skinspire, lulur premium yang dirancang khusus
                    dapat
                    memberikan kelembutan dan kecerahan alami pada kulit. Terbuat dari bahan-bahan alami pilihan,
                    lulur ini mengandung kombinasi scrub halus untuk mengangkat sel kulit mati, minyak esensial untuk
                    melembapkan, serta ekstrak tumbuhan yang kaya antioksidan.</p>
            </div>
        </div>
    </div>
    <hr>
    <tr>
        <td>
            <table class="">
                <tr class="nastedBottom">
                    <td>
                        <div class="footer1">
                            <img src="{{ Vite::asset('resources/images/llogo.png') }}" alt="Gambar" width="55" height="70">
                            <h3><strong>Skinspire Skincare</strong></h3>
                        </div>
                        <div class="description">
                            <p>
                                Temukan ekspresi kecantikanmu dengan produk Skinspire Skincare, skincare yang dapat digunakan untuk 
                                berbagai jenis kulit, merawat kesehatan kulit, dan membuat kulit lebih cerah. Dengan menggunakan bahan 
                                alami berkualitas tinggi, Skinspire Skincare dirancang untuk memberikan perawatan terbaik bagi kulitmu. 
                                Produk ini tidak hanya membantu menjaga kelembapan alami kulit, tetapi juga melindungi dari pengaruh 
                                buruk lingkungan. Rasakan sensasi kulit yang lebih sehat, bercahaya, dan terawat dengan Skinspire 
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
