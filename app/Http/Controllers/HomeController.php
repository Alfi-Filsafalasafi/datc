<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hubungiKami;
use App\Models\artikel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = hubungiKami::orderBy('status', 'asc')
        ->orderBy('created_at', 'desc')
        ->get();
        $total = hubungiKami::where('status',1)->count();
        return view('admin.dashboard',['datas' => $data,'total' => $total]);
    }
    public function dibaca($id){
        $data = hubungiKami::findOrFail($id);
        $data->status = 2;
        $data->save();
        return redirect()->route('home')
                ->with('success',"pesan sudah dibaca");
    }

   
    
    
}
