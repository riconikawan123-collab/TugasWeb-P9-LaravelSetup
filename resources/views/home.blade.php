<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['judul'] }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

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

        nav a:hover {
            color: #60a5fa;
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
            margin-top: 0;
            color: #2563eb;
        }

        .info {
            margin-top: 25px;
            padding: 20px;
            background: #eff6ff;
            border-radius: 10px;
        }

        .info p {
            margin: 10px 0;
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

        <p>{{ $data['deskripsi'] }}</p>

        <div class="info">
            <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
            <p><strong>Kelas:</strong> {{ $data['kelas'] }}</p>
        </div>
    </div>
</div>

</body>
</html>