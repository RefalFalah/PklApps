<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>
<body>
    <h2>Biodata</h2>
    <table>
        <tr>
            <td>Nama Saya</td>
            <td>&nbsp;:&nbsp;</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>&nbsp;:&nbsp;</td>
            <td>{{ $umur }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>&nbsp;:&nbsp;</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>&nbsp;:&nbsp;</td>
            <td>{{ $jk }}</td>
        </tr>
        <tr>
            <td>Kelas </td>
            <td>&nbsp;:&nbsp;</td>
            <td>{{ $kelas }}</td>
        </tr>
        <tr>
            <td>Hobby </td>
            <td>&nbsp;:&nbsp;</td>
            <td>{{ $hobby }}</td>
        </tr>
    </table>
</body>
</html>
