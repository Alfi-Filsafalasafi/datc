<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;

use File;


class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $datas = artikel::all();
        return view("admin.artikel.index", ['datas' => $datas]);
    }
    public function create(){
        return view("admin.artikel.create");
    }
    public function store(Request $request){   
        $validateData = $request->validate([
            'img' => 'required|mimes:jpeg,jpg,png|max:5000',
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:3',
            'link' => 'required|min:3',
        ]);

        $artikel = new artikel();

        $extFile = $request->nama;
        $extensi = $request->img->getClientOriginalExtension();
        $namaFile = $extFile."-".time().".".$extensi;
        $path = $request->img->move('img/artikel',$namaFile);
        $artikel->img = $namaFile;

        $artikel->judul = $validateData['judul'];
        $artikel->link = $validateData['link'];
        $artikel->deskripsi = $validateData['deskripsi'];
        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan');

    }
    public function edit(artikel $id){
        return view('admin.artikel.edit',['artikel' =>$id]);
    }
    public function update(Request $request, $id){
        $artikel = artikel::where('id',$id)->first();
        if($request->img == ""){
            $validateData = $request->validate([
                'judul' => 'required|min:3',
                'deskripsi' => 'required|min:3',
                'link' => 'required|min:3',
            ]);
        }else{
            $validateData = $request->validate([
                'img' => 'required|mimes:jpeg,jpg,png|max:5000',
                'judul' => 'required|min:3',
                'deskripsi' => 'required|min:3',
                'link' => 'required|min:3',
    
            ]);
            File::delete('img/artikel/'.$artikel->img);
    
            $extFile = $request->nama;
            $extensi = $request->img->getClientOriginalExtension();
            $namaFile = $extFile."-".time().".".$extensi;
            $path = $request->img->move('img/artikel',$namaFile);
            $artikel->img = $namaFile;
        }
        $artikel->judul = $validateData['judul'];
        $artikel->deskripsi = $validateData['deskripsi'];
        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diedit');

    }
    public function destroy($id){

        $artikel = artikel::where('id',$id)->first();
        File::delete('img/artikel/'.$artikel->img);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus');

    }
}
