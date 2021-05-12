<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('admin.admin_home');
    }

    //Kategori
    public function kategori()
    {
        $kategori = Kategori::all();
        return view('admin.admin_kategori',['kategori' => $kategori]);
    }
    public function store_kategori(Request $request)
    {
        $validateData = $request->validate([

            'nama_kategori'         => 'required',
            'id_menu'         => 'required',
            ]);

            $kategori = new Kategori();
            $kategori->nama_kategori = $validateData['nama_kategori'];
            $kategori->id_menu = $validateData['id_menu'];
            $kategori->save();

            return redirect()->route('kategori')->with('pesan',"Penambahan data {$validateData['nama_kategori']} berhasil");
    }
    public function edit_kategori(Kategori $kategori)
    {
        return view('admin.kategori_edit',['kategori' => $kategori]);
    }
    public function update_kategori(Request $request, Kategori $kategori)
    {
        $validateData = $request->validate([
            'nama_kategori'         => 'required',
            'id_menu'         => 'required',
            ]);

            Kategori::where('id',$kategori->id)->update($validateData);
            return redirect()->route('kategori')->with('pesan',"Update data {$validateData['nama_kategori']} berhasil");
    }
    public function destroy_kategori(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori')->with('pesan',"Hapus data $kategori->nama_kategori berhasil");
    }

    //user
    public function user()
    {
        $user = User::all();
        return view('admin.admin_user',['user' => $user]);
    }
    public function store_user(Request $request)
    {
        $validateData = $request->validate([

            'name'         => 'required', 'string', 'max:255',
            'email'        => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password'     => 'required', 'string', 'min:8', 'confirmed',
            ]);

            $user = new User();
            $user->name = $validateData['name'];
            $user->email = $validateData['email'];
            $user->password = Hash::make($validateData['email']);
            $user->save();

            return redirect()->route('user')->with('pesan',"Penambahan data {$validateData['name']} berhasil");
    }
    public function edit_user(User $user)
    {
        return view('admin.user_edit',['user' => $user]);
    }
    public function update_user(Request $request, User $user)
    {
        $validateData = $request->validate([
            'name'         => 'required', 'string', 'max:255',
            'email'        => 'required', 'string', 'email', 'max:255', 'unique:users',
            ]);

            User::where('id',$user->id)->update($validateData);
            return redirect()->route('user')->with('pesan',"Update data {$validateData['name']} berhasil");
    }
    public function destroy_user(User $user)
    {
        $user->delete();
        return redirect()->route('user')->with('pesan',"Hapus data $user->name berhasil");
    }
    //berita
    public function berita()
    {
        return view('admin/admin_berita');
    }

    //gallery
    public function gallery()
    {
        return view('admin/admin_gallery');
    }

    //about
    public function about()
    {
        return view('admin/admin_about');
    }
}
