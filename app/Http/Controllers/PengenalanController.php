<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function pengenalan() {
        $nama = "Refal Falah Fadhilah";
        $umur = 17;
        return view('pages.pengenalan', compact('nama', 'umur'));
    }

    public function intro ($nama, $alamat, $umur) {
        return view('pages.intro', compact('nama', 'alamat', 'umur'));
    }

    public function siswa () {
        $siswa = [
            [
                "id" => 1,
                "name" => "Refal",
                "age" => 17,
                "mapel" => ["Matematika" ,"B.Indonesia"]
            ],
            [
                "id" => 2,
                "name" => "Udin",
                "age" => 16,
                "mapel" => ["B.Sunda" ,"Fisika"]
            ]
        ];

        return view('pages.siswa', ["siswa" => $siswa]);
    }
}
