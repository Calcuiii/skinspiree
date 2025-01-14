<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skinspire</title>
    @vite('resources/sass/app.scss')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            background: url('/images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-box {
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

        .link-register {
            text-align: center;
            margin-top: 15px;
        }

        .link-register a {
            color: #6e6c47;
            text-decoration: none;
        }

        .link-register a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Login Box -->
        <div class="login-box">
            <h1>Login ke Skinspire</h1>
            <p>Masukkan informasi login Anda untuk melanjutkan</p>
            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan Name" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>

                <!-- Role -->
                <div class="form-group">
                    <label for="input-role">Role</label>
                    <select id="input-role" name="role" required>
                        <option value="" disabled selected>Pilih Role Anda</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">Login</button>
            </form>

            <!-- Register Link -->
            <div class="link-register">
                <p>Belum punya akun? <a href="{{ route('register.form') }}">Daftar Sekarang</a></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const role = formData.get('role');

            if (!role) {
                alert('Silakan pilih role sebelum login.');
                return;
            }

            fetch(e.target.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(result => {
                if (result.status === 'success') {
                    if (result.role === 'admin') {
                        window.location.href = '/dashboard';
                    } else if (result.role === 'user') {
                        window.location.href = '/home';
                    }
                } else {
                    alert('Login gagal! ' + result.message);
                }
            })
            .catch(error => {
                console.error(error);
                alert('Terjadi kesalahan! Coba lagi nanti.');
            });
        });
    </script>
    @vite('resources/js/app.js')
</body>

</html>
