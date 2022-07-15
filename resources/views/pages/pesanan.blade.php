<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($makanan1 == 'Ayam Goreng')
        Makanan yang di pilih {{ $makanan1 }}
        <br>
        Harga Rp. 15000
        <br><br>
    @elseif ($makanan1 == 'Lobster')
        Makanan yang di pilih {{ $makanan1 }}
        <br>
        Harga Rp. 20000
    @elseif ($makanan1 == 'Pizza')
        Makanan yang di pilih {{ $makanan1 }}
        <br>
        Harga Rp. 50000
    @elseif ($makanan1 == 'Tiramisu')
        Makanan yang di pilih {{ $makanan1 }}
        <br>
        Harga Rp. 30000
    @elseif ($makanan1 == 'Pasta')
        Makanan yang di pilih {{ $makanan1 }}
        <br>
        Harga Rp. 25000
    @else
        Mohon maaf pesanan tidak ada
    @endif

    @if ($makanan2 == 'Ayam Goreng')
        Makanan yang di pilih {{ $makanan2 }}
        <br>
        Harga Rp. 15000
    @elseif ($makanan2 == 'Lobster')
        Makanan yang di pilih {{ $makanan2 }}
        <br>
        Harga Rp. 20000
    @elseif ($makanan2 == 'Pizza')
        Makanan yang di pilih {{ $makanan2 }}
        <br>
        Harga Rp. 50000
    @elseif ($makanan2 == 'Tiramisu')
        Makanan yang di pilih {{ $makanan2 }}
        <br>
        Harga Rp. 30000
    @elseif ($makanan2 == 'Pasta')
        Makanan yang di pilih {{ $makanan2 }}
        <br>
        Harga Rp. 25000
    @else
        Mohon maaf pesanan tidak ada
    @endif
</body>

</html>
