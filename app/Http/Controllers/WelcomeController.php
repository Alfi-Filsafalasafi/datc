<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hubungiKami;
use App\Models\artikel;


class WelcomeController extends Controller
{
    public function index(){
        $artikel = artikel::all();
        return view("welcome",['artikels' => $artikel]);
    }

    public function store_hubungi(Request $request){
        $validateData = $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'pesan' => 'required|min:3',
        ]);
        $hubungi = new hubungiKami();
        $hubungi->nama = $validateData['nama'];
        $hubungi->email = $validateData['email'];
        $hubungi->pesan = $validateData['pesan'];
        $hubungi->status = '1';
        $hubungi->save();
        return redirect()->route('welcome')->with('success', 'Pesan anda berhasil terkirim');

    }
}
