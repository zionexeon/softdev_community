<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailhasil()
    {
        return view('Detail/detailhasil', [
            "title" => "HASIL RINCIAN",
            "gambar" => "/img/akrilik.png",
            "klien" => "CV. Mekar Laser Cutting Digital",
            "apk" => "Aplikasi Website"
        ]);
    }
}