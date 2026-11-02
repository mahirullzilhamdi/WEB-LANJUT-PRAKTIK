```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2f5ed;
            margin: 0;
            padding: 40px;
        }

        .card {
            background-color: white;
            width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #cccccc;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #245b91;
            border-bottom: 1px solid #dddddd;
            padding-bottom: 15px;
        }

        p {
            font-size: 14px;
            color: #333333;
        }

        h3 {
            font-size: 15px;
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #75b7e5;
            color: white;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Profil Mahasiswa</h2>

        <p>
            <b>Nama:</b> {{ $nama }}
        </p>

        <p>
            <b>Program Studi:</b> {{ $programStudi }}
        </p>

        <h3>Daftar Keahlian:</h3>

        <ul>
            @foreach($keahlian as $k)
                <li>{{ $k }}</li>
            @endforeach
        </ul>
    </div>

</body>
</html>
```
