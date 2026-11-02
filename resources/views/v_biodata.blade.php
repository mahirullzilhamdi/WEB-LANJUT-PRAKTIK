<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Passing Data Array</title>
</head>
<body>
    <h1>Pemrograman Web Lanjut</h1>
    <br>
    <p>Nama : {{ $nama }}</p>
    <p>Makanan Kesukaan</p>
    <ul>
        @foreach ($makanan as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>
</body>
</html>