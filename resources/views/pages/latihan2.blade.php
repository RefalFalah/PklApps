<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        table {
            margin: 35px auto 35px auto;
            width: 50%;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="center">Keterangan Data Bimbingan</h1>
    @foreach ($kampus as $data)
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th colspan="4">Data Dosen</th>
                </tr>
                <tr>
                    <td colspan="2">Nama Dosen</td>
                    <td colspan="2">{{ $data['nama_dosen'] }}</td>
                </tr>
                <tr>
                    <td colspan="2">Mata Kuliah</td>
                    <td colspan="2"> {{ $data['mata_kuliah'] }}</td>
                </tr>
                <tr>
                    <th colspan="4">Data Mahasiswa</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai Bimbingan</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                    $nilai = 0;
                @endphp
                @foreach ($data['mahasiswa'] as $mahasiswa)
                    <tr>
                        <td class="center">{{ $no }}</td>
                        <td>{{ $mahasiswa['nama_mahasiswa'] }}</td>
                        <td class="center">{{ $mahasiswa['nilai'] }}</td>
                        @php
                            // Grade Mahasiswa
                            if ($mahasiswa['nilai'] >= 90) {
                                $grade_mahasiswa = 'A';
                            } elseif ($mahasiswa['nilai'] >= 80) {
                                $grade_mahasiswa = 'B';
                            } elseif ($mahasiswa['nilai'] >= 70) {
                                $grade_mahasiswa = 'C';
                            } elseif ($mahasiswa['nilai'] >= 50) {
                                $grade_mahasiswa = 'D';
                            } else {
                                // $grade = 'E';
                            }
                            $no++;

                            // Total Seluruh Nilai
                            $total = $nilai += $mahasiswa['nilai'];

                            // Total Rata-rata
                            $rata_rata = $total / count($data['mahasiswa']);

                            // Grade Dosen Dari Nilai Rata-rata Mahasiswa Bimbingannya
                            if ($rata_rata >= 90) {
                                $grade = 'A';
                            } elseif ($rata_rata >= 80) {
                                $grade = 'B';
                            } elseif ($rata_rata >= 70) {
                                $grade = 'C';
                            } elseif ($rata_rata >= 50) {
                                $grade = 'D';
                            } else {
                                $grade = 'E';
                            }
                        @endphp
                        <td class="center">{{ $grade_mahasiswa }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="4">Keterangan</th>
                </tr>
                <tr>
                    <td colspan="3">Total Nilai Mahasiswa {{ $data['nama_dosen'] }}</td>
                    <td colspan="1" class="center">{{ $total }}</td>
                </tr>
                <tr>
                    <td colspan="3">Nilai Rata-rata Mata Kuliah {{ $data['mata_kuliah'] }}</td>
                    <td colspan="1" class="center">{{ $rata_rata }}</td>
                </tr>
                <tr>
                    <td colspan="3">Grade dosen {{ $data['nama_dosen'] }}</td>
                    <td colspan="1" class="center">{{ $grade }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
</body>

</html>
