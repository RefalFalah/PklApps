<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Data Siwa</legend>
        @foreach ($siswa as $data)
            Id : {{ $data['id'] }} <br>
            Nama : {{ $data['name'] }} <br>
            Umur : {{ $data['age'] }} <br>
            Status :
            @if ($data['age'] >= 17)
                Anda berhak mendapatkan KTP
            @else
                Anda tidak berhak mendapatkan KTP
            @endif
            <br>
            @foreach ($data['mapel'] as $mapel)
                <li>{{ $mapel }}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>

</html>
