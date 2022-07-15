<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
</head>

<body>
    @foreach ($post as $data)
        <ul>
            <li>{{ $data['beranda'] }}</li>
            <li>{{ $data['berita'] }}</li>
            @foreach ($data['kategori_berita'] as $data_kategori)
                <ul type="square">
                    <li>{{ $data_kategori['name'] }}</li>
                    @foreach ($data_kategori['data'] as $data_olahraga)
                        <ul style="list-style-type: '❖&nbsp;'">
                            <li>{{ $data_olahraga }}</li>
                        </ul>
                    @endforeach
                </ul>
            @endforeach
            <li>{{ $data['tentang'] }}</li>
        </ul>
    @endforeach
</body>

</html>
