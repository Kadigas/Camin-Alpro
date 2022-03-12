<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camin extends Model
{
    use HasFactory;

    private static $dataCamin = [
        [
            "id" => 1,
            "nama" => "Andhika Ditya Bagaskara D.",
            "nrp" => "5025201096",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020"
        ],
        [
            "id" => 2,
            "nama" => "Naufal Faadhilah",
            "nrp" => "5025201221",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020"
        ],
        [
            "id" => 3,
            "nama" => "Luthfiyyah Hanifah Amari",
            "nrp" => "5025201090",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020"
        ],
        [
            "id" => 4,
            "nama" => "Mohammad Fany Faizul Akbar",
            "nrp" => "5025201225",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020"
        ]
    ];

    public static function getAllDataCamin()
    {
        return self::$dataCamin;
    }

    public static function getDataCamin($id)
    {
        return self::$dataCamin[$id];
    }
}
