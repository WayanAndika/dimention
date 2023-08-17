<?php

namespace App\Models;

class Peminjaman
{
    private static $pinjam = [
        [
            "nama_peminjam" => "Jono",
            "judul" => "Cinta Kasih",
            "tahun" => "2022",
            "penerbit" => "CV.Nusa Bangsa",
            "category" => "Novel"
        ],
        [
            "nama_peminjam" => "Buana",
            "judul" => "Cinta Kasih 2",
            "tahun" => "2023",
            "penerbit" => "CV.Nusa Bangsa",
            "category" => "Novel"
        ],
    ];

    public static function all()
    {
        return self::$pinjam;
    }
}
