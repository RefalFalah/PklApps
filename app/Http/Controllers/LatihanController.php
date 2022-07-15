<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihan1() {
        $post = [
            [
                "beranda" => "Beranda",
                "berita" => "Berita",
                "kategori_berita" => [
                    [
                        "name" => "Olahraga",
                        "data" => ["Sepak Bola", "Bulu Tangkis"]
                    ],
                    [
                        "name" => "Politik",
                        "data" => []
                    ],
                    [
                        "name" => "Manca Negara",
                        "data" => []
                    ]
                ],
                "tentang" => "Tentang"
            ]
        ];

        return view('pages.latihan', ["post" => $post]);
    }

    public function latihan2() {
        $kampus = [
            [
                "nama_dosen" => "Yusuf Bachtiar",
                "mata_kuliah" => "Pemrograman Mobile",
                "mahasiswa" => [
                    [
                        "nama_mahasiswa" => "Muhammad Soleh",
                        "nilai" => 78
                    ],
                    [
                        "nama_mahasiswa" => "Jujun Junaedi",
                        "nilai" => 85
                    ],
                    [
                        "nama_mahasiswa" => "Mamat Alkatiri",
                        "nilai" => 90
                    ],
                    [
                        "nama_mahasiswa" => "Ubay holin",
                        "nilai" => 87
                    ],
                    [
                        "nama_mahasiswa" => "Fadillah",
                        "nilai" => 95
                    ]
                ]
            ],
            [
                "nama_dosen" => "Yaris Riyadi Yusuf",
                "mata_kuliah" => "Pemrograman Web",
                "mahasiswa" => [
                    [
                        "nama_mahasiswa" => "Alfred McTomminay",
                        "nilai" => 67
                    ],
                    [
                        "nama_mahasiswa" => "Bruno Kasmir",
                        "nilai" => 90
                    ],
                    [
                        "nama_mahasiswa" => "Akid Hendra",
                        "nilai" => 50
                    ],
                    [
                        "nama_mahasiswa" => "Dany Irawan",
                        "nilai" => 70
                    ],
                    [
                        "nama_mahasiswa" => "Chandra Mega Putra",
                        "nilai" => 60
                    ]
                ]
            ]
        ];

        return view('pages.latihan2', ["kampus" => $kampus]);
    }

    public function latihan3() {
        $televisi = [
            [
                "siaran" => "NET TV",
                "jadwal_tayang" => [
                    [
                        "nama_program" => "Paranormal",
                        "jam_tayang" => "23.00",
                        "tanggal_tayang" => "18 Oktober 2022"
                    ],
                    [
                        "nama_program" => "Ini Talkshow",
                        "jam_tayang" => "19.00",
                        "tanggal_tayang" => "19 Oktober 2022"
                    ],
                    [
                        "nama_program" => "One Piece",
                        "jam_tayang" => "13.00",
                        "tanggal_tayang" => "20 Oktober 2022"
                    ],
                ]
            ],
            [
                "siaran" => "TVRI",
                "jadwal_tayang" => [
                    [
                        "nama_program" => "Acara Kesenian",
                        "jam_tayang" => "10.00",
                        "tanggal_tayang" => "15 Januari 2022"
                    ],
                    [
                        "nama_program" => "Sejarah Tatar Sunda",
                        "jam_tayang" => "11.00",
                        "tanggal_tayang" => "16 Januari 2022"
                    ],
                    [
                        "nama_program" => "Ngobrol Santai",
                        "jam_tayang" => "12.00",
                        "tanggal_tayang" => "17 Januari 2022"
                    ],
                ]
            ],
            [
                "siaran" => "BEINSPORT",
                "jadwal_tayang" => [
                    [
                        "nama_program" => "Balap Motor",
                        "jam_tayang" => "19.00",
                        "tanggal_tayang" => "10 Oktober 2022"
                    ],
                    [
                        "nama_program" => "Sepak Bola",
                        "jam_tayang" => "19.30",
                        "tanggal_tayang" => "11 Oktober 2022",
                    ],
                    [
                        "nama_program" => "Gaming",
                        "jam_tayang" => "10.00",
                        "tanggal_tayang" => "12 Oktober 2022"
                    ]
                ]
            ],
            [
                "siaran" => "Ochannel",
                "jadwal_tayang" => [
                    [
                        "nama_program" => "Black Clover",
                        "jam_tayang" => "14.00",
                        "tanggal_tayang" => "11 Desember 2022"
                    ],
                    [
                        "nama_program" => "Kimetsu No Yaiba",
                        "jam_tayang" => "15.00",
                        "tanggal_tayang" => "12 Desember 2022",
                    ],
                    [
                        "nama_program" => "Naruto",
                        "jam_tayang" => "16.00",
                        "tanggal_tayang" => "13 Desember 2022"
                    ]
                ]
            ],
            [
                "siaran" => "Indosiar",
                "jadwal_tayang" => [
                    [
                        "nama_program" => "Dangdut Academy",
                        "jam_tayang" => "20.00",
                        "tanggal_tayang" => "5 Februari 2022"
                    ],
                    [
                        "nama_program" => "Ajab",
                        "jam_tayang" => "14.00",
                        "tanggal_tayang" => "6 Februari 2022"
                    ],
                    [
                        "nama_program" => "Si BOtak",
                        "jam_tayang" => "9.00",
                        "tanggal_tayang" => "7 Februari 2022"
                    ]
                ]
            ]
        ];

        return view('pages.latihan3', ["televisi" => $televisi]);
    }
}
