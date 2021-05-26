<?php


namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function profil()
    {
        $berita = Kategori::where('id_menu', '=', 'Berita')->get();
        $gallery = Kategori::where('id_menu', '=', 'Gallery')->get();
        $about = Kategori::where('id_menu', '=', 'About')->get();
        return view('welcome', ['berita' => $berita, 'gallery' => $gallery, 'about' => $about]);
    }
    public function berita($berita)
    {
        $beritas = Berita::where('id_menu', '=', $berita)->get();
        return view('berita',['berita' => $beritas]);
    }
}
