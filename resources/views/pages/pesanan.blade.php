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
        harga {{ $makanan }} Rp. 15000
    @elseif ($makanan == 'Lobster')
        harga {{ $makanan }} Rp. 20000
    @elseif ($makanan == 'Pizza')
        harga {{ $makanan }} Rp. 50000
    @elseif ($makanan == 'Tiramisu')
        harga {{ $makanan }} Rp. 30000
    @elseif ($makanan == 'Pasta')
        harga {{ $makanan }} Rp. 25000
    @else
        Tidak Ada Pesanan!
    @endif
</body>
</html>
