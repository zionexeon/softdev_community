<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home/home', [
            "title" => "HOME",
            "slug" => "Soft Dev Community adalah sebuah komunitas yang berfokus dalam bidang IT seperti dalam pembuatan aplikasi web, dekstop, prototype IOT, dan lain sebagainnya."
        ]);
    }
    public function about()
    {
        return view('Home/about', [
            "title" => "ABOUT"
        ]);
    }
    public function portfolio()
    {
        return view('Home/portfolio', [
            "title" => "PORTFOLIO",
            "gambars" => Image::all(),
            "website" => Image::where("jenis", "Aplikasi Web")->get(),
            "dekstop" => Image::where("jenis", "Aplikasi Dekstop")->get(),
            "iot" => Image::where("jenis", "IOT")->get(),
        ]);
    }
    public function contact()
    {
        return view('Home/contact', [
            "title" => "CONTACT"
        ]);
    }
    public function team()
    {
        return view('Home/team', [
            "title" => "TIM"
        ]);
    }
    public function mitra()
    {
        return view('Home/mitra', [
            "title" => "MITRA"
        ]);
    }
    public function testimoni()
    {
        return view('Home/testimoni', [
            "title" => "TESTIMONI"
        ]);
    }
    public function kebijakan()
    {
        return view('Home/kebijakan', [
            "title" => "KEBIJAKAN PRIBADI"
        ]);
    }
    public function syarat()
    {
        return view('Home/syarat', [
            "title" => "Syarat & Ketentuan"
        ]);
    }
    public function klien()
    {
        return view('Home/klien', [
            "title" => "KLIEN"
        ]);
    }
    public function payment()
    {
        return view('Home/payment', [
            "title" => "PEMBAYARAN"
        ]);
    }
}