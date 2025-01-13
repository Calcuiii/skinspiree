<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skinspire</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
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
            max-width: 1000px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.9);
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .login-box h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .login-box p {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #3d3a22;
            outline: none;
        }

        .btn-submit {
            background-color: #3d3a22;
            color: #fff;
            padding: 14px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #6e6c47;
        }

        .link-register {
            text-align: center;
            margin-top: 20px;
        }

        .link-register a {
            color: #3d3a22;
            text-decoration: none;
            font-size: 14px;
        }

        .link-register a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .login-container {
                flex-direction: column;
                padding: 20px;
            }
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

                <!-- Username -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
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
        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const role = formData.get('role');

            if (!role) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Pilih Role!',
                    text: 'Silakan pilih role sebelum login.',
                });
                return;
            }

            try {
                const response = await fetch(e.target.action, {
                    method: 'POST',
                    body: formData,
                });

                const result = await response.json();
                Swal.fire({
                    icon: result.status === 'success' ? 'success' : 'error',
                    title: result.status === 'success' ? 'Berhasil!' : 'Gagal!',
                    text: result.message,
                });

                if (result.status === 'success') {
                    if (result.role === 'admin') {
                        window.location.href = '/admin-dashboard';
                    } else if (result.role === 'user') {
                        window.location.href = '/user-dashboard';
                    }
                }
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Terjadi kesalahan! Coba lagi nanti.',
                });
            }
        });
    </script>
</body>

</html>
