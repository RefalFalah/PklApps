<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Latihan 3</title>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        h1 {
            margin-bottom: 25px;
        }

        table {
            margin: 0px auto 35px auto;
            width: 60%;
        }

        .judul {
            font-size: 23px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="center">Daftar Jam Tayang Televisi</h1>
    @foreach ($televisi as $data_tayang)
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="3" class="judul">{{ $data_tayang['siaran'] }}</th>
            </tr>
            <tr>
                <th>Nama Program</th>
                <th>Jam Tayang</th>
                <th>Tanggal Tayang</th>
            </tr>
            @foreach ($data_tayang['jadwal_tayang'] as $jadwal)
                <tr>
                    <td>{{ $jadwal['nama_program'] }}</td>
                    <td class="center">{{ $jadwal['jam_tayang'] }}</td>
                    <td class="center">{{ $jadwal['tanggal_tayang'] }}</td>
                </tr>
            @endforeach
        </table>
    @endforeach
</body>

</html>
