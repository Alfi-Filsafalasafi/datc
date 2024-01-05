<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;

class DetailArtikelController extends Controller
{
    public function detail_artikel($id){
        $artikel = Artikel::find($id);
    
        // Mendapatkan maksimal 5 artikel selain artikel yang sedang dilihat
        $lain = Artikel::whereNotIn('id', [$id])->take(5)->get();
    
        return view('detail_artikel', ['artikel' => $artikel, 'lains' => $lain]);
    }
}
