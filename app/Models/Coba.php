<?php

namespace App\Models;

class Coba
{
    private static $data = [
        [
            "nama" => "Andika",
            "id" => 1
        ],
        [
            "nama" => "Jono",
            "id" => 2
        ]
    ];
    public static function all()
    {
        return self::$data;
    }
    public static function find($id)
    {
        $datas = self::$data;
        $d = [];
        foreach ($datas as $a) {
            if ($a["id"] === intval($id)) {
                $d = $a;
            }
        }
        return $d;
    }
}
