<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        fieldset {
            width: 31.5%;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            margin: 0px auto 0px auto;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Data Post</legend>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($post as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data['title'] }}</td>
                    <td>{{ $data['content'] }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>

</html>
