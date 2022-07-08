<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    @if ($makanan == 'Ayam Goreng')
        Makanan yang di pilih {{ $makanan }}
        <br>
        Harga Rp. 15000
    @elseif ($makanan == 'Lobster')
        Makanan yang di pilih {{ $makanan }}
        <br>
        Harga Rp. 20000
    @elseif ($makanan == 'Pizza')
        Makanan yang di pilih {{ $makanan }}
        <br>
        Harga Rp. 50000
    @elseif ($makanan == 'Tiramisu')
        Makanan yang di pilih {{ $makanan }}
        <br>
        Harga Rp. 30000
    @elseif ($makanan == 'Pasta')
        Makanan yang di pilih {{ $makanan }}
        <br>
        Harga Rp. 25000
    @else
        Mohon maaf pesanan tidak ada
    @endif
</body>
</html>
