<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailhasil($id)
    {
        return view('Detail/detailhasil', [
            "title" => "HASIL RINCIAN",
            "gambar" => Image::find($id),
        ]);
    }
}