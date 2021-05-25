<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Kategori;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\About;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profil()
    {
        $berita = Kategori::where('id_menu', '=', 'Berita')->get();
        $gallery = Kategori::where('id_menu', '=', 'Gallery')->get();
        $about = Kategori::where('id_menu', '=', 'About')->get();
        return view('welcome', ['berita' => $berita, 'gallery' => $gallery, 'about' => $about]);
    }
    public function asd($berita)
    {
        return view('berita',['berita' => $berita]);
    }
}
