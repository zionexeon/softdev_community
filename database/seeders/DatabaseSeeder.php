<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Team;

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
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1664641179/softdev/akrilik_jw6xhb.png",
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
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1664641187/softdev/bimahelm_wmyruz.png",
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
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1664641197/softdev/smegamart_bliwxd.png",
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
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1664641196/softdev/iot_iq9dor.png",
            "judul_detail" => "Projek Prototype IOT",
            "detail" => "Projek lain dari softdev community yaitu Prototype IOT",
            "rincian" => "Arduino",
            "judul" => "Prototype IOT",
            "jenis" => "IOT",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "IOT",
            "link" => ""
        ]);
        Image::create([
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1664685888/softdev/desktop_q03ec5.jpg",
            "judul_detail" => "Aplikasi Desktop Kasir",
            "detail" => "Projek aplikasi desktop dari softdev community yaitu aplikasi desktop kasir",
            "rincian" => "Java",
            "judul" => "Desktop Kasir",
            "jenis" => "Aplikasi Desktop",
            "klien" => "SMKN 1 Purbalingga",
            "apk" => "Aplikasi Desktop",
            "link" => ""
        ]);
        Team::create([
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1664641191/softdev/team_fulpjw.jpg"
        ]);
        Team::create([
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1665212542/softdev/team2_iajj9t.jpg"
        ]);
        Team::create([
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1665212543/softdev/team3_hyna9t.jpg"
        ]);
        Team::create([
            "gambar" => "https://res.cloudinary.com/dnmkw2715/image/upload/v1665212551/softdev/team4_hrrcuy.jpg"
        ]);
    }
}