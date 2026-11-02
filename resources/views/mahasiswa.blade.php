// TUGAS 2 ELERNING
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d9f5ef;
            font-family: Arial, sans-serif;
        }

        .kartu {
            width: 620px;
            max-width: 90%;
            padding: 35px;
            background-color: #f7fffc;
            border-radius: 18px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 25px;
            text-align: center;
            color: #3269b7;
            font-size: 36px;
        }

        hr {
            border: none;
            border-top: 1px solid #dddddd;
            margin-bottom: 25px;
        }

        .info {
            margin: 20px 0;
            color: #333333;
            font-size: 22px;
        }

        .status {
            width: fit-content;
            margin: 30px auto 0;
            padding: 14px 25px;
            border-radius: 30px;
            background-color: #55a65c;
            color: white;
            font-size: 18px;
            text-align: center;
        }

        @media (max-width: 500px) {
            .kartu {
                padding: 25px;
            }

            h1 {
                font-size: 28px;
            }

            .info {
                font-size: 17px;
            }

            .status {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="kartu">
        <h1>Kartu Mahasiswa</h1>

        <hr>

        <p class="info">
            <strong>Nama:</strong>
            {{ $mahasiswa['nama'] }}
        </p>

        <p class="info">
            <strong>NPM:</strong>
            {{ $mahasiswa['npm'] }}
        </p>

        <p class="info">
            <strong>Jurusan:</strong>
            {{ $mahasiswa['jurusan'] }}
        </p>

        <p class="info">
            <strong>Angkatan:</strong>
            {{ $mahasiswa['angkatan'] }}
        </p>

        <div class="status">
            Status: {{ $mahasiswa['status'] }}
        </div>
    </div>
</body>
</html>
