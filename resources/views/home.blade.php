<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laser Clinic</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #b8755a;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .hero {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px 0;
        }

        .hero img {
            width: 50%;
            border-radius: 10px;
        }

        .hero-content {
            flex: 1;
        }

        .hero-content h1 {
            font-size: 2.5em;
            margin: 0 0 20px;
        }

        .hero-content p {
            margin: 0 0 20px;
        }

        .hero-content .cta {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cta button {
            background-color: #b8755a;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .cta button:hover {
            background-color: #a0624e;
        }

        .features {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .feature {
            text-align: center;
            flex: 1;
        }

        .feature img {
            width: 40px;
            height: 40px;
        }

        .footer {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 10px 0;
        }

        .footer a {
            text-decoration: none;
            color: #333;
        }

        .discount-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #b8755a;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">LasrClinic</div>
            <nav class="nav">
                <a href="#">Home</a>
                <a href="#">Flowers</a>
                <a href="#">Address</a>
                <a href="#">Contact</a>
                <a href="#">About</a>
            </nav>
        </div>

        <div class="hero">
            <div class="discount-badge">25% OFF</div>
            <img src="https://via.placeholder.com/500x500" alt="Flawless Skin">
            <div class="hero-content">
                <h1>You Deserve Flawless Skin</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="cta">
                    <button>Learn More</button>
                </div>
            </div>
        </div>

        <div class="features">
            <div class="feature">
                <img src="https://via.placeholder.com/40" alt="Feature 1">
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
            <div class="feature">
                <img src="https://via.placeholder.com/40" alt="Feature 2">
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
            <div class="feature">
                <img src="https://via.placeholder.com/40" alt="Feature 3">
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>

        <div class="footer">
            <a href="#"><img src="https://via.placeholder.com/20" alt="Twitter"></a>
            <a href="#"><img src="https://via.placeholder.com/20" alt="WhatsApp"></a>
            <a href="#"><img src="https://via.placeholder.com/20" alt="Facebook"></a>
            <a href="#"><img src="https://via.placeholder.com/20" alt="Instagram"></a>
        </div>
    </div>
</body>
</html>
