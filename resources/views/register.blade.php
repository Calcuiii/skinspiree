<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Skinspire</title>
    @vite('resources/sass/app.scss')

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .register-box {
            background-color: rgba(50, 48, 48, 0.8);
            color: white;
            padding: 40px 30px;
            border-radius: 10px;
            text-align: left;
            width: 100%;
            max-width: 450px;
            z-index: 1;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 30px;
        }

        p {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            color: white;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            color: #333;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6e6c47;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3d3a22;
        }

        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .background-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .link-login {
            text-align: center;
            margin-top: 15px;
        }

        .link-login a {
            color: #6e6c47;
            text-decoration: none;
        }

        .link-login a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <!-- Background Video -->
        <div class="background-video">
            <video autoplay muted loop>
                <source src="videos/register.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Registration Form -->
        <div class="register-box">
            <h1>Welcome Beauties!</h1>
            <p>Welcome to Skinspire! Register now for a modern and elegant skincare shopping experience.</p>
            <form id="registerForm" action="{{ route('register') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <!-- Role Selection -->
                <div>
                    <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select your role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <button type="submit">Register</button>
            </form>

            <div class="link-login">
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
