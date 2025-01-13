<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skinspire</title>
    @vite('resources/sass/app.scss')
    <style>
        body{
            font-family: "Times New Roman", Times, serif;
        }
        .login-container {
            display: flex;
            height: 100vh;
        }
        .left-section {
            flex: 1;
            background: url('/images/images.jpg') no-repeat center center;
            background-size: cover;
        }
        .right-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #cbc7c7;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        }
        .login-box {
            text-align: center;
            padding: 2rem;
            border-radius: 8px;
            width: 80%;
            max-width: 400px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-user {
            background-color: #3d3a22;
            color: white;
        }
        .btn-user:hover {
            background-color: #6e6c47;
        }
        .btn-admin {
            background-color: #3d3a22;
            color: white;
        }
        .btn-admin:hover {
            background-color: #6e6c47;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Bagian kiri -->
        <div class="left-section"></div>

        <!-- Bagian kanan -->
        <div class="right-section">
            <div class="login-box">
                <h1>Selamat Datang di Skinspire!</h1>
                <p>Temukan inspirasi kecantikan kulitmu dengan produk skincare terbaik yang dirancang untuk merawat dan memancarkan pesonamu</p>
                <a href="{{ route('login') }}" class="btn btn-user">Login</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
