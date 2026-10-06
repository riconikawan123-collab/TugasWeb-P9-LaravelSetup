<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['judul'] }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        nav {
            background: #111827;
            padding: 18px 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        h1 {
            color: #2563eb;
        }

        .contact {
            margin-top: 25px;
            padding: 20px;
            background: #eff6ff;
            border-radius: 10px;
        }

        .contact p {
            margin: 12px 0;
        }
    </style>
</head>

<body>

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
</nav>

<div class="container">
    <div class="card">
        <h1>{{ $data['judul'] }}</h1>

        <p>Silakan hubungi saya melalui informasi berikut:</p>

        <div class="contact">
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Telepon:</strong> {{ $data['telepon'] }}</p>
        </div>
    </div>
</div>

</body>
</html>