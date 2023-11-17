<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use File;

class ArtikelPribadiController extends Controller
{
    public function index(){
        $datas = Artikel::whereNotNull('isi')->get();
        return view("admin.artikelpribadi.index", ['datas' => $datas]);
    }
    public function create(){
        return view("admin.artikelpribadi.create");
    }
    public function store(Request $request){   
        $validateData = $request->validate([
            'img' => 'required|mimes:jpeg,jpg,png|max:5000',
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:3',
            'isi' => 'required|min:30',
        ]);

        $artikel = new artikel();


        $extFile = $request->nama;
        $extensi = $request->img->getClientOriginalExtension();
        $namaFile = $extFile."-".time().".".$extensi;
        $path = $request->img->move('img/artikel',$namaFile);
        $artikel->img = $namaFile;

        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();


        $artikel->judul = $validateData['judul'];
        $artikel->isi = $dom->saveHTML();
        $artikel->deskripsi = $validateData['deskripsi'];
        $artikel->save();
        return redirect()->route('artikel_pribadi.index')->with('success', 'Artikel berhasil ditambahkan');

    }
    public function edit(artikel $id){
        return view('admin.artikelpribadi.edit',['artikel' =>$id]);
    }
    public function update(Request $request, $id){
        $artikel = artikel::where('id',$id)->first();
        if($request->img == ""){
            $validateData = $request->validate([
                'judul' => 'required|min:3',
                'deskripsi' => 'required|min:3',
                'isi' => 'required|min:30',
            ]);
        }else{
            $validateData = $request->validate([
                'img' => 'required|mimes:jpeg,jpg,png|max:5000',
                'judul' => 'required|min:3',
                'deskripsi' => 'required|min:3',
                'isi' => 'required|min:30',
    
            ]);
            File::delete('img/artikel/'.$artikel->img);
    
            $extFile = $request->nama;
            $extensi = $request->img->getClientOriginalExtension();
            $namaFile = $extFile."-".time().".".$extensi;
            $path = $request->img->move('img/artikel',$namaFile);
            $artikel->img = $namaFile;
        }
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        $artikel->judul = $validateData['judul'];
        $artikel->deskripsi = $validateData['deskripsi'];
        $artikel->isi = $dom->saveHTML();
        $artikel->save();
        return redirect()->route('artikel_pribadi.index')->with('success', 'Artikel berhasil diedit');

    }
    public function destroy($id){

        $artikel = artikel::where('id',$id)->first();
        File::delete('img/artikel/'.$artikel->img);
        $artikel->delete();
        return redirect()->route('artikel_pribadi.index')->with('success', 'Artikel berhasil dihapus');

    }
}
