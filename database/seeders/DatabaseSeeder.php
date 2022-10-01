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
        Image::create([
            "gambar" => "akrilik.png",
            "judul_detail" => "Aplikasi website Akrilik Laser Cutting",
            "detail" => "Project pertama aplikasi web dari softdev community yaitu landing page atau aplikasi web profil yang bernama Akrilik Laser Cutting",
            "rincian" => "Laravel 8, PHP 7.4, Mysql, Bootstrap 5, etc",
            "judul" => "Akrilik Laser Cutting",
            "jenis" => "Aplikasi Web",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "Aplikasi Web",
            "link" => "https://akriliklasercutting.com/"
        ]);
        Image::create([
            "gambar" => "bimahelm.png",
            "judul_detail" => "Aplikasi website Bima Helm",
            "detail" => "Project aplikasi website ke dua dari softdev community dengan nama Bima Helm",
            "rincian" => "Laravel 8, PHP 7.4, Mysql, Bootstrap 5, etc",
            "judul" => "Bima Helm",
            "jenis" => "Aplikasi Web",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "Aplikasi Web",
            "link" => "https://bimahelm.com"
        ]);
        Image::create([
            "gambar" => "smegamart.png",
            "judul_detail" => "Aplikasi website SmegaMart",
            "detail" => "Project aplikasi web ke tiga dari softdev community dengan nama SmegaMart",
            "rincian" => "Laravel 8, PHP 7.4, Tailwind Css, Javascript, etc",
            "judul" => "SmegaMart",
            "jenis" => "Aplikasi Web",
            "klien" => "SMKN 1 Purbalingga",
            "apk" => "Aplikasi Web",
            "link" => "https://newsmegamart.com"
        ]);
        Image::create([
            "gambar" => "iot.png",
            "judul_detail" => "Projek Prototype IOT",
            "detail" => "Projek lain dari softdev community yaitu Prototype IOT",
            "rincian" => "Arduino",
            "judul" => "Prototype IOT",
            "jenis" => "IOT",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "IOT",
            "link" => ""
        ]);
    }
}