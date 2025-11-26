<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">My App</a>

            <form action="{{ route('logout') }}" method="POST" class="ms-auto">
                @csrf
                <button class="btn btn-light btn-sm">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="p-4 bg-white shadow-sm rounded">
            <h2>Selamat Datang, {{ auth()->user()->name }}! 🎉</h2>
            <p class="text-muted">Kamu berhasil login dan sekarang berada di dashboard.</p>

            <hr>

            <p>
                Ini contoh isi dashboard. Kamu bisa menambahkan menu, tabel data, grafik, atau apapun yang kamu butuhkan.
            </p>
        </div>
    </div>
</body>
</html>
