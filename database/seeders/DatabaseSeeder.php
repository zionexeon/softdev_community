<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Image::create ([
            "gambar" => "akrilik.png",
            "judul_detail" => "Aplikasi website Akrilik Laser Cutting",
            "detail" => "Aplikasi website profil perusahaan CV. Mekar Laser dengan nama Akrilik Laser
            Cutting",
            "rincian" => "Laravel 8, PHP 7.4, Mysql",
            "judul" => "Akrilik Laser Cutting",
            "jenis" => "Aplikasi Web",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "Aplikasi Web",
            "link" => "https://akriliklasercutting.com/"
        ]);
        Image::create ([
            "gambar" => "bimahelm.png",
            "judul_detail" => "Aplikasi website Bima Helm",
            "detail" => "Aplikasi website ke dua dari perusahaan CV. Mekar Laser dengan nama Bima Helm",
            "rincian" => "Laravel 8, PHP 7.4, Mysql",
            "judul" => "Bima Helm",
            "jenis" => "Aplikasi Web",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "Aplikasi Web",
            "link" => "Proses"
        ]);
        Image::create ([
            "gambar" => "iot.png",
            "judul_detail" => "Projek Prototype IOT",
            "detail" => "Projek lain dari perusahaan CV. Mekar Laser yaitu Prototype IOT",
            "rincian" => "Arduino",
            "judul" => "Prototype IOT",
            "jenis" => "IOT",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "IOT",
            "link" => ""
        ]);
    }
}